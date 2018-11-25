
<!DOCTYPE html>
<html>
<head>
<title>Search Job</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
#user .avatar {
    width:60px;
	}
#user .avatar > img{
	width:50px;
	height:50px;
	border-radius:10%;
	}
/*Card*/
#user .panel-thumb{
margin:5px auto;
text-align:center;	
	}
#user .panel-thumb .avatar-card {
text-align:center;
height:200px;
margin:auto;
overflow:hidden;
}	
#user .panel-thumb .avatar-card > img{
	max-width:200px;
	max-height:200px;
	}

/* table*/
#user .panel-table{
  animation-duration:3s;
}

#user .panel-table .panel-body .table{
  margin:0px;
}
#user .panel-table .panel-body {
  padding:0px;
}
#user .panel-table .panel-body .table-bordered > thead > tr > th{
  text-align:center;
}
#user .panel-table .panel-footer {
  height:60px;
  padding:0px;
}
.fa-user-md {
  color: orange;
}
button {
    background-color: orange;
}

.jumbotron {
    background-color: #0099cc!important;
    color: white!important;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 5px;
  height: 20px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>

<body>


        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    AppsByElsabe
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('logout') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} 
                                    <!-- <span class="caret"></span> -->
                                </a>

                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

  <div class="container">
    <div class="jumbotron">
   
    <h1 class="display-4">Search for jobs</h1>
    <i class="fas fa-user-md fa-8x"></i>
    <p class="lead">Find your dream job. Fill out search below:</p>
  
  </div>
</div>

<div class="container">
 <div class="row">
    <div class="col-md-12">
       
        
        <form class="example" action="/welcome" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
        <label for="job">What</label>
        <input type="text" class="form-control" name="q"
            placeholder="Search a job, for example, 'Pharmacist'"> <span class="input-group-btn">
        </span>

        <label for="location">Where</label>
        <input type="text" class="form-control" name="q2"
                placeholder="Search location, for example, 'Dallas, Texas'"> <span class="input-group-btn">

        <button type="submit" class="btn w3-orange">
            <span class="glyphicon glyphicon-search"></span>
        </button>
       
        </form>
        </div>
        </div>      
    </div>
    <br>
</div>

<div class="container" style="margin-top:0px;"> 

@if(isset($details))


<div class="row">
<div id="user" class="col-md-12" >
  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row">
        <div class="col col-xs-3 text-left">
            
        </div>
        <div class="col col-xs-5 text-center">
            <h1 class="panel-title">Job List</h1>
        </div>
        
        <div class="col col-xs-2 text-right ">
          
          
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
            <th class="avatar">photo</th>
            <th>title</th>
            <th>location</th>
            <th>category</th>
            <th>name</th>
            <th>description</th>
            <th>created</th>
            <th><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>

         @if(isset($details))
        @foreach($details as $post)
      

          <tr class="ok">
          <td class="avatar"><img src="/images/{{$post->user->photo ? $post->user->photo->file : '1540743667Avatar2.png'}}" ></td> 
             <td>{{$post->title}}</a></td>
             <td>{{$post->location}}</a></td>
             <td>{{$post->category ? $post->category->name : 'Uncategorized'}} </td>
             <td>{{$post->user->name}} </td>
             <td>{{str_limit($post->body, 45)}} </td>           
             <td>{{$post->created_at->diffForHumans()}} </td>
             <td align="center">
               <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   ></i></a>
               <a href="{{route('posts.edit', $post->id)}}" class="btn btn-danger"  title="delete"><i class="fa fa-trash" ></i></a>
             </td>
          </tr>

          @endforeach
          @endif

           
          </tbody>
        </table>
      </div><!-- END id="list" -->
        
      <div role="tabpanel" class="tab-pane " id="thumb">
        <div class="row">
        <div class="col-md-12">
           
       </div>
      </div>
      </div><!-- END id="thumb" -->
       
     </div><!-- END tab-content --> 
    </div>
   
   <div class="panel-footer text-center">
   		<ul class="pagination">
	 	  <li ><a>«</a></li>
		   <li class="active"><a href="#">1</a></li>
           <li ><a href="#">2</a></li>
           <li ><a href="#">3</a></li>
		   <li ><a>»</a></li>
         </ul>
   </div>
  </div><!--END panel-table-->
  
        @endif

</div>
</div>
</div>
</div>

<script>
function filter($state){
var x   = document.getElementsByClassName($state);
var btn = document.getElementById($state);

if (btn.className == "btn"){
    btn.className = btn.dataset.class;
	for (i = 0; i < x.length; i++) {x[i].className = " animated fadeInLeft "+$state;}
	}
	else{ 
	for (i = 0; i < x.length; i++) {x[i].className = " animated fadeOutRight "+$state;}
	 btn.className = "btn";
	}
}

</script>
</html>










