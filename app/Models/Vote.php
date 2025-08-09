<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    public function options(): BelongsTo
    {
        return $this->belongsTo(Option::class);
    }
}
