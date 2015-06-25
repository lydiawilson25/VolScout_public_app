<?php

class AshasController extends BaseController {

	
	public $restful = true;	

	public function login()
	{
		return View::make('login');
	}

	public function user()
	{    
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'));

		if(Auth::attempt($credentials, true))
		{
			Session::put('loginStatus', 'true');
			$un=Auth::user()->username;
			$role = DB::table('volunteers')->where('username', $un)->pluck('vol_role');
			
			
			if($role=='admin'){				
				return View::make('adminhome');
			} 
			else if ($role=='ashavolunteer'){
				return Redirect::to('http://www.ashanet.org/');
			}					
			else if ($role=='svv'){
				return Redirect::to('intro');
            } 
			else if ($role=='projcoordinator'){
						return View::make('Admin');
			} 
			else if ($role=='treasurer'){
						return Redirect::to('/volscout');} 
							
			} else{
						return Redirect::to('/login')->with('loginError','Please enter a valid username and password');
									         		
			}
		}


					public function register()
					{
						return View::make('register');
					}

					public function svv()
					{
						return View::make('svvregister');
					}

					public function adminpage()
					{
						return View::make('pendvollist');
					}		

					public function store()
					{			

						$messages = array(
							'vol_firstname.required' => 'Firstname is required.',
							'vol_lastname.required' => 'Lastname is required.',
							'username.email' => 'Email address should be in valid format',
							'username.required' => 'Email address is required.',							
							'password.required' => 'Password is required.',			
							'chapter.required' => 'Chapter is required.',
							'sitevisit_interest.required' => 'Your interest in site-visit is required.',
							'password.min' => 'Your password is too short! Min 5 characters is required!',			
							'username.unique' => 'This Email has already been taken.',
							'vol_zipcode.integer' => 'Zipcode should contain only numbers',
							'vol_city.alpha' => 'City should contain only alphabets',
							'vol_state.alpha' => 'State should contain only alphabets',
							'vol_country.alpha' => 'Country should contain only alphabets',
							'vol_phone.integer' => 'Phonenumber should contain only numbers');							;


						$pendvolunteers = new Pendvolunteer; 
						$pendvolunteers->vol_firstname    = Input::get('vol_firstname');
						$pendvolunteers->vol_lastname    = Input::get('vol_lastname');		
						$pendvolunteers->username    = Input::get('username');
						$pendvolunteers->password    = Hash::make(Input::get('password'));
						$pendvolunteers->vol_chapter    = Input::get('vol_chapter');
						$pendvolunteers->vol_gender    = Input::get('vol_gender');
						$pendvolunteers->vol_highest_degree    = Input::get('vol_highest_degree');
						$pendvolunteers->vol_prev_experience    = Input::get('vol_prev_experience');
						$pendvolunteers->vol_prev_exp_details    = Input::get('vol_prev_exp_details');
						$pendvolunteers->vol_asha_contact    = Input::get('vol_asha_contact');
						$pendvolunteers->vol_asha_contact_details    = Input::get('vol_asha_contact_details');
						$pendvolunteers->vol_interests    = Input::get('vol_interests');
						$pendvolunteers->vol_site_visit_volunteer    = Input::get('vol_site_visit_volunteer');		
						$pendvolunteers->vol_street_address    = Input::get('vol_street_address');
						$pendvolunteers->vol_zipcode    = Input::get('vol_zipcode');
						$pendvolunteers->vol_city    = Input::get('vol_city');
						$pendvolunteers->vol_state    = Input::get('vol_state');
						$pendvolunteers->vol_country    = Input::get('vol_country');
						$pendvolunteers->vol_phone    = Input::get('vol_phone');

						$credentials = array(
							'vol_firstname' => Input::get('vol_firstname'),
							'vol_lastname' => Input::get('vol_lastname'),
							'username' => Input::get('username'),
							'password' => Input::get('password'),
							'vol_chapter' => Input::get('vol_chapter'),
							'vol_gender' => Input::get('vol_gender'),
							'vol_highest_degree' => Input::get('vol_highest_degree'),
							'vol_prev_experience' => Input::get('vol_prev_experience'),
							'vol_prev_exp_details' => Input::get('vol_prev_exp_details'),
							'vol_asha_contact' => Input::get('vol_asha_contact'),
							'vol_asha_contact_details' => Input::get('vol_asha_contact_details'),
							'vol_interests' => Input::get('vol_interests'),
							'vol_site_visit_volunteer' => Input::get('vol_site_visit_volunteer'),		
							'vol_street_address' => Input::get('vol_street_address'),
							'vol_zipcode' => Input::get('vol_zipcode'),
							'vol_city' => Input::get('vol_city'),
							'vol_state' => Input::get('vol_state'),
							'vol_country' => Input::get('vol_country'),
							'vol_phone' => Input::get('vol_phone'));

$rules = array(
	'vol_firstname' => 'required|max:50',
	'vol_lastname' => 'required|max:50',
	'username' => 'required|email|unique:volunteers',
	'password' => 'required|min:5',
	'vol_site_visit_volunteer' => 'required',
	'vol_zipcode' => 'integer',
	'vol_city' => 'alpha',
	'vol_state' => 'alpha',
	'vol_country' => 'alpha',
	'vol_phone' => 'integer' );         

$v = Validator::make($credentials, $rules, $messages);
if( $v->passes() ) 
{
	$pendvolunteers->save(); 
	return Redirect::to('/registerSuccess');
			//return View::make('ashas.profile');
} else {


	$errors = $v->messages()->all();
	return Redirect::to('/register')->with('validationErrors',$errors);
}
}
public function volscout()
{
	return View::make('index');
}
}
