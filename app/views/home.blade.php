@extends("layouts.ashalayout")
@section("content")  



<title> Volscout </title>

 
 <p> <center>Welcome vounteers ! Thanks for registering to be site visit volunteer.
 Please select the state you would like to visit </center> </br> </p>

 <caption> <u> <center> <b> India </b></center> </u> </caption>

{{Form::open(array('route' => 'SV.home'))}}
<ul>

	    @foreach ($states as $state)
          <li>
          	{{ link_to_route('display_projects_per_state',
          					  $state->state_name,
          					  array('sid' => $state->id))}}
          </li>
        @endforeach


{{ $states->links() }}


</ul> 
{{ Form::close() }}
@stop



 