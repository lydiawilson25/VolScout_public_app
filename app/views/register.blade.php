@extends("layouts.ashalayout")
@section("content")
<title>ASHA Registration Page</title>

<h1> <center>New Volunteer Registration </center></h1></head>
<h2><center> Fields marked with * are required</center></h2></head>
<body><center>
	{{ Form ::open() }}
	<?php
	$validationErrors= Session::get('validationErrors');
	if($validationErrors!=null){
		echo 'Please rectify the below errors::'. "<br/>";
		?>
		<div style="color:red">
			<b>
				<?php
				foreach ($validationErrors as $value) {
					echo ($value."<br/>");

				}
				echo ("<br/>");
				?>
			</b>
		</div>
		<?php
	}
	?>

	<table><tr><td>
		{{ Form::label ('vol_firstname', 'First Name: *')}}</td>
		<td>{{ Form::text('vol_firstname') }}</td></tr>

		<tr><td> {{ Form::label ('vol_lastname', 'Last Name: *')}}</td>
			<td>{{ Form::text('vol_lastname') }}</td></tr>

			<tr><td>{{ Form::label('username', 'Enter your Email: *')}}</td>
				<td>{{ Form::text('username') }}</td></tr>

				<tr><td>{{ Form::label('password', 'Password: *')}}</td>
					<td>
						{{ Form::password('password') }}</td></tr>


						<tr><td>{{ Form::label('vol_chapter', 'Chapter you would be interested in?: ')}}</td>
							<td>
								{{ Form::select('vol_chapter', array(
									'ar' => 'Arizona',
									'at' => 'Athens',
									'bg' => 'Banglore',
									'ch' => 'Chennai',
									'de' => 'Delhi'  			)) }}
								</td></tr>

								<tr><td>
									{{ Form::label('vol_site_visit_volunteer', 'Are you interested in becoming a site-vist volunteer? *')}}</td>
									<td>
										{{ Form::radio('vol_site_visit_volunteer', 'yes')}} Yes
										{{ Form::radio('vol_site_visit_volunteer', 'no')}} No
									</td></tr> 

									<tr><td>
										{{ Form::label('vol_gender', 'Gender')}}</td>
										<td>
											{{ Form::radio('vol_gender', 'male')}} Male
											{{ Form::radio('vol_gender', 'female')}} Female
										</td></tr>

										<tr><td>{{ Form::label('vol_highest_degree', 'Highest degree obtained: ')}}</td>
											<td>
												{{ Form::select('vol_highest_degree', array(
													'ug' => 'Undergraduate',
													'pg' => 'Postgraduate',
													'phd' => 'PHD'	)) }}

												</td></tr>

												<tr><td>{{ Form::label('vol_prev_experience', 'Previous Volunteer experience: ')}}</td>
													<td>
														{{ Form::radio('vol_prev_experience', 'yes') }} Yes
														{{ Form::radio('vol_prev_experience', 'no') }} No

													</td></tr>

													<tr><td>{{ Form::label('vol_prev_exp_details', 'If yes provide details: ')}}</td>
														<td>
															{{Form::textarea('vol_prev_exp_details', null, array(    'id'      => 'vol_prev_exp_details',
															'rows'    => 3,));}}</td></tr>

															<tr><td>{{ Form::label('vol_asha_contact', 'Do you know anyone in ASHA: ')}}</td>
																<td>
																	{{ Form::radio('vol_asha_contact', 'yes') }} Yes
																	{{ Form::radio('vol_asha_contact', 'no') }} No

																</td></tr>

																<tr><td>{{ Form::label('vol_asha_contact_details', 'If yes provide details: ')}}</td>
																	<td>
																		{{ Form::text ('vol_asha_contact_details') }}</td></tr>

																		<tr><td>{{ Form::label('vol_interests', 'Brief description about your interests in ASHA: ')}}</td>
																			<td>
																				{{Form::textarea('vol_interests', null, array(    'id'      => 'vol_interests',
																				'rows'    => 3,));}}</td></tr>


																				<h4>Personal details </h4>
																				<tr><td> {{ Form::label('vol_street_address', 'Address: ')}}</td>
																					<td>
																						{{Form::textarea('vol_street_address', null, array(    'id'      => 'vol_street_address',
																						'rows'    => 3,));}}</td></tr>

																						<tr><td> {{ Form::label('vol_zipcode', 'Zipcode: ')}}</td>
																							<td>
																								{{ Form::text('vol_zipcode') }}</td></tr>

																								<tr><td> {{ Form::label('vol_city', 'City: ')}}</td>
																									<td>
																										{{ Form::text('vol_city') }}</td></tr>

																										<tr><td> {{ Form::label('vol_state', 'State: ')}}</td>
																											<td>
																												{{ Form::text('vol_state') }}</td></tr>

																												<tr><td> {{ Form::label('vol_country', 'Country: ')}}</td>
																													<td>
																														{{ Form::text('vol_country') }}</td></tr>

																														<tr><td> {{ Form::label('vol_phone', 'Phone-number: ')}}</td>
																															<td>
																																{{ Form::text('vol_phone') }}</td></tr>

																																<tr><td>{{ Form::submit('Submit form')}}<div style="float:right">{{ Form::reset('Reset')}}</div>

																																</td>
																																<td>

																																	<div style="float:right"><input type=button onClick="parent.location='volscout'" value='Cancel'></div></td></tr>
																																</table>

																															</center></body>
																															{{ Form::close() }}
																															@stop
																															@section("footer")
																															@parent

																															@stop
