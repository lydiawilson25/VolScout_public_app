<?php

class VolunteersController extends BaseController {

        # Handles "GET /" request
        public function getIndex()
        {
            
            $validdata = Input::has('voldata');
            if($validdata)
                { 
                    $newvoldata = unserialize(urldecode(Input::get('voldata')));    
//print_r($newvoldata->vol_city);
                    
                   
                    $newvol = new Volunteer();                    

                  //  $newvol->id = $newvoldata->id;
                    $newvol->vol_firstname = $newvoldata->vol_firstname;
                    $newvol->vol_lastname = $newvoldata->vol_lastname;
                    $newvol->username = $newvoldata->username;
                    $newvol->password = $newvoldata->password;
                    $newvol->vol_chapter = $newvoldata->vol_chapter;
                    $newvol->vol_role = $newvoldata->vol_role;
                    $newvol->vol_site_visit_volunteer = $newvoldata->vol_site_visit_volunteer;
                    $newvol->vol_gender = $newvoldata->vol_gender;
                    $newvol->vol_highest_degree = $newvoldata->vol_highest_degree;
                    $newvol->vol_prev_experience = $newvoldata->vol_prev_experience;
                    $newvol->vol_prev_exp_details = $newvoldata->vol_prev_exp_details;
                    $newvol->vol_asha_contact = $newvoldata->vol_asha_contact;
                    $newvol->vol_asha_contact_details = $newvoldata->vol_asha_contact_details;
                    $newvol->vol_interests = $newvoldata->vol_interests;
                    $newvol->vol_street_address = $newvoldata->vol_street_address;
                    $newvol->vol_zipcode = $newvoldata->vol_zipcode;
                    $newvol->vol_city = $newvoldata->vol_city;
                    $newvol->vol_state = $newvoldata->vol_state;
                    $newvol->vol_country = $newvoldata->vol_country;
                    $newvol->vol_phone = $newvoldata->vol_phone;
                    $newvol->vol_fax = $newvoldata->vol_fax;                   
                                 
                
                    $user = array(
                        'name'=>$newvol->vol_firstname.' '.$newvol->vol_lastname,
                        'email'=>$newvol->username,                           
                    );
                        
                    $approve_request = Input::get('approve');
                    if($approve_request == '1')
                    { 
                        // Add volunteer to the database
                        $newvol->save();

                        // the data that will be passed into the mail view blade template
                        $data = array(
                            'detail'=>'Your login information is:',
                            'name'      => $user['name'],
                            'email'  => $user['email']
                        );
                         
                        // use Mail::send function to send email passing the data and using the $user variable in the closure

                        Mail::send('emails.welcome', $data, function($message) use ($user)
                        {                         
                          $message->to($user['email'], $user['name'])->subject('Welcome to Asha!');
                        });

                    }
                    else
                    {
                        // the data that will be passed into the mail view blade template
                        $data = array(
                            'detail'=>'The login information you provided was:',
                            'name'      => $user['name'],
                            'email'  => $user['email']
                        );
                         
                        // use Mail::send function to send email passing the data and using the $user variable in the closure

                        Mail::send('emails.decline', $data, function($message) use ($user)
                        {                          
                          $message->to($user['email'], $user['name'])->subject('Asha registration request rejected');
                        });

                    }

                    DB::table('pendvolunteers')->where('vol_id', $newvoldata->vol_id)->delete();
                  
                    return Redirect::to('viewvolrequests')->with('approve_status', $approve_request); 
                }
            
            
        	$name = Route::currentRouteName();
        	if ($name == 'sitevisitvollist')
        	{
        		return View::make('sitevisitvollist')->with('volunteers', Volunteer::all());
            }
            else
            {
            	return View::make('vollist')->with('volunteers', Volunteer::all());
            }
        	
        }

        # Handles "POST /" request
        public function postIndex()
        {
                      
        }

       
}
