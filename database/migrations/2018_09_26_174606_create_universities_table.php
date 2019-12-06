<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('universities', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 128);
			$table->timestamps();
		});
		
		
		
		
		
		Schema::create('committee_subscriptions', function(Blueprint $table){
            $table->integer('account_id')->unsigned();
			$table->integer('sub_committee_id')->unsigned();

            
            $table->foreign('account_id')->references('id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('sub_committee_id')->references('id')->on('sub_committees')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['account_id', 'sub_committee_id']);
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
		Schema::drop('committee_subscriptions');
		Schema::drop('universities');
		
    }
}
