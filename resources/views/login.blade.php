{{-- @include("header") --}}
@extends('home')
@section('content')
<body>
{{-- <script>
    $(document).ready(function(){
        $('#loginbtn').click(function(){
            $('#exampleModal').modal('show');
        })
    })
</script> --}}
   
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" id="loginbtn" >
        Launch demo modal
    </button> --}}

     {{-- pop up box start --}}
 
 {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> --}}
  {{-- pop up box end --}}
 
    <div class="container " style="margin:10px;">
        <div class="row">
            <h2 class="login_form text-center">Login</h2>
            <div class="col">
                <form action="loginuser" method="post">
                    @csrf
                   
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter email">
                    
                    </div>
                    
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Password" autocomplete="off">
                        
                    </div>
                    
                    <br>
                    <div class="button">
                    <button type="submit" class="btn btn-primary" id="loginbtn">Login</button>
                    <a href="forget">Forget Password</a>
                    </div>
                    </div>
                    <div class="dont_have"><p class="class">Don't have an Account? <a href="form">Register</a></p></div>
                </form>
            </div>

        </div>
    </div>

    {{-- <script>
        $(ducument).ready(function(){
            $('.loginbtn').click(function(){
                $('#loginmodal').modal('show');
            })
        
       })
    </script> --}}
   
</body>
@endsection