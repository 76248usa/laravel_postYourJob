@extends('layouts.admin')

@section('content')

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
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/lumen/bootstrap.min.css">
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">

<div class="container" style="margin-top:0px;">
<div class="row">
<div id="user" class="col-md-12" >
  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row">
        <div class="col col-xs-3 text-left">
            
        </div>
        <div class="col col-xs-5 text-center">
            <h1 class="panel-title">Post List</h1>
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
            <th>category</th>
            <th>name</th>
            <th>description</th>
            <th>created</th>
            <th><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>
      @if($posts)
        @foreach($posts as $post)

          <tr class="ok">
          <td class="avatar"><img src="/images/{{$post->user->photo ? $post->user->photo->file : '1540743667Avatar2.png'}}" ></td> 
             <td>{{$post->title}}</a></td>
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

@endsection