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

            <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="input-group input-group-sm mb-3">
                    <label class="input-group-text">Title</label>
                    <input style="color:rgb(255, 255, 255);" class="form-control" type="text" name="title" placeholder="wirte a title" required>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="input-group-text">Price</label>
                    <input style="color:rgb(255, 255, 255);" class="form-control" type="num" name="price" placeholder="price" required>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="input-group-text">Image</label>
                    <input style="color:rgb(255, 255, 255);" class="form-control" type="file" name="image" required>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="input-group-text">Description</label>
                    <input style="color:rgb(255, 255, 255);" class="form-control" type="text" name="description" placeholder="description" required>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <input style="color:rgb(255, 255, 255);" class="form-control" class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>

            <div >
                <table class="table table-bordered border-primary" class="table table-sm">
                    <tr>
                        <th style="padding:30px">Food Name</th>
                        <th style="padding:30px">price</th>
                        <th style="padding:30px">Description</th>
                        <th style="padding:30px">Image</th>
                        <th style="padding:30px">Action</th>
                    </tr>
                        @foreach ($data as $data)


                    <tr align="center">
                        <td>{{$data->title}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->description}}</td>

                        <div class="mb-3">
                        <td><img height="100" width="100" src="/foodimage/{{$data->image}}"></td>
                        </div>

                        <td>
                            <a class="btn btn-danger" href="{{url('/deletemenu',$data->id)}}">Delete</a>
                            <br>
                            <br>
                            <a class="btn btn-primary" href="{{url('/updateview',$data->id)}}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @include('admin.adminscript')

  </body>
</html>
