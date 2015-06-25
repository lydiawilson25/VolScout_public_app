<?php

use Illuminate\Database\Migrations\Migration;

class CreateApprovsvTable extends Migration {

        public function up()
        {
                Schema::create('approvsv', function($t)
                {
          $t->engine = 'InnoDB';

          $t->increments('id'); 
          $t->integer('proj_id');

          $t->integer('vol_id');

          $t->integer('status_id');
          $t->dateTime('start_date'); // start date of the project, info filled by coord
          $t->dateTime('end_date'); // end date of the project and not the visit.

                });

        }

        public function down()
        {
                Schema::drop('approvsv');
        }

}

