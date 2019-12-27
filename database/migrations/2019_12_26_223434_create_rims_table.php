<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rims', function (Blueprint $table) {
            $table->bigIncrements('rim_id' );
            $table->text('rim_part_number');
            $table->unsignedBigInteger('rim_finish_id' );
            $table->string('rim_width');
            $table->string('rim_diameter');
            $table->string('rim_offset');
            $table->string('rim_bolt_pattern_1');
            $table->string('rim_bolt_pattern_2');
            $table->string('rim_center_bore');
            $table->string('rim_type');
            $table->timestamps();
            // $table->foreign( 'rim_finish_id' )->references( 'rim_finish_id' )->on( 'rim_finishes' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rims');
    }
}
