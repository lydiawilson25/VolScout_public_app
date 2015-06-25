<?php

class PendingController extends BaseController {

	
	public $restful = true;
public function login()
	{
		return View::make('ashas.login');
	}

	public function user()
	{    	

		$credentials = array(
			'username' => Input::get('username'),
			'$pass' => Input::get('password'),
                         $pass = Hash::make($pass));

		if(Auth::attempt($credentials))
		{
			
			return View::make('ashas.profile');
		}
		else
		{
			return View::make('ashas.unsuccessfullogin');		         		
		}
	}


	public function svv()
	{
		return View::make('ashas.sitevisit');
	}

	
	public function store()
	{			

		$messages = array(
			'vol_firstname.required' => 'Firstname is required.',
			'vol_lastname.required' => 'Lastname is required.',
			'username.email' => 'Please enter a valid email address',
			'username.required' => 'Email address is required.',
			'password.required' => 'Password is required.',			
			'chapter.required' => 'Chapter is required.',
			'Details_true.required' => 'Please check this box',
			'username.unique' => 'This username has already been taken.');

		
		$user = new User; 
		$user->vol_firstname    = Input::get('vol_firstname');
		$user->vol_lastname    = Input::get('vol_lastname');		
		$user->username    = Input::get('username');
		$user->password    = Hash::make(Input::get('password'));
		$user->vol_chapter    = Input::get('vol_chapter');
		$user->vol_gender    = Input::get('vol_gender');
		$user->vol_highest_degree    = Input::get('vol_highest_degree');
		$user->vol_prev_experience    = Input::get('vol_prev_experience');
		$user->vol_prev_exp_details    = Input::get('vol_prev_exp_details');
		$user->vol_asha_contact    = Input::get('vol_asha_contact');
		$user->vol_asha_contact_details    = Input::get('vol_asha_contact_details');
		$user->vol_interests    = Input::get('vol_interests');
		$user->vol_site_visit_volunteer    = Input::get('vol_site_visit_volunteer');		
		$user->vol_street_address    = Input::get('vol_street_address');
		$user->vol_zipcode    = Input::get('vol_zipcode');
		$user->vol_city    = Input::get('vol_city');
		$user->vol_state    = Input::get('vol_state');
		$user->vol_country    = Input::get('vol_country');
		$user->vol_phone    = Input::get('vol_phone');

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
			'username' => 'required|email|unique:pendingvolunteers',
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
			$user->save(); 
			return View::make('ashas.profile');
		} else {

			$errors = $v->messages()->all();
			echo 'The errors are::'. "<br/>";
			foreach ($errors as $value) {
				echo ($value."<br/>");

			}
		}
	}
}





/*
<?php

class PendingController extends BaseController {

# Handles "GET asdf" request
        public function getIndex()
        {
                return View::make('svv_registration')->with('pendingvolunteers',Pending::all());
        }

# Handles "POST asdf"  request
        public function postIndex()
        {
                $pending = array(
                                'vol_firstname' => Input::get('vFname'),
                                'vol_lastname' => Input::get('vLname'),
                                'vol_email' => Input::get('vEmail'),
                                'vol_chapter' => Input::get('vChapterlist'),
                                'vol_gender' => Input::get('vGender'),
                                 'vol_highest_degree' => Input::get('vDegreelist'),
                                 'vol_prev_experience' => Input::get('vExp'),
                                 'vol_prev_exp_details' => Input::get('vExpdet'),
                                 'vol_asha_contact' => Input::get('vContact'),
                                 'vol_asha_contact_details' => Input::get('vCondet'),
                                 'vol_street_address' => Input::get('vAddr'),
                                 'vol_zipcode' => Input::get('vZip'),
                                 'vol_city' => Input::get('vCity'),
                                 'vol_state' => Input::get('vState'),
                                 'vol_country' => Input::get('vCountry'),
                                  'vol_phone' => Input::get('vPhone'),
                                  'vol_fax' => Input::get('vFax'),
                
                              );
                Pending::create($pending);
                return Redirect::to('asdf');
        }

}
*/
