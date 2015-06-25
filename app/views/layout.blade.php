<!DOCTYPE html>
<html lang=”en”>
    <head>
        <meta charset="UTF-8" />
        
        {{ HTML::style('css/bootstrap.css')}}
         @include("header")
    </head>
    <body>
      <body bgcolor="#E6E6FA"> 
        <div class="content">
            <div class="container">
                @yield("content")
            </div>
        </div>
        @include("footer")
    </body>
</html>
