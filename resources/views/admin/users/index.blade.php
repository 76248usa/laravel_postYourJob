@extends('layouts.admin')

@section('content')

<!doctype html>
<html>
<head>
    <title>Users</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
</head>

<style>
body {
    background: #f1f3fa;
}
.profile{
    margin: 20px 0;
    display:inline-block;
}
.profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
}
.profile-user-pic{
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 50%;
}
.profile-user-title{
    text-align: center;
    margin-top: 20px;
}
.profile-user-name{
    color: #5a73al;
    font-size: 18px;
    font-weight: 600;
    margin-bottom:7px;
}
.profile-user-job{
    text-transform: uppercase;
    color: #5babd1;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 15px;
}
.profile-user-buttons{
    text-align: center;
    margin-top: 10px;
}
.btn{
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
}
.btn: last-child{
    margin-right: 0;
}
.profile-user-menu{
    margin-top: 30px;
}
ul li {
    border-bottom: 2px solid #f0f4f7;
}
.profile-user-menu ul li a{
    color: #93a3b5;
    font-size: 14px;
    font-weight: 400;

}
.profile-user-menu ul li a i{
    margin-right: 8px;
    font-size: 16px;
}
.profile-user-menu ul li a:hover {
    background-color: #fafcfd;
    color: #5babd1;
}
li.active a{
    color: #5babd1;
    background-color: #f6fafb;
    border-left: 2px solid #5babd1;
    margin-left: -3px;
}
li{
    border-bottom: 1px solid #f6f4f7;
}
.profile-content{
    padding: 20px;
    background: #fff;
    min-height: 460px;
}

</style>

<body>
<div class="jumbotron w3-blue">
  <h2 class="text-center">Users</h2> 
  
</div>

@if($users)

    @foreach($users as $user)

<div class="container">
    <div class="row profile">

        <div class="col-md-3" >
            <div class="profile-sidebar">
                <div class="profile-user-pic">
                    <img src="http://guarddome.com/assets/images/profile-img.jpg" alt="" class="img-responsive img-circle">
                </div>
                <div class="profile-user-title">
                    <div class="profile-user-name">
                        {{$user->name}}
                    </div>
                    <div class="profile-user-job">
                        {{$user->email}}
                    </div>
                    <div class="profile-user-buttons">
                        <button class="btn btn-success btn-sm">Follow</button>
                        <button class="btn btn-danger btn-sm">Message</button>
                   </div>
                   <div class="profile-user-menu">
                     <ul class="nav">
                        <li class="active"><a href=""><i class="glyphicon glyphicon-home"> Overview</i>
                        <li><a href=""><i class="glyphicon glyphicon-user"> Status</i>
                        <li><a href=""><i class="glyphicon glyphicon-ok"> Tasks</i>
                        

                     </ul>

                    </div>

                    </div>
                </div>
            </div>
        </div>
       
    </div>

</div>

</body>
</html>

    @endforeach

@endif

@endsection


