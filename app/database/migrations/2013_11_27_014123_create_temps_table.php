<?php

use Illuminate\Database\Migrations\Migration;

class CreateTempsTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
                Schema::create('temps', function($t)
           {

         $t->engine = 'InnoDB';
         $t->increments('id'); //Primary Key

         $t->integer('vol_id')->unsigned();
         $t->foreign('vol_id')->references('id')->on('volunteers'); //foreign key
         $t->integer('proj_id')->unsigned();
         $t->foreign('proj_id')->references('id')->on('projects');


       });

        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
                Schema::drop('temps');
        }

}
