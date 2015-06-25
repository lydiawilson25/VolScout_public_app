<?php

use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states', function($t)
	   {

         $t->engine = 'InnoDB';
         $t->increments('id'); //Primary Key
         $t->string('state_name',50);

       });
		



	}

	

	/**
	 * Reverse the migrations.
	 *
	 * 
	 */
	public function down()
	{
		Schema::drop('states');
	}



}
