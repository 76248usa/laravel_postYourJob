@if(count($errors) > 0)

    <ul>
    
    <div id="ERROR_COPY" style= "display: none" class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </div>

    </ul>

    @endif