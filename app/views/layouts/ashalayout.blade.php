<!DOCTYPE html>
<html lang=”en”>
    <head>
        <meta charset="UTF-8" />
        
        {{ HTML::style('css/bootstrap.css')}}  
        <br></br> 
        <center>{{ HTML::image('AshaBanner.png', 'alt-text') }}</center>
        <br></br> 
            
        @include("layouts.header")
    </head>

    <body>
       
        <div class="content">
            <div class="container">
                @yield("content")
            </div>
        </div>
        @include("layouts.footer")
    </body>

</html>