@extends("layouts.ashalayout")

@section("content")

<div class="container"><center>
                 <button class="btn btn-primary" onClick="location.href='{{ URL::route('projlist') }}'">Project List</button>
                 <br></br>
                 <button class="btn btn-primary" onClick="location.href='{{ URL::route('vollist') }}'">Volunteer List</button>
                 <br></br>
                 <button class="btn btn-primary" onClick="location.href='{{ URL::route('sitevisitvollist') }}'">Site Visit Volunteer List</button>
</center></div>

@stop
