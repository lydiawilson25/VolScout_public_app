<?php
class AshasTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('ashas')->truncate();

		Volunteer::create(
			array(
				'vol_firstname' => 'admin',
				'vol_lastname' => 'admin',
				'vol_chapter' => 'ar',
				'vol_role' =>  'svv',
				'username' =>  'asha3svv@email.com',
				'password' =>  Hash::make('asha3'),
				'vol_gender' => 'male',
				'vol_highest_degree' => 'phd',
				'vol_prev_experience' =>  'asha3',
				'vol_prev_exp_details' =>  'asha3',
				'vol_asha_contact' =>  'asha3',
				'vol_asha_contact_details' =>  'asha3',
				'vol_interests' =>  'asha3',
				'vol_site_visit_volunteer' =>  'asha3',		
				'vol_street_address' =>  'asha3',
				'vol_zipcode' =>  '3333',
				'vol_city' =>  'asha',
				'vol_state' =>  'asha',
				'vol_country' =>  'asha',
				'vol_phone' =>  '55553'));
/*
        Volunteer::create(array(                 
                'vol_role' => 'admin',       
                'username' => 'meenu3@yahoo.com',
                'password' => Hash::make('meenupwd3')
        ));
*/        
        PendVolunteer::create(array(  
                
                'vol_firstname' => 'Meenu',
                'vol_lastname'  => 'Harikumar',
                'vol_role' => 'svv',   
                'vol_site_visit_volunteer' => 'yes',      
                'username' => 'meenakshyh@gmail.com',
                'password' => Hash::make('meenu')
        ));


				//'password' => Hash::make('admin')));
		// Uncomment the below to run the seeder
		// DB::table('ashas')->insert($ashas);
	}

}

