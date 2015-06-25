<?php
class PendsvController extends BaseController {
public function pendsvlist()
        {
            return View::make('pendsvlist')->with('temps', Temp::all());
}



public function getIndex()
        {
            
            $validdata = Input::has('svdata');
            if($validdata)
                { 
                    $newsvdata = unserialize(urldecode(Input::get('svdata'))); 
                     $approve_request = Input::get('approve');
                    if($approve_request == '1')
                    {                        
 $approvsv = new Approvsv();
                    

//$approvsv->id = $newsvdata->id;
$approvsv->proj_id = $newsvdata->proj_id;
$approvsv->vol_id = $newsvdata->vol_id;

                    $approvsv->save();
DB::table('temps')->where('id', $newsvdata->id)->delete();
DB::table('projects')->Where('id', $newsvdata->proj_id)->update(array('proj_status' => 'Approved'));

                $n = DB::table('volunteers')->where('id', $newsvdata->vol_id)->pluck('vol_lastname');
		$e = DB::table('volunteers')->where('id', $newsvdata->vol_id)->pluck('username'); 
                $user = array(
                        'name'=> $n,
                        'email'=> $e,                           
                    );
                     
                    // the data that will be passed into the mail view blade template
                    $data = array(
                        'detail'=>'Your login information is:',
                        'name'      => $user['name'],
                        'email'  => $user['email']
                    );
                     
                    // use Mail::send function to send email passing the data and using the $user variable in the closure

                    Mail::send('emails.welcome', $data, function($message) use ($user)
                    {
                      //$message->from('admin@site.com', 'Site Admin');
                      $message->to($user['email'], $user['name'])->subject('Welcome to Asha!');
                  
                      //$message->to($email, $name)->subject('Welcome to Asha!');
                    });
                }
              
                  
return Redirect::to('pendsvlist')->with('approve_status', $approve_request);
}
$name = Route::currentRouteName();
        	if ($name == 'svlist')
        	{
        		return View::make('svlist')->with('approvsv', Approvsv::all());
            }
        	
        }
        public function svdecline()
        {
      
            $validdata = Input::has('svdata');
            if($validdata)
                { 
                    $newsvdata = unserialize(urldecode(Input::get('svdata'))); 
                     $approve_request = Input::get('approve');
                    if($approve_request == '0')
                    {                        
 $approvsv = new Approvsv();
                    

//$approvsv->id = $newsvdata->id;
$approvsv->proj_id = $newsvdata->proj_id;
$approvsv->vol_id = $newsvdata->vol_id;

                    $approvsv->save();
DB::table('temps')->where('id', $newsvdata->id)->delete();
$n = DB::table('volunteers')->where('id', $newsvdata->vol_id)->pluck('vol_lastname');
        $e = DB::table('volunteers')->where('id', $newsvdata->vol_id)->pluck('username'); 
                $user = array(
                        'name'=> $n,
                        'email'=> $e,                           
                    );
                     
                    // the data that will be passed into the mail view blade template
                    $data = array(
                        'detail'=>'Your request has been declined, Sorry',
                        'name'      => $user['name'],
                        'email'  => $user['email']
                    );
                     
                    // use Mail::send function to send email passing the data and using the $user variable in the closure

                    Mail::send('emails.decline', $data, function($message) use ($user)
                    {
                      //$message->from('admin@site.com', 'Site Admin');
                      $message->to($user['email'], $user['name'])->subject('Request Declined!');
                  
                      //$message->to($email, $name)->subject('Welcome to Asha!');
                    });
                }
              
return Redirect::to('pendsvlist')->with('approve_status', $approve_request);
}
$name = Route::currentRouteName();
            if ($name == 'svlist')
            {
                return View::make('svlist')->with('approvsv', Approvsv::all());
            }
            
        }



public function svprojlist()
{

$projid=Input::has('projid');
if($projid)
{
 $newprojid = Input::get('projid');

return View::make('svprojlist')->with('projects', Project::where('id', '=', $newprojid)->get());
}
}
public function voldetail()
{
$voldet= Input::has('voldet');
if($voldet)
{
$newvoldet = Input::get('voldet');
return View::make('voldetail')->with('volunteers', Volunteer::where('id', '=', $newvoldet)->get());
}
}
}
