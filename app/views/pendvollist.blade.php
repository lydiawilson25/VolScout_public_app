@extends("layouts.ashalayout")

@section("content")


<?php
    if(Session::has('approve_status')){
	$approve_status= Session::get('approve_status');	
}

 ?>  

@if(Session::has('approve_status'))
 @if($approve_status=='1')	
    <div style ="color:green"><b>

	<p>Volunteer request has been approved</p>
	</b> </div> </br>
 @else
    <div style ="color:red"><b>

	<p>Volunteer request has been declined</p>
	</b> </div> </br>
 @endif
@endif



<h1>Pending Volunteer List</h1>

    @foreach($pendvolunteers as $pendvolunteer) 

          <div class="well" style="background-color: #FBFBFB;">

	      <p><strong>Request ID:</strong>&nbsp          {{ $pendvolunteer->vol_id}}</p>

	      <p><strong> {{ $pendvolunteer->vol_lastname}}, {{ $pendvolunteer->vol_firstname}}</strong></p>
	      
          <address>
  			<strong>Contact Info:</strong><br>
  			{{ $pendvolunteer->vol_street_address}}<br>
  			{{ $pendvolunteer->vol_city}}, {{ $pendvolunteer->vol_state}}<br>
  			{{ $pendvolunteer->vol_country}} {{ $pendvolunteer->vol_zipcode}}<br>

 			
  			<abbr title="Phone">Ph:</abbr> {{ $pendvolunteer->vol_phone}},  
  			<abbr title="Fax">Fax:</abbr> {{ $pendvolunteer->vol_fax}} <br>
  			<a href="mailto:#">{{ $pendvolunteer->username}}</a><br>
		  </address>

	      <p><strong>Chapter:</strong>&nbsp     {{ $pendvolunteer->vol_chapter}}</p>
	      <p><strong>Role:</strong>&nbsp        {{ $pendvolunteer->vol_role}}</p>
	      <p><strong>Site Visit Volunteer:</strong>&nbsp        {{ $pendvolunteer->vol_site_visit_volunteer}}</p>
	      <p><strong>Gender:</strong>&nbsp        {{ $pendvolunteer->vol_gender}}</p>
	      <p><strong>Highest degree:</strong>&nbsp        {{ $pendvolunteer->vol_highest_degree}}</p>
	      <p><strong>Previous Experience:</strong>&nbsp        {{ $pendvolunteer->vol_prev_experience}}</p>
	      <p><strong>Previous Experience Details:</strong>&nbsp        {{ $pendvolunteer->vol_prev_exp_details}}</p>
	      <p><strong>Asha Contact:</strong>&nbsp        {{ $pendvolunteer->vol_asha_contact}}</p>
	      <p><strong>Asha Contact Details:</strong>&nbsp        {{ $pendvolunteer->vol_asha_contact_details}}</p>
	      <p><strong>Interests:</strong>&nbsp        {{ $pendvolunteer->vol_interests}}</p>	      

	     

<?php
#echo $pendvolunteer->vol_firstname;
$passvoldata=urlencode(serialize($pendvolunteer));

#$passdata2= urlencode($passdata);
#echo $passdata2;
# echo http_build_query($pendvolunteer);
?>
	      	             
                 <center>
                 <button class="btn btn-success" onClick="location.href='{{ URL::route('vollist') }}?voldata={{$passvoldata}}&approve=1'">Approve</button>
                 <button class="btn btn-warning" onClick="location.href='{{ URL::route('vollist') }}?voldata={{$passvoldata}}&approve=0'">Decline</button>
                 </center>
                 <br></br>                 
          </div>

	      <hr />	    
      

    @endforeach

@stop
