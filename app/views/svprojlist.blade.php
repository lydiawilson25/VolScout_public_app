@extends("layouts.ashalayout")
@section("content")
<title>Profile Page</title>

<h1>Thank You!</h1></head>
@foreach($projects as $project)
              <p>ID:          {{ $project->id}}</p>
              <p>Project Name: {{ $project->proj_name}} </p>
              <p>State ID:   {{ $project->state_id}}</p>
              <p>Project Location:       {{ $project->project_location}}</p>
              <p>Visit Due By:     {{ $project->visit_DueBy}}</p>
              <p>Coordinator:        {{ $project->proj_coordinator}}</p>
              <p>Status: {{$project->proj_status}}</p>
              <p>Volunteer ID: {{$project->proj_sitevisit_vol_id}}</p>
              <p>Last Date of Visit: {{$project->proj_last_date_of_visit}}</p>
@endforeach
@stop
