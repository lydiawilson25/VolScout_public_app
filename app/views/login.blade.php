@extends("layouts.ashalayout")

@section("content")
<title>ASHA Login Page</title>

<h1><center> Login Page<center> </h1>
<body><center>
	{{ Form::open() }}

	<?php

	$loginFailure= Session::get('loginFailure');	

	if($loginFailure != null) {
		?>
		<div style ="color:red"><b>
			<?php
			echo ("You are not logged in.  Please log in!");
			?>
		</b> </div> </br>
		<?php
	}
	?>
	<?php
	$loginError= Session::get('loginError');
	if($loginError!=null){

		?>
		<div style="color:red">
			<b>
				{{$loginError}}
			</br>
		</b>
	</div>
	<?php
}
?>

<table>
	<tr><td><p> Email </td><td>{{ Form::email('username')}}</p></td></tr>

	<tr><td><p>Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>{{ Form::password('password')}} </p></td></tr>

	<tr><td><center>{{ Form::submit('Login')}} </center></td><td><center>
		<input type=button onClick="parent.location='volscout'" value='Cancel'></center></td></tr>
	</table>
</center></body>
{{ Form::close() }}

@stop
