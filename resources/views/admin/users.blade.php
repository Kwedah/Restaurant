<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

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

    <div>
        <table class="table table-dark table-striped">
            <tr align="center">
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if ($data->usertype==0)
                    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                    <td><a>Not Allowed</a></td>
                @endif

            </tr>
            @endforeach
        </table>
    </div>


    </div>

    @include('admin.adminscript')

  </body>
</html>


</body>
</html>
