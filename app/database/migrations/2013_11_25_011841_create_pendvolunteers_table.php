<?php

use Illuminate\Database\Migrations\Migration;

class CreatePendvolunteersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('pendvolunteers', function($t) {          
          $t->increments('vol_id');
          $t->string('vol_firstname', 50);
          $t->string('vol_lastname', 50);
          $t->string('username', 100);
          $t->string('password', 65);
          $t->string('vol_chapter', 50);
          $t->string('vol_role', 25);
          $t->string('vol_site_visit_volunteer', 4);
          $t->string('vol_gender', 10);
          $t->string('vol_highest_degree', 20);
          $t->string('vol_prev_experience', 4);
          $t->text('vol_prev_exp_details');
          $t->string('vol_asha_contact', 50);
          $t->text('vol_asha_contact_details');
          $t->text('vol_interests');
          $t->string('vol_street_address', 100);
          $t->integer('vol_zipcode');
          $t->string('vol_city', 50);
          $t->string('vol_state', 50);
          $t->string('vol_country', 50);
          $t->string('vol_phone', 20);
          $t->string('vol_fax', 20);
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
		Schema::drop('pendvolunteers');
	}

}
