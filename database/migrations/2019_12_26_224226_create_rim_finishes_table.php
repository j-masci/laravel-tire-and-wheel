<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRimFinishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // todo: both steel and alloy could potentially belong to the rim models table but it depends on real world data.
        Schema::create('rim_finishes', function (Blueprint $table) {
            $table->bigIncrements('id' );
            $table->unsignedBigInteger('model_id' );
            $table->string( 'slug' );
            $table->string( 'name' );
            $table->string( 'type' )->default( 'steel' );
            $table->boolean( 'winter_approved' )->default( 1 );
            $table->timestamps();
            // $table->foreign( 'rim_model_id' )->references( 'rim_model_id' )->on( 'rim_models' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rim_finishes');
    }
}
