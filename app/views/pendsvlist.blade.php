@extends("layouts.ashalayout")
@section("content")
<title>Pending SV Requests Page</title>
<h1>Pending Site Visit Requests</h1>
    @foreach($temps as $temp) 
<?php
$passsvdata=urlencode(serialize($temp));
$passprojid=$temp->proj_id;
$passvolid=$temp->vol_id;
?>
	      <p>ID:          {{ $temp->id}}</p>
	      <p>Project Name: <a href="{{ URL::route('svprojlist')}}?projid={{$passprojid}}">  {{$temp->proj_id}}</a> </p>
	      <p>Volunteer Name: <a href = "{{ URL::route('voldetail')}}?voldet={{$passvolid}}">  {{ $temp->vol_id}} </a> </p>

<div class="well">	             
                 <button class="btn btn-info" onClick="location.href='{{ URL::route('svlist') }}?svdata={{$passsvdata}}&approve=1'">Approve</button>
                 <button class="btn btn-warning" onClick="location.href='{{ URL::route('svdecline') }}?svdata={{$passsvdata}}&approve=0'">Decline</button>
                <br></br>                 
          </div>

	      <hr />	    
                 
   


@endforeach
@stop
