<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('events', function(Blueprint $table){
			$table->increments('id');
			$table->string('title', 128);
			$table->string('description', 5000);
			$table->string('venue', 64);
			$table->dateTime('date');
			$table->integer('sub_committee_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('sub_committee_id')->references('id')->on('sub_committees')->onUpdate('cascade');
		});
		Schema::create('galleries', function(Blueprint $table){
			$table->increments('id');
			$table->string('title', 128);
			$table->string('description', 500);
			$table->date('date');
			$table->integer('sub_committee_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('sub_committee_id')->references('id')->on('sub_committees')->onUpdate('cascade');
		});
		
		Schema::create('gallery_photos', function(Blueprint $table){
			$table->increments('id');
			$table->integer('gallery_id')->unsigned();
			$table->string('url');
			$table->timestamps();
			
			$table->foreign('gallery_id')->references('id')->on('galleries')->onUpdate('cascade')->onDelete('cascade');
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::drop('gallery_photos');
		Schema::drop('galleries');
		Schema::drop('events');
    }
}
