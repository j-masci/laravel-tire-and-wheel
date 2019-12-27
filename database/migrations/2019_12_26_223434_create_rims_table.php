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
            $table->text('part_number');
            $table->unsignedBigInteger('finish_id' );
            $table->string('width');
            $table->string('diameter');
            $table->string('offset');
            $table->string('bolt_pattern_1');
            $table->string('bolt_pattern_2')->default('');
            $table->string('center_bore');

            // steel or alloy
            $table->string('type')->default( 'steel' );
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
