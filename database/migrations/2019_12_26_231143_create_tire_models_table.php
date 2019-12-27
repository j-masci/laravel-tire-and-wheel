<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTireModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tire_models', function (Blueprint $table) {
            $table->bigIncrements( 'tire_model_id' );
            $table->unsignedBigInteger( 'tire_brand_id' );
            $table->string('tire_model_slug');
            $table->string('tire_model_name');
            $table->timestamps();
            // $table->foreign( 'tire_brand_id' )->references( 'tire_brand_id' )->on( 'tire_brands' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tire_models');
    }
}
