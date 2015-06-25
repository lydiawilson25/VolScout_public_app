@extends("layouts.ashalayout")
@section("content") 


{{ HTML::style('css/bootstrap.css')}}

<title>  Volscout </title>

<div class="parent1">
{{ HTML::image('IndexPagePic.jpg') }} 
</div>

<div style="clear:both"></div></br>

<body>
<h1>
<p id ="para2" >Welcome vounteers ! Asha is an NGO running worldwide to support education of poor children in India
You have just choosen to be a part of the organization and do your bit 
towards the betterment of society. </p> </br>
</h1>

<h2>
<p id = "paralink" >
New Asha Volunter: {{ HTML::linkRoute('submitpage', 'SIGN UP')}} </br>
New Site Visit Volunteer : {{ HTML::linkRoute('svvregistration', 'SIGN UP')}} </br>
Volunteer Sign In : {{ HTML::linkRoute('loginpage', 'Volunteer Sign In')}} </br>

<a href="http://www.ashanet.org/" target="_blank">Asha</a><br />
</p>
</h2>
</body>


@stop
