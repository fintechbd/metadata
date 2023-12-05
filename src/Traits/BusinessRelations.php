<?php

namespace Fintech\MetaData\Traits;

use Fintech\Core\Facades\Core;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

if (Core::packageExists('Business')) {
    trait BusinessRelations
    {
        public function services(): BelongsToMany
        {
            return $this->belongsToMany(config('fintech.business.service_model', \Fintech\Business\Models\Service::class))->withTimestamps();
        }

    }
} else {
    trait BusinessRelations
    {
    }
}
