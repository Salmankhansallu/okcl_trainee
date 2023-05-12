@include("header")
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <title>Trash Items</title>
</head>
<body>
  
 {{-- {{$user[0]->name}} --}}
    <div class="table_heading">
        <h2 class="heading text-center">
            Trashed User
        </h2>
    </div>
    <div class="user">
        <a href="{{url('/')}}/user-view"><button class="btn btn-primary">User View</button></a>
    </div>
    <div class="table-responsive">
    <table class="table table-bordered m-2 x-overflow-scroll">
        <thead style="background:black; color:white">
          <tr>
            <th scope="col">S. No.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">gender</th>
            <th scope="col">D.O.B.</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- <pre>
            {{print_r($user->toArray())}}
            </pre> --}}
            @php
            $serial=1;
            @endphp
            @foreach ($user as $user)
            <tr>
                <td>{{$serial}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>
                    @if($user->gender=="M")
                    Male
                    @elseif($user->gender=="F")
                    Female
                    @elseif($user->gender=="O")
                    Other
                    @endif
                </td>
                <td>{{$user->dob}}</td>
                <td><a href="{{url("/permanent_delete")}}/{{$user->id}}"><button class="btn btn-danger">Delete</button><a>
                  <a href="{{url("/restore")}}/{{$user->id}}"><button class="btn btn-primary">Restore</button><a>
                </td>
              </tr>
              @php  
              $serial++;
              @endphp
            @endforeach
          
          
        </tbody>
      </table>
    </div>
</body>
</html>