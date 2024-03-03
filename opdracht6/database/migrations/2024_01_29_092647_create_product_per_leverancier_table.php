<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_per_leveranciers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->date('datum_levering');
            $table->integer('aantal');
            $table->date('datum_eerstvolgende_levering')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_per_leverancier');
    }
};
