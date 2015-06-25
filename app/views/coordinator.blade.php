@extends("layouts.ashalayout")
@section("content")
<title>Add New Projects</title>

<h1 style="font-family:new century schoolbook;"><center> Post Projects </center></h1>
<center> Dear Coordinator, 
  please post the projects that are pending and need site visit</center> </br>
<body><center>
{{Form::open(array('route' => 'coord.post'))}}
<body>
    <h1> Project Details </h1>    
    <table class="table table-striped table-bordered table-condensed">
      <tr>
        <th> Click </th>
        <th>Project</th>
        <th>State</th>
        <th>Location</th>
        <th>Due By</th>
      </tr> 
  
@foreach($projects as $row)
  <tr>
  <td><input type="checkbox"  class="checkbox" name="{{$row->id}}" 
      value="{{ $row->id }}"></td>    
     
   
      <td>{{$row->proj_name}}</td>
      <td>{{$row->state_name}}</td>
      <td>{{$row->proj_location}}</td>
  
  </tr>

@endforeach
</table>


{{$projects->links()}}
</body>
<script type="text/javascript"></script>
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#visit_DueBy" ).datepicker();
  });
  </script>
<p> Date: <input type="text" id="visit_DueBy" /></p>

<div>{{ Form::submit('Submit')}}</div>
<div>{{ form::reset('Reset')}}</div>
</center<</body>
{{ Form::close() }}
@stop



