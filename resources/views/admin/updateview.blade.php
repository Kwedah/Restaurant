<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include('admin.admincss')

  </head>
  <body>
    <div class="container-scroller">
    @include('admin.navbar')

        <div>
            <h6> Food menu
                <a href="{{url('/foodmenu')}}" class="float-right btn btn-success btn-sm">View All</a>
            </h6>
        </div>
        
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text">Title</label>
            <input class="form-control" type="text" name="title" value="{{$data->title}}" required>
        </div>

        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text">Price</label>
            <input class="form-control" type="num" name="price" value="{{$data->price}}" required>
        </div>

        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text">Description</label>
            <input class="form-control" type="text" name="description" value="{{$data->description}}" required>
        </div>

        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text">Old Image</label>
            <img height="120" width="120" src="/foodimage/{{$data->image}}">
        </div>

        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text">New Image</label>
            <input class="form-control" type="file" name="image" required>
        </div>

        <div class="input-group input-group-sm mb-3">
            <input class="btn btn-primary" type="submit" value="Save">
        </div>
    </form>

    </div>



    @include('admin.adminscript')

  </body>
</html>
