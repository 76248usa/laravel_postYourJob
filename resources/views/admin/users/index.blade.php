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
 

  <div class="w3-card-4 w3-blue" style="width:50%" >

    <div class="w3-container w3-center">
     
      <h3><a href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a></h3>

      <img src="/images/{{$user->photo ? $user->photo->file : '1539875862avatar.png' }}" alt="Avatar" style="width:80%"> 

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







<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>User List</h2>
  

@if($users)

@foreach($users as $user)

  <ul class="w3-ul w3-card-4 w3-light grey">
    <li class="w3-bar">
      <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>
      <img src="/images/{{$user->photo ? $user->photo->file : '1539875862avatar.png'}}"  class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
      <div class="w3-bar-item">
        <span class="w3-large"><a href="{{ route('users.edit', $user->id) }}">{{$user->name}}</a></span><br>
        <span>{{$user->role->name}}</span>
      </div>
      <div class="w3-bar-item">
        <span class="w3-large">{{$user->email}}</span><br>
        <span>{{$user->role->name}}</span>
      </div>
      
      <span class="w3-bar-item w3-button w3-green w3-right">Accept</span>
      <span class="w3-bar-item w3-button w3-red w3-right">Decline</span>
    </li>

@endforeach

@endif

  </ul>
</div>

</body>
</html>


@endsection




