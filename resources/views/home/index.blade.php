<!DOCTYPE html>
<html lang="en">

   <head>
        @include('home.css')

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   </head>

   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>

      <header>
         @include('home.header')
      </header>

      @include('home.slider')
     
      @include('home.about')
    
      @include('home.room')
      
      @include('home.galary')
     
      @include('home.contact')

      @include('home.footer')


      <!-- scroll pozisyonu kaydetme -->
      <script type="text/javascript">
            $(window).scroll(function() {
            sessionStorage.scrollTop = $(this).scrollTop();
         });

         $(document).ready(function() {
            if (sessionStorage.scrollTop != "undefined") {
               $(window).scrollTop(sessionStorage.scrollTop);
            }
         });
      </script>
     
   </body>
</html>