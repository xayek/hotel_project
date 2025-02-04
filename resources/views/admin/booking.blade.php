<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style>
        .table_deg{
            border: 2px solid white;
            margin: auto;
            width: 100%;
            text-align: center;
            margin-top: 40px;
        }

        .th_deg{
            background-color: skyblue;
            padding: 15px;
        }

        tr{
            border: 3px solid white;
        }

        td{
            padding: 10px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
    
    <div class="page-content">
        <div class="page-header">
           <div class="container-fluid">

             <table class="table_deg">

                    <tr>
                        <th class="th_deg">Room_id</th>
                        <th class="th_deg">Customer name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival Date</th>
                        <th class="th_deg">Leaving Date</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                    </tr>

                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->room_id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->start_date}}</td>
                        <td>{{$data->end_date}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->room->room_title}}</td>
                        <td>{{$data->room->price}}$</td>
                        <td><img src="/room/{{$data->room->image}}" style="width: 200!important"></td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('delete_booking', $data->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
           




            </table>


           </div>
        </div>
    </div>
        
        @include('admin.footer')

  </body>
</html>