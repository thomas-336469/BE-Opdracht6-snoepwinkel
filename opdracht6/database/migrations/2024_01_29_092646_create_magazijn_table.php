<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagazijnTable extends Migration
{
    public function up()
    {
        Schema::create('magazijns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->decimal('verpakkings_eenheid', 8, 2);
            $table->integer('aantal_aanwezig')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('magazijn');
    }
}
