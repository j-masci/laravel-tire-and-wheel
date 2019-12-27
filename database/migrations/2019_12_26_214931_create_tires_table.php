<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('part_number' );
            $table->string('model_id' );
            $table->string('width');
            $table->string('profile');
            $table->string('diameter');
            $table->string('type');
            $table->string('load_index_1');
            $table->string('load_index_2')->default( '' );
            $table->string('speed_rating');
            $table->boolean('is_zr')->default( false );

            // todo: choose a protocol for this (lower or upper?)
            $table->string('sizing_system')->default( 'P' );
            $table->timestamps();
            // todo: address sql errors when adding many constraints
//            $table->foreign( 'model_id' )->references( 'model_id' )->on( 'tire_models' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tires');
    }
}
