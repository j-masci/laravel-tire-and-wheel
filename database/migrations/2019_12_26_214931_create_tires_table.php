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
            $table->bigIncrements('tire_id');
            $table->string('tire_part_number' );
            $table->string('tire_model_slug' );
            $table->string('tire_brand_slug' );
            $table->string('tire_width');
            $table->string('tire_profile');
            $table->string('tire_diameter');
            $table->string('tire_type');
            $table->string('tire_load_index_1');
            $table->string('tire_load_index_2');
            $table->string('tire_speed_rating');
            $table->string('tire_is_zr');
            $table->string('tire_sizing_system');
            $table->timestamps();
            // todo: address sql errors when adding many constraints
//            $table->foreign( 'tire_model_slug' )->references( 'tire_model_slug' )->on( 'tire_models' );
//            $table->foreign( 'tire_brand_slug' )->references( 'tire_model_slug' )->on( 'tire_models' );
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
