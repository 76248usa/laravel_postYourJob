
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Posted Job</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">


    <div class="card">
         <div class="card-body text-center">
         <p><img class="img-circle img-fluid" src="/images/{{$post->user->photo ? $post->user->photo->file : '1540743667Avatar2.png' }}" alt="card image"></p>
        <p>Welcome, <p><h4 class="card-title">{{Auth::user()->name}}</h4>
        <p class="card-text">{{Auth::user()->email}}</p>
        <a href="#" class="btn btn-primary" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-plus"></i>Logout</a>



        </div>
    </div>
        
      
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Photos</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>Job Post by <b>{{$post->user->name}}</b></small></h4>
      <hr>
      <h2>{{$post->title}}</h2>
      <h4>{{$post->user->name}}</h4>
      <h5><span class="glyphicon glyphicon-time"></span> {{$post->created_at->diffForHumans()}}</h5>

      <h5><span class="label label-success label-as-badge">{{$post->category->name}}<span></h5>
      <br>
      <p>{{$post->body}}</p>
      <br><br>
      

      <h3>Create an Application:</h3>
      
      <div class="jumbotron">
      <div class="container">

{{ Form::open(['method' => 'POST', 'action' => 'PostApplicationsController@store']) }}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('certified', 'Certifications and Licences:') !!}
    {!! Form::text('certified', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cert_number', 'Certificate/Licence number:') !!}
    {!! Form::text('cert_number', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('cert_date', 'Certificate expiration date:') !!}
    {!! Form::date('cert_date', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
<b>Years of experience as a </b> {{$post->category->name}}
 {!! Form::selectRange('experience', 0, 20) !!}
  </div>

  <div class="form-group">
    {!! Form::label('body', 'Type your application here:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control','rows'=>12]) !!}
</div>

<input type="hidden" name="post_id" value="{{$post->id}}">
  

<div class="form-group">
    {!! Form::submit('Submit Application', ['class'=>'btn btn-primary']) !!}
</div>

{{ Form::close() }}


   
    
   

</div>
</div>





<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.7/dist/sweetalert2.all.min.js"></script>



<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

      
      <p><span class="badge">2</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
          <p><span class="badge">1</span> Comment:</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
















