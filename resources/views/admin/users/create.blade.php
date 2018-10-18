@extends('layouts.admin')

@section('content')
<style>
h2 {
    text-align: center;
}
</style>
<h2>Create User</h2>

<div class="jumbotron">
<div class="container">

    {{ Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store', 'files'=>true]) }}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', [''=>'Choose options'] + $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('file', 'File') !!}
        {!! Form::file('file', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>

    {{ Form::close() }}

    @include('includes.form-error')

    
</div>
</div>


@endsection