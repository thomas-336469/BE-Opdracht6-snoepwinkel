<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductPerAllergeen;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Allergeen extends Model
{
    use HasFactory;

    public function productperallergeen(): BelongsTo
    {
        return $this->belongsTo(ProductPerAllergeen::class);
    }
}
