<div>
    <div class="form-group">
        <label >{{$label}}</label>
        <input type="{{$type}}" name="{{$name}}" class="form-control "  placeholder="{{$placeholder}}" autocomplete="off">
        <span class="text-danger">
            @error('name')
                @php
                   echo $message; 
                @endphp
            @enderror
        </span>
    </div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
</div>