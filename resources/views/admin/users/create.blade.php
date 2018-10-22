@extends('layouts.admin')

@section('content')


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.min.css">
<h2>Create User</h2>

<style>
h2 {
    text-align: center;
}
</style>

<div class="jumbotron">
<div class="container">

    {{ Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) }}

    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', [''=>'Choose options'] + $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control'],['style: height="100px", width="100px"']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {{ Form::close() }}

    

@if($errors->count() > 0)
 
 <div id="ERROR_COPY" style="display: none;">
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
</div>

@endif

    
</div>
</div>



<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.all.min.js"></script>

<script>

var has_errors = {{ $errors ->count() > 0 ? 'true' : 'false' }};

if(has_errors){

    swal({
  title: 'Errors',
  type: 'error',
  html: jQuery("#ERROR_COPY").html(),
  showCloseButton: true,
  
});

}

</script>

<script src="js/sweetalert.min.js"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

@endsection