<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('sub_committees', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 64);
			$table->timestamps();
		});
		Schema::create('categories', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 64);
			$table->timestamps();
		});
		
		Schema::create('accounts', function(Blueprint $table){
			$table->increments('id');
			$table->string('first_name', 32);
			$table->string('last_name', 32);
			$table->string('phone_number', 30)->nullable();
			$table->string('status', 8)->nullable();
			$table->string('employer', 64)->nullable();
			$table->string('degree', 32)->nullable();
			$table->string('university', 128)->nullable();
			$table->integer('sub_committee_id')->unsigned()->nullable();
			$table->integer('category_id')->unsigned()->nullable();
			$table->timestamps();
			$table->foreign('sub_committee_id')->references('id')->on('sub_committees')->onUpdate('cascade');
			$table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade');
		});
		Schema::create('user_account', function(Blueprint $table){
			$table->integer('user_id')->unsigned();
            $table->integer('account_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('account_id')->references('id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'account_id']);
		});
		
		Schema::create('contributions', function(Blueprint $table){
			$table->increments('id');
			$table->integer('account_id')->unsigned();
			$table->float('amount', 8, 2);
			$table->string('description', 32);
			 $table->date('date');
			
			$table->timestamps();
			
			$table->foreign('account_id')->references('id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');
			
		});
		
		Schema::create('chairmen', function(Blueprint $table){
			$table->increments('id');
			$table->integer('account_id')->unsigned();
			$table->integer('sub_committee_id')->unsigned();
			$table->timestamps();
			
			$table->foreign('account_id')->references('id')->on('accounts')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('sub_committee_id')->references('id')->on('sub_committees')->onUpdate('cascade')->onDelete('cascade');
			
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
		Schema::drop('chairmen');
		Schema::drop('contributions');
		Schema::drop('user_account');
		Schema::drop('accounts');
		Schema::drop('categories');
		Schema::drop('sub_committees');
    }
}
