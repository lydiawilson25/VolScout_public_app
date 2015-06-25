@extends("layouts.ashalayout")

@section("content")
<body><center>
<div class="container">

                 <button class="btn btn-primary" onClick="location.href='{{ URL::route('viewlists') }}'">View Lists</button>
                 <br></br>
                 <button class="btn btn-primary" onClick="location.href='{{ URL::route('viewvolrequests') }}'">View Volunteer Requests</button>
</div>                 

</center></body>

@stop

