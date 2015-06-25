@extends("layouts.ashalayout")
@section("content")
{{ HTML::style('css/bootstrap.css')}}
<!--
Copyright informtion related to the jQuery script used.
https://github.com/jquery/jquery/blob/master/MIT-LICENSE.txt

Copyright 2013 jQuery Foundation and other contributors
http://jquery.com/

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:
-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" href="/resources/demos/style.css" />

{{ Form ::open(array('route' => 'project.post')) }}

<center> Dear Coordinator, 
  please post the projects that need site visit</center> </br>

<p> {{ Form::label ('proj_name', 'Project:')}}
    {{ Form::text ('proj_name')}}</p>

<p> {{ Form::label ('proj_location', 'Location:')}}
    {{ Form::text ('proj_location')}}</p>

<p><label>States</label></p>
{{ Form::select('states', $state_options)  }}

<p><script>
  $(function() {
    $( "#visitDueBy" ).datepicker();
    $( "#visitDueBy" ).datepicker({ dateFormat: "yy-mm-dd" });
    $( "#visitDueBy" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
  });
</script></p>

<p>
  <label>Date:</label>
  <input type="text" id="visitDueBy" name="visitDueBy">
</p>

<div>{{ Form::submit('Submit')}}</div>
<div>{{ form::reset('Reset')}}</div>

{{Form::close()}}


@stop

 

