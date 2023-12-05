<?php

namespace Fintech\MetaData\Models;

use Fintech\MetaData\Traits\BusinessRelations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Country extends Model implements HasMedia
{
    use \Fintech\Core\Traits\AuditableTrait;
    use SoftDeletes;
    use InteractsWithMedia;
    use BusinessRelations;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $hidden = ['creator_id', 'editor_id', 'destroyer_id', 'restorer_id'];

    protected $casts = ['enabled' => 'bool', 'restored_at' => 'datetime','timezones' => 'array', 'language' => 'array', 'country_data' => 'array'];

    protected $appends = ['links'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('logo_png')
            ->acceptsMimeTypes(['image/png'])
            ->singleFile()
            ->useDisk(config('filesystems.default', 'public'));

        $this->addMediaCollection('logo_svg')
            ->acceptsMimeTypes(['image/svg+xml'])
            ->singleFile()
            ->useDisk(config('filesystems.default', 'public'));
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function region(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.region_model', \Fintech\MetaData\Models\Region::class));
    }

    public function subregion(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.subregion_model', \Fintech\MetaData\Models\SubRegion::class));
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /**
     * return all resource link for this object
     *
     * @return array[]
     */
    public function getLinksAttribute()
    {
        $primaryKey = $this->getKey();

        $links = [
            'show' => action_link(route('metadata.countries.show', $primaryKey), __('core::messages.action.show'), 'get'),
            'update' => action_link(route('metadata.countries.update', $primaryKey), __('core::messages.action.update'), 'put'),
            'destroy' => action_link(route('metadata.countries.destroy', $primaryKey), __('core::messages.action.destroy'), 'delete'),
            'restore' => action_link(route('metadata.countries.restore', $primaryKey), __('core::messages.action.restore'), 'post'),
        ];

        if ($this->getAttribute('deleted_at') == null) {
            unset($links['restore']);
        } else {
            unset($links['destroy']);
        }

        return $links;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
