@extends("layouts.ashalayout")
@section("content")
@section("header")

<body><center>
{{ Form ::open(array('route' => 'state.post')) }}
<p> {{ Form::label ('state_name', 'State:')}}
    {{ Form::text ('state_name')}}</p>

<div>{{ Form::submit('Submit')}}</div>
<div>{{ form::reset('Reset')}}</div>
<p>

{{ HTML::linkRoute('project.post', 'Do you want to add projects and location ?')}} </p>
<p> {{ HTML::linkRoute('pendsvlist', 'Site Visit Requests To be Approved')}} </p>
{{ $success = Session::get('success') }}
@if($success)
    <div class="alert-box success">
        <h2>{{ $success }}</h2>
    </div>
@endif
</center></body>
{{ Form::close() }}
@stop



