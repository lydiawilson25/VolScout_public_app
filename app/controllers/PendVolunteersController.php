<?php

class PendVolunteersController extends BaseController {

        # Handles "GET /" request
        public function getIndex()
        {
        	return View::make('pendvollist')->with('pendvolunteers', Pendvolunteer::all());
                   	
        }
       
}
