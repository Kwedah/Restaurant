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

    <div class="container">
        <h1>Customers Orders</h1>

        <form action="{{url('/search')}}" method="get">
            @csrf
            <div class="input-group input-group-sm mb-3">
                <input style="background-color: white" class="form-control" type="text" name="search" >
            </div>
            <input type="submit" value="Search" class="btn btn-success">
        </form>

        <br>
        <table class="table table-bordered border-primary">
            <tr>
                <td>Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Foodname</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total Price</td>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->foodname}}</td>
                <td>{{$data->price}}$</td>
                <td>{{$data->quantity}}</td>
                <td>{{$data->price * $data->quantity}}$</td>
            </tr>
            @endforeach
        </table>

    </div>
</div>

    @include('admin.adminscript')

  </body>
</html>
