@extends('layouts.admin')

@section('content')
<style>
h2 {
    text-align: center;
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
        {!! Form::submit('Edit User', ['class'=>'btn btn-primary']) !!}
    </div>

    {{ Form::close() }}

    </div>

    @include('includes.form-error')

    
</div>
</div>


@endsection