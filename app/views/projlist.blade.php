@extends('layouts.ashalayout')



@section('content')

<h1>Project List</h1>
@foreach($projects as $project)
<div class="well" style="background-color: #BBBBFB;">
              <p><strong>Project ID:</strong>&nbsp          {{ $project->id}}</p>
              <p><strong>Project Name:</strong>&nbsp {{ $project->proj_name}} </p>
              <p><strong>State ID:</strong>&nbsp   {{ $project->state_id}}</p>
              <p><strong>Project Location:</strong>&nbsp       {{ $project->project_location}}</p>
              <p><strong>Visit Due By:</strong>&nbsp     {{ $project->visit_DueBy}}</p>
              <p><strong>Coordinator:</strong>&nbsp        {{ $project->proj_coordinator}}</p>
              <p><strong>Status:</strong>&nbsp {{$project->proj_status}}</p>
              <p><strong>Volunteer ID:</strong>&nbsp {{$project->proj_sitevisit_vol_id}}</p>
              <p><strong>Last Date of Visit:</strong>&nbsp {{$project->proj_last_date_of_visit}}</p>
 </div>

              <hr />
@endforeach

@stop
