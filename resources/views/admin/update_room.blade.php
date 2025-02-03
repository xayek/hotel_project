<!DOCTYPE html>
<html>
  <head> 

    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        .div_deg {
            padding-top: 30px;
            margin-bottom: 15px;
        }

        .div_center {
            text-align: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }

        label {
            display: inline-block;
            width: 200px;
            font-weight: bold;
            margin-right: 15px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 300px;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        textarea {
            height: 100px;
            vertical-align: top;
        }

        .btn-primary {
            margin-top: 20px;
            padding: 10px 20px;
        }
    </style>

  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <div class="div_center">
                <h1 style="font-size: 30px; font-weight: bold;">Update Room</h1>

                <form action="{{url('edit_room', $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="div_deg">
                        <label>Room Title</label>
                        <input type="text" name="title" value="{{$data->room_title}}">
                    </div>


                    <div class="div_deg">
                        <label>Description</label>
                        
                        <textarea name="description">
                            {{$data->description}}
                        </textarea>
                    </div>


                    <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$data->price}}">   
                    </div>

                    <div class="div_deg">
                        <label>Room Type</label>

                        <select name="type">

                            <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>

                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>

                        </select>
                    </div>


                    <div class="div_deg">
                        <label>Free Wifi</label>
                        <select name="wifi">
                            <option value="yes" {{ $data->wifi == 'yes' ? 'selected' : '' }}>Yes</option>
                            <option value="no" {{ $data->wifi == 'no' ? 'selected' : '' }}>No</option>
                        </select>
                    </div>


                    <div class="div_deg">
                        <label>Current Image</label>
                        <img style="margin: auto;" width="100" src="/room/{{$data->image}}" alt="">
                    </div>


                    <div class="div_deg">
                        <label>Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input type="submit" value="Update Room" class="btn btn-primary">
                    </div>


                </form>


            </div>


          </div>
        </div>
    </div>

        
        @include('admin.footer')

  </body>
</html>