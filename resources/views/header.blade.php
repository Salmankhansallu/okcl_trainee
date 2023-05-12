<html>
    <head lang="en">
    {{-- @stack("title") --}}
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url("/style.css")}}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>
    </head>
    <body>
    <div class="nav">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/login')}}">WebSiteName</a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li>
                             
                            @if(session()->has("name"))
                            <a href="#">Hi {{session()->get("name")}}</a>
                            @endif
                          </li>
                           <li class="">
                            
                            @if(session()->has("name"))
                            
                            <a href="/logout">Logout</a>
                            @else
                            <a href="/login">Login</a>
                            
                            @endif</li>
                          <li><a href="{{url("/form")}}">Register</a></li>
                          {{-- <li><a href="{{url("/upload")}}">Upload</a></li> --}}
                          {{-- <li><a href="{{url('/user-view')}}">User</a></li> --}}
                          
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>
    
    </body>
</html>