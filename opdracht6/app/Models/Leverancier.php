<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\ProductPerLeverancier;

class Leverancier extends Model
{
    use HasFactory;

    public function productPerLeveranciers()
    {

        return $this->hasMany(ProductPerLeverancier::class);
    }
}
