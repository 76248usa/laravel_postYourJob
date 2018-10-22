@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html>
<title>Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


 

<script src="js/sweetalert.min.js"></script>

<!-- Include this after the sweet alert js file -->

<body>


 <h2>Technicians</h2>

@include('sweet::alert')



@if(Session::has('user_deleted'))

<h3 id="deleted" style="display: none;" class="bg-danger"><i>{{session('user_deleted')}}</i></h3>

@endif

@if(Session::has('update'))

<h3 class="bg-danger"><i>{{session('update')}}</i></h3>

@endif

<!DOCTYPE html>
<html>
<title>users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
<body>

<div class="w3-container">
  
@if($users)

@foreach($users as $user)

  <ul class="w3-ul w3-card-4 w3-white">
    <li class="w3-bar">
      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
      <img src="/images/{{$user->photo ? $user->photo->file : '1539875862avatar.png'}}"  class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span style="font-weight: bold;" class="w3-large"><a href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a></span><br>
        <span>{{$user->role->name}}</span>
      </div>
      <div class="w3-bar-item">
        <span class="w3-large">{{$user->email}}</span><br>
        <span>{{$user->role->name}}</span>
      </div>
      
      <span onClick="swal('Here a message!')" class="w3-bar-item w3-button w3-green w3-right">Accept</span>
      <span class="w3-bar-item w3-button w3-red w3-right">Decline</span>
    </li>

@endforeach

@endif

  </ul>
</div>

</body>
</html>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>






 
 <!DOCTYPE html>
<html>
<body>

<style>


 @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.snip1344 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  margin: 10px 1%;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  text-align: center;
  line-height: 1.4em;
  background-color: #141414;
}
.snip1344 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1344 .background {
  width: 100%;
  vertical-align: top;
  opacity: 0.2;
  -webkit-filter: grayscale(100%) blur(10px);
  filter: grayscale(100%) blur(10px);
  -webkit-transition: all 2s ease;
  transition: all 2s ease;
}
.snip1344 figcaption {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.snip1344 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 0.5);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.snip1344 h3 {
  margin: 0 0 5px;
  font-weight: 400;
}
.snip1344 h3 span {
  display: block;
  font-size: 0.6em;
  color: #f39c12;
  opacity: 0.75;
}
.snip1344 i {
  padding: 10px 5px;
  display: inline-block;
  font-size: 32px;
  color: #ffffff;
  text-align: center;
  opacity: 0.65;
}
.snip1344 a {
  text-decoration: none;
}
.snip1344 i:hover {
  opacity: 1;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.snip1344:hover .background,
.snip1344.hover .background {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
/* Demo purposes only */
body {
  background-color: #212121;
}




</style>

<script>

$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);
</script>

 @if($users)

@foreach($users as $user)
 

<figure class="snip1344"><img src="/images/{{$user->photo ? $user->photo->file : '1539875862avatar.png' }}"alt="profile-sample1" class="background"/><img src="/images/{{$user->photo ? $user->photo->file : '1539875862avatar.png' }}" alt="profile-sample1" class="profile"/>
  <figcaption>
    <h3>{{$user->name}}<span>{{$user->role->name}}</span></h3>
    <div class="icons"><a href="#"><i class="ion-social-reddit-outline"></i></a><a href="#"> <i class="ion-social-twitter-outline"></i></a><a href="#"> <i class="ion-social-vimeo-outline"></i></a></div>
  </figcaption>
</figure>

@endforeach

@endif

<script src="js/sweetalert.min.js"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')

</body>
</html>


@endsection







