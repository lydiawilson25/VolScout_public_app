@extends("layouts.ashalayout")
@section("content")  

{{ Form ::open(array('route' => 'thanks.display')) }}

<p id ="para2" >Thanks a lot for signing up for this!. You are supporting for a great cause.
You will soon recieve a mail about all the details .</p> </br>

{{ HTML::linkRoute('SV.home', 'Go to home page ')}} </p>

{{ Form::close() }}

@stop

