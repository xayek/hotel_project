<!DOCTYPE html>
<html lang="en">

   <head>

    <base href="/public">

        @include('home.css')
   </head>


   <body class="main-layout">
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>

      <header>
         @include('home.header')
      </header>



      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>


            
            <div class="row">
           
               <div class="col-md-8">
                  <div id="serv_hover"  class="room">
                     <div style="padding: 20px;" class="room_img">
                         <img style="width: 800px; height: 300px;" src="/room/{{$room->image}}"/> 
                     </div>
                     <div class="bed_room">
                        <h2>{{$room->room_title}}</h2>

                        <p style="padding: 12px;">{{$room->room_description}}</p>

                        <h4 style="padding: 12px;"> Free wifi : {{$room->room_wifi}}</h4>

                        <h4 style="padding: 12px;"> Room Type : {{$room->room_type}}</h4>

                        <h3 style="padding: 12px;"> Price : {{$room->room_price}}</h3>

                 
                     </div>
                  </div>
               </div>

            
               
            </div>
         </div>
      </div>


      

      @include('home.footer')
     
   </body>
</html>