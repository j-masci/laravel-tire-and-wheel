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
        Schema::create('rim_finishes', function (Blueprint $table) {
            $table->bigIncrements('rim_finish_id' );
            $table->unsignedBigInteger('rim_model_id' );
            $table->string( 'rim_finish_slug' );
            $table->string( 'rim_finish_name' );
            // possible that its sufficient to put this on models, but it's here for now.
            $table->boolean( 'rim_finish_winter_approved' );
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
