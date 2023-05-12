@include('header')
<!DOCTYPE html>
<html>
    <head>
        {{-- <title>Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2  class="text-center" >{{$title}}</h2>
            </div>
            
        </div>
        <div class="container " style="margin:10px;">
            <div class="row">
                <div class="col">
                    <form action="{{$url}}" method="post">
                        @csrf
                        {{-- {!!Form::open([
                            'url' => $url,
                            'method' => "post"
                        ])!!}
                        {!!Form::label("Name")!!}
                        {!!Form::text('name','',[
                            'placeholder'=>"Enter name",
                            'class'=>"form-control",
                        ])!!} --}}
                        {{-- <x-input type="text" name="name" label="Name" placeholder="Enter Your Name" />
                        <x-input type="email" name="email" label="Email" placeholder="Enter Your Email"/>
                        <x-input type="password" name="password" label="Password" placeholder="Enter Your Password"/>
                        <x-input type="password" name="confirm_password" label="Confirm Password" placeholder="Enter Your Confirm Password"/> --}}
                        <div class="form-group">
                            <label >Name</label>
                            <input type="text" name="name" value="" class="form-control" placeholder="Enter name">
                            <span class="text-danger">
                                @error('name')
                                    @php
                                       echo $message; 
                                    @endphp
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter email">
                            <span class="text-danger">
                                @error('email')
                                    @php
                                       echo $message; 
                                    @endphp
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label >Phone</label>
                            <input type="text" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Enter phone number">
                            <span class="text-danger">
                                @error('phone')
                                    @php
                                       echo $message; 
                                    @endphp
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label >Password</label>
                            <input type="password" name="password" class="form-control"  placeholder="Password" autocomplete="off">
                            <span class="text-danger">
                                @error('password')
                                    @php
                                       echo $message; 
                                    @endphp
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label >Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control"  placeholder="Confirm Password" autocomplete="off">
                            <span class="text-danger">
                                @error('confirm_password')
                                    @php
                                       echo $message; 
                                    @endphp
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label>Gender</label><br>
                                <input type="radio" name="gender" value="M"   required><label style="margin-left:4px;">Male</label>
                                <input type="radio" name="gender"value="F"   required><label style="margin-left:4px;">Female</label>
                                <input type="radio" name="gender"value="O"   required><label style="margin-left:4px;">Other</label>
                            </div>
                        <div class="form-group">
                            <label >D.O.B.</label>
                            <input type="date" name="dob" class="form-control">
                            <span class="text-danger">
                                @error('dob')
                                    @php
                                       echo $message; 
                                    @endphp
                                @enderror
                            </span>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="have"><p class="class">Have an Account? <a href="login">Login</a></p></div>
                    </form>
                    {{-- {!!Form::close()!!} --}}
                </div>
            </div>
        </div>

    </body>
</html>