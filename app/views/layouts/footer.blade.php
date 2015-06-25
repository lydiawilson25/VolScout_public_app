@section("footer")

<?php 
$logged_in = Auth::check();
?>

    <div class="footer">
        <div class="container">
        <br></br>  
        <br></br>  

@if($logged_in)
 
         <p align="center">
                <button class="btn btn-danger" onClick="location.href='{{ URL::route('logout') }}'">Logout, {{Auth::user()->username}}</button>
                 
         </p>    
@endif
            <p style="font-family:arial;font-size:12px;">Developed by Team Sigma<br>
            Powered by Laravel<br>
			Copyright © 2013</p>
        </a>

       
        
        </div>
    </div>
@show