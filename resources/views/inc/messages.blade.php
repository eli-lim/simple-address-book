@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@elseif(@isset($success))
    <div class="alert alert-success">
        {{$success}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@elseif(@isset($error))
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endif
