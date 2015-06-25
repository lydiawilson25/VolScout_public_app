@extends("layouts.ashalayout")
@section("content")  

<title> Volscout </title>
{{ HTML::style('css/bootstrap.css')}}

<body><center>
 <h1>
 <p id ="para2"> Welcome vounteers ! Thanks for registering to be site visit volunteer.
 As you all know Asha works for the betterment of the poor children in India. It raises the funds
 through one of the biggest events Holi at Stanford.Of late we have started Asha Dandiya which 
 was also one of the successfull fund raiser. </p> 
</h1>
<div class="parent">
{{ HTML::image('holi.jpg') }} 
</div>

<div style="clear:both"></div></br>





<h2>
 <p id ="para2">Every project that needs a support is audited by a volunteer during his visit to India. 
 You have choosen to be one among them. As you go through the process, you will see a list 
 of the states in India where projects are run and the date by which the visit is due. Please select your most convenient place to 
 visit. Once selected, your request will be approved by the project coodinator and you will 
 recieve a mail regarding the details.</p>
</h2>
</center>

<h3>
<p id = "paralink" >
{{ HTML::linkRoute('SV.home', 'Volunteers Home') }}
</p>
</h3>
                       

              
</body>
@stop

