 <?php

class ProjectsController extends BaseController {

        # Handles "GET /" request
        public $restful = true;
       
        public function mainpage()
        {
          return View::make('index');  
        }
        public function getIndex()
        {
        	$states = DB::table('states')->paginate(5);
          return View::make('home')->with('states', $states);

        }

        public function getProjects($sid)
        {
          $projects = State::find($sid)->projects()->where('projects.proj_status', 'LIKE', '%Pending%')->get();
          return View::make('state')->with('projects', $projects);
        }

        public function postProjects()
        {
          $arrSelectedProjId = Input::get("checkboxProjs");
          $temps = new Temp;
          foreach ($arrSelectedProjId as $projectId)
          {
            $temps->proj_id = $projectId;
            $temps->vol_id = 1;
            $temps->save();
            return View::make('thanks');
          }
        }

       public function SendMail()
       {
       /* $user = array(
       'email'=>'myemail@mailserver.com',
       'name'=>'Laravelovich'); */

        /*$data = array(
        'detail'=>'Your awesome detail here',
        'name'  => $user['name']); 


       Mail::send('emails', $data, function($message), use($user)
          {
          $message->from('email address', 'Site Visit Volunteer');  
          $message->to('email address', 'Project Coordinator')->subject('Welcome!');
          });
       return View::make('emails')->with('data', $data); */
       }
                                                                                                
        

    }
