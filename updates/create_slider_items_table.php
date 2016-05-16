<?php namespace Yehiaa\SequenceSlider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSliderItemsTable extends Migration
{

    public function up()
    {
        Schema::create('yehiaa_sequenceslider_slider_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->integer('slider_id')->unsigned()->nullable();
            $table->foreign('slider_id')->references('id')->on('yehiaa_sequenceslider_sliders')->onDelete('cascade');

            // $table->string('image');

            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('paragraph')->nullable();
            $table->string('linkText')->nullable();
            $table->string('link')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yehiaa_sequenceslider_slider_items');
    }

}
