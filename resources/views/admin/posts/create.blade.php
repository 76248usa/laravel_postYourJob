@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.min.css">
<h2>Create Post</h2>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<style>
h2 {
    text-align: center;
}
</style>

<div class="jumbotron">
<div class="container">

    {{ Form::open(['method' => 'POST', 'action' => 'AdminPostsController@store']) }}

    <div class="form-group">
        {!! Form::label('title', 'name:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('location', 'location:') !!}
        {!! Form::text('location', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Description:') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', array(''=>'Choose Category') + $categories, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        
    </div>

    {{ Form::close() }}

@if($errors->count() > 0)
 
 <div id="ERROR_COPY2" style="display: none;">
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
</div>

@endif


    
</div>
</div>

<div class="row">

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
  html: jQuery("#ERROR_COPY2").html(),
  showCloseButton: true,
  
});

}

</script>

<script src="js/sweetalert.min.js"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

@endsection

