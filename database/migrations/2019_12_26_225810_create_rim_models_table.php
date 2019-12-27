<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRimModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rim_models', function (Blueprint $table) {
            $table->bigIncrements( 'rim_model_id' );
            $table->unsignedBigInteger( 'rim_brand_id' );
            $table->string('rim_model_slug');
            $table->string('rim_model_name');
            $table->timestamps();
            // $table->foreign( 'rim_brand_id' )->references('rim_brand_id')->on('rim_brands' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rim_models');
    }
}
