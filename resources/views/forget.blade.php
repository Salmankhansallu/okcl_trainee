@include("header")
<body>
    <div class="container " style="margin:10px;">
        <div class="row">
            <h2 class="login_form text-center">Reset Password</h2>
            <div class="col">
                <form action="reset_password" method="post">
                    @csrf
                   
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                    
                    </div>
                    <div class="form-group">
                        <label >New Password</label>
                        <input type="password" name="new_password" class="form-control"  placeholder="Password" autocomplete="off">
                        
                    </div>
                    <div class="form-group">
                        <label >Confirm New Password</label>
                        <input type="password" name="confirm_new_password" class="form-control"  placeholder="Password" autocomplete="off">
                        
                    </div>
                    
                   
                    
                    <br>
                    <div class="button">
                    <button type="submit" class="btn btn-primary">Reset</button>
                    <a href="login" class="back" style="margin-left:10px">Back</a>
                    </div>
                    </div>
                   
                </form>
            </div>

        </div>
    </div>
</body>