<?php

namespace Fintech\MetaData\Models;

use Fintech\Core\Abstracts\BaseModel;
use Fintech\Core\Traits\Audits\BlameableTrait;
use Fintech\Core\Traits\HasVendorCode;
use Fintech\MetaData\Traits\BusinessRelations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Currency extends BaseModel implements HasMedia, Auditable
{
    use \OwenIt\Auditing\Auditable;
    use BlameableTrait;
    use SoftDeletes;
    use InteractsWithMedia;
    use BusinessRelations;
    use HasVendorCode;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $hidden = ['creator_id', 'editor_id', 'destroyer_id', 'restorer_id'];

    protected $casts = ['enabled' => 'bool', 'restored_at' => 'datetime', 'vendor_code' => 'array', 'currency_data' => 'array'];


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
        return $this->belongsTo(config('fintech.metadata.region_model', Region::class));
    }

    public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(
            config('fintech.metadata.country_model', Currency::class),
            'country_currency',
            'country_id',
            'currency_id'
        )->withTimestamps();
    }

    public function subregion(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.subregion_model', SubRegion::class));
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
