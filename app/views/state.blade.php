@extends("layouts.ashalayout")
@section("content")  
<title> States of India </title>
<body><center>
 
 <p> <center>Welcome volunteers, thanks a lot for registering to be a site visit volunteer
  Please select the project and the place you would like to visit
  </center> </br> </p>




{{Form::open(array('route' => 'entry.add'))}}
  <body>
    <h1 style="font-family:new century schoolbook;"> Details </h1>    
    <table class="table table-striped table-bordered table-condensed">
      <tr>
      	<th>Click</th>
        <th>Project</th>
        <th>Location</th>
        <th>Due By</th>
      </tr> 

@foreach ($projects as $project)

<tr>
<td><input type="checkbox" id="idproj{{$project->id}}" name="checkboxProjs[]" class="checkbox"
	value="{{ $project->id }}"></td>
	<td>{{ $project->proj_name }}</td>
	<td>{{ $project->proj_location}}</td>
	<td>{{$project->visit_DueBy}}</td>
</tr> 


@endforeach
</table>
</center></body>

<br/>
<center>{{Form::submit('Submit')}}</center>
{{Form::close()}}


@stop


