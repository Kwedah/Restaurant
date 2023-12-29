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

        <form action="{{url("/updatefoodshef",$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <br>
            <div class="mb-3">
                <label class="form-label">Chef Name</label>
                <input class="form-control"  type="text" name="name" value="{{$data->name}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Speciality</label>
                <input class="form-control"  type="text" name="speciality" value="{{$data->speciality}}">
            </div>

            <div class="mb-3">
                <label class="form-label">OLd Image</label>
                <img height="200" width="200" src="/chefimage/{{$data->image}}">
            </div class="mb-3">

            <div class="mb-3">
                <label class="form-label">New Image</label>
                <input class="form-control" type="file" name="image">
            </div>

            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Update Chef">
            </div>
        </form>
    </div>

    @include('admin.adminscript')

  </body>
</html>
