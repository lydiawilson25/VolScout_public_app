<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function($t) 
		{
          $t->engine = 'InnoDB';

          $t->increments('id');
          $t->string('proj_name', 50);
         
          $t->integer('state_id')->unsigned();
          $t->foreign('state_id')->references('id')->on('states');

     	  $t->string('proj_location', 100);   //location of the project
          $t->dateTime('visit_DueBy');	
          $t->string('proj_coordinator',50);   //name of the project coordinator
          $t->string('proj_status', 15);   
          $t->string('proj_sitevisit_vol_id',4); // Id of the volunteer who made the visit to a project
          $t->dateTime('proj_last_date_of_visit'); //Project date last visited
          
	    });

	    
	}

	

	public function down()


	
	{
		Schema::drop('projects');
	}

	

}
