<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Magazijn;
use App\Models\ProductPerAllergeen;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function magazijn(): HasOne
    {
        return $this->hasOne(Magazijn::class);
    }

    public function productPerAllergeens()
    {
        return $this->hasMany('App\Models\ProductPerAllergeen');
    }

    public function productPerLeveranciers()
    {
        return $this->hasMany(ProductPerLeverancier::class);
    }
}
