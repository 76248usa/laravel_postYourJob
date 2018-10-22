@extends('layouts.admin')

@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.min.css">

</head>
<style>
h2 {
    text-align: center;
}

img {
    border-radius: 50%;
}
</style>

<h2>Edit User</h2>

<div class="jumbotron">
<div class="container">

    <div class="col-sm-3">

    <img src="/images/{{$user->photo ? $user->photo->file : '1539875862avatar.png' }}" alt="Avatar" style="width:80%"> 

    </div>


    <div class="col-sm-9">

    {{ Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id,'files'=>true]]) }}

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
        {!! Form::select('role_id', $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-4'] ) !!}
    </div>

    {{ Form::close() }}

    {{ Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) }}

    <div class="form-group">
    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-4'], ['id'=>'delete']) !!}
    </div>

    {{ Form::close() }}

    </div>

    </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.all.min.js"></script>


<script src="js/sweetalert.min.js"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')



@endsection