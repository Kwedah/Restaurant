
<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div style="position: relative; top: 60px; right: -150px;">
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="input-group input-group-sm mb-3">
                <label class="input-group-text">Name</label>
                <input style="color:rgb(255, 255, 255);" class="form-control" type="text" name="name" required="" placeholder="Enter name">
            </div>

            <div class="input-group input-group-sm mb-3">
                <label class="input-group-text">Speciality</label>
                <input style="color:rgb(255, 255, 255);" class="form-control" type="text" name="speciality" required="" placeholder="Enter the speciality">
            </div>

            <div class="input-group input-group-sm mb-3">
                <input style="color:rgb(255, 255, 255);" class="form-control" type="file" name="image" required="">
            </div>

            <div class="input-group input-group-sm mb-3">
                <input type="submit" value="Save">
            </div>
        </form>


        <div id="top">
            <table class="table table-bordered border-primary">
                <tr>
                    <th style="padding:40px;">Name Chef</th>
                    <th style="padding:40px;">Speciality</th>
                    <th style="padding:40px;">Image</th>
                    <th style="padding:40px;">Action</th>
                </tr>


                @foreach ($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->speciality}}</td>
                        <td> <img height="100" width="100" src="/chefimage/{{$data->image}}"> </td>
                        <td>
                            <a class="btn btn-danger" href="{{url('/deleteshef',$data->id)}}">Delete</a>
                            <br>
                            <br>
                            <a class="btn btn-primary" href="{{url('/updatechef',$data->id)}}">Update</a>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>

    @include('admin.adminscript')


  </body>
</html>
