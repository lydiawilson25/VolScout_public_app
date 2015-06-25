<?php

class CoordinatorController extends BaseController {

        # Handles "GET /" request
        public $restful = true;
        public function AddStates()
       {
        return View::make('Admin');
       }
       
       public function postStates()
       {
               $state= new State;

              // $credentials = array(
               $state->state_name = Input::get('state_name');
               $state->save();
               return Redirect::to('/Admin');
               
              /* $messages = array('state_name.unique' => 'This State already Exists');
               $rules = array('state_name' => 'alpha');
              $validator = Validator::make($credentials, $rules, $messages);              
              if( $validator->passes() ) 
                {
                 $state->save();
                 return View::make('Volscout.thanks');
                }
                else {
                $errors = $validator->messages()->all();
                }*/
        }

        public function DisplayProjects()
        {
          $state_options = State::lists('state_name', 'id');  
        	return View::make('Admin2')->with('state_options', $state_options); 

        }
  		
  		public function AddProjects()
        {
				    
           $project= new Project;
           $project->proj_name = Input::get('proj_name');
           $project->proj_location = Input::get('proj_location');
           $project->state_id = Input::get('states');
           $project->visit_DueBy = Input::get('visitDueBy');
           $project->save();
           $project->push();
           return Redirect::to('/Admin');
           
        }

        public function getCoordinatorEntry()
        {
           $proj_expanded = DB::table('projects')->select('projects.proj_name',
                                                         'projects.proj_location',
                                                         'states.state_name','projects.id',
                                                         'projects.visit_DueBy')
                                                ->join('states',
                                                       'states.id',
                                                       '=',
                                                       'projects.state_id')
                                                ->paginate(4);

           return View::make('ProjCoordinator')->with('projects', $proj_expanded);
        }

        public function getThanks()
        {
          return View::make('thanks');
        }

    }
