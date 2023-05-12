@include("header")
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <title>User Detail</title>
</head>
<body>

 
    <p class="language">Change Language</p>
    <a href="{{url('/user-view')}}">English</a>
    <a href="{{url('/user-view/hi')}}">Hindi</a>
    <a href="{{url('/user-view/od')}}">Odia</a>
    <a href="{{url('/user-view/guj')}}">Gujrati</a>
    <a href="{{url('/user-view/ur')}}">Urdu</a>
  
 <div class="welcome text-center"><h2>@lang("lang.welcome")</h2></div>
    <div class="table_heading">
        <h2 class="heading text-center">
            All User
        </h2>
    </div>
    {{-- search form --}}
   
       <div class="col">
      <form action="" method="get" class="search">
        <div class="form-group">
          <input type="text" name="search" placeholder="Search by Name or Email" value="{{$search}}">
          <button class="btn btn-primary">Search</button>
        </div>
        
        
      </form>
    </div>
   

    <div class="button">
      <a href="{{url("/")}}/trash" style="color:white;"><button class="btn btn-danger">Go to Trash</button></a>
      @if($search!="")
      <a href="{{url("/user-view")}}"> <button class="btn btn-primary">Reset</button></a>
      @endif
      
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
        <tbody class="tbody">
            {{-- <pre>
            {{print_r($user->toArray())}}
            </pre> --}}
            @php
            // echo $page;
            $serial=$page*$limit-$limit+1;
            @endphp
            @foreach ($users as $user)
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
                <td><a href="{{url("/delete")}}/{{$user->id}}"><button class="btn btn-danger">Trash</button><a>
                  <a href="{{url("/update")}}/{{$user->id}}"><button class="btn btn-primary">Edit</button><a>
                </td>
              </tr>
              @php  
              $serial++;
              @endphp
            @endforeach
          
          
        </tbody>
        
      </table>
      
    </div>
    <div class="pagination">
      {{-- {{$users->count()}} --}}
      @if($users->count()>=$limit or $page!=1)
      {!! $users->links() !!}
      
      @endif
  </div>
    {{-- <div class="row">{{$users->links()}}</div> --}}
</body>
</html>