<?php

namespace Fintech\MetaData\Models;

use Fintech\Core\Abstracts\BaseModel;
use Fintech\Core\Traits\Audits\BlameableTrait;
use Fintech\Core\Traits\HasVendorCode;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class City extends BaseModel implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use BlameableTrait;
    use SoftDeletes;
    use HasVendorCode;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $hidden = ['creator_id', 'vendor_code' => 'array', 'editor_id', 'destroyer_id', 'restorer_id'];

    protected $casts = ['enabled' => 'bool', 'restored_at' => 'datetime', 'city_data' => 'array'];

    protected $attributes = ['enabled' => false];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function country(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.country_model', Country::class));
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(config('fintech.metadata.state_model', State::class));
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
            'show' => action_link(route('metadata.cities.show', $primaryKey), __('core::messages.action.show'), 'get'),
            'update' => action_link(route('metadata.cities.update', $primaryKey), __('core::messages.action.update'), 'put'),
            'destroy' => action_link(route('metadata.cities.destroy', $primaryKey), __('core::messages.action.destroy'), 'delete'),
            'restore' => action_link(route('metadata.cities.restore', $primaryKey), __('core::messages.action.restore'), 'post'),
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
