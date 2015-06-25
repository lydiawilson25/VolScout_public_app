@extends("layouts.ashalayout")

@section("content")

<h1>Site Visit Volunteer List</h1>
<br></br>
    @foreach($volunteers as $volunteer)
      
      @if ($volunteer->vol_site_visit_volunteer == 'yes')
	      <div class="well" style="background-color: #FBBBBB;">
	      <p><strong>Volunteer ID:</strong>&nbsp       {{ $volunteer->id}}</p>	      
	      
	      <p><strong> {{ $volunteer->vol_lastname}}, {{ $volunteer->vol_firstname}}</strong></p>
	      
        <address>
  			<strong>Contact Info:</strong><br>
  			{{ $volunteer->vol_street_address}}<br>
  			{{ $volunteer->vol_city}}, {{ $volunteer->vol_state}}<br>
  			{{ $volunteer->vol_country}} {{ $volunteer->vol_zipcode}}<br>

 			
  			<abbr title="Phone">Ph:</abbr> {{ $volunteer->vol_phone}},  
  			<abbr title="Fax">Fax:</abbr> {{ $volunteer->vol_fax}} <br>
  			<a href="mailto:#">{{ $volunteer->username}}</a><br>
		 </address>

	      <p><strong>Chapter:</strong>&nbsp     {{ $volunteer->vol_chapter}}</p>
	      <p><strong>Role:</strong>&nbsp        {{ $volunteer->vol_role}}</p>
	      <p><strong>Site Visit Volunteer:</strong>&nbsp        {{ $volunteer->vol_site_visit_volunteer}}</p>
	      <p><strong>Gender:</strong>&nbsp        {{ $volunteer->vol_gender}}</p>
	      <p><strong>Highest degree: </strong>&nbsp       {{ $volunteer->vol_highest_degree}}</p>
	      <p><strong>Previous Experience:</strong>&nbsp        {{ $volunteer->vol_prev_experience}}</p>
	      <p><strong>Previous Experience Details: </strong>&nbsp       {{ $volunteer->vol_prev_exp_details}}</p>
	      <p><strong>Asha Contact:</strong>&nbsp        {{ $volunteer->vol_asha_contact}}</p>
	      <p><strong>Asha Contact Details:</strong>&nbsp        {{ $volunteer->vol_asha_contact_details}}</p>
	      <p><strong>Interests:</strong>&nbsp        {{ $volunteer->vol_interests}}</p>

	     
	    </div>
	    <hr />
      @endif
   
    @endforeach

@stop
