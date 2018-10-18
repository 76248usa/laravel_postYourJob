@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html>
<title>Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
h2 h3 {
    color: w3-blue;
}
</style>
<body>

 <h2>Technicians</h2>

@if($users)

@foreach($users as $user)

<div class="w3-container">
 

  <div class="w3-card-4 w3-blue" style="width:50%">

    <div class="w3-container w3-center">
      <h3>{{$user->name}}</h3>
      <img src="img_avatar3.png" alt="Avatar" style="width:80%">
      <h5>{{$user->email}}</h5>
      <h5>{{$user->role->name}}</h5>

      <div class="w3-section">
        <button class="w3-button w3-green">Accept</button>
        <button class="w3-button w3-red">Decline</button>
      </div>
    </div>
  </div>
</div>
<br>

@endforeach

@endif

</body>
</html>

@endsection






