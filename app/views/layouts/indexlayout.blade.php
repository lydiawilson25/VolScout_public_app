<!DOCTYPE html>
<html lang=”en”>
    <head>
        <meta charset="UTF-8" />
        
        {{ HTML::style('css/bootstrap.css')}}  
       
        <center>{{ HTML::image('IndexPagePic.jpg', 'alt-text') }}</center>
          
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