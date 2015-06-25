@extends("layouts.ashalayout")
@section("content")
<title>Volunteer Profile Page</title>

<h1>Thank You!</h1></head>
@foreach($volunteers as $volunteer)
              <p>ID:          {{ $volunteer->id}}</p>
              <p>Volunteer First Name: {{ $volunteer->vol_firstname}} </p>
              <p>Volunteer Last Name:   {{ $volunteer->vol_lastname}}</p>
              <p>Volunteer Chapter:       {{ $volunteer->vol_chapter}}</p>
              <p>Role:     {{ $volunteer->vol_role}}</p>
              <p>Site Visit Volunteer?         {{ $volunteer->vol_site_visit_volunteer}}</p>
              <p>Gender: {{ $volunteer->vol_gender}} </p>
              <p>Highest Degree Obtained:   {{ $volunteer->vol_highest_degree}}</p>
              <p>Previous Volunteering Experience:       {{ $volunteer->vol_prev_experience}}</p>
              <p>Details of Previous Volunteering Experience:       {{ $volunteer->vol_prev_exp_details}}</p>
              <p>Asha Contact:     {{ $volunteer->vol_asha_contact}}</p>
              <p>Asha Contact Details:          {{ $volunteer->vol_asha_contact_details}}</p>
              <p>Interests: {{ $volunteer->vol_interests}} </p>
              <p>Street Address:   {{ $volunteer->vol_street_address}}</p>
              <p>Zipcode:       {{ $volunteer->vol_zipcode}}</p>
              <p>City:     {{ $volunteer->vol_city}}</p>
              <p>State:         {{ $volunteer->vol_state}}</p>
              <p>Country: {{ $volunteer->vol_country}} </p>
              <p>Phone:   {{ $volunteer->vol_phone}}</p>
@endforeach
@stop

