@include("header")
<body>
    <div class="container " style="margin:10px;">
        <div class="row">
            <div class="col">
                <form action="{{url("/upload")}}" method="post" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                        <label >Upload File</label>
                        <input type="file" name="file"class="form-control" placeholder="Upload file">
                    
                    </div>
                    
                    
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>

        </div>
    </div>
</body>