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
<div id="user" class="col-md-6" >

  <div class="panel panel-primary panel-table animated slideInDown">
   <div class="panel-heading " style="padding:5px;">
        <div class="row">
        
        <div class="col col-xs-5 text-center">
            <h1 class="panel-title">Category List</h1>
        </div>
        
        <div class="col col-xs-2 text-right ">
          
          <a href="#" class="btn btn-success" title="addnew"   ><i class="fa fa-plus-square"   ></i></a>
        </div>
        </div>
    </div>
   <div class="panel-body">
     <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="list">
       <table class="table table-striped table-bordered table-list">
        <thead>
         <tr>
            <th>Id</th>
            <th>name</th>
            <th>created</th>
            <th><em class="fa fa-cog"></em></th>
          </tr> 
         </thead>
         <tbody>

         @if($category)

          <tr class="ok">
            <td>{{$category->id}} </td>
             <td><a href="{{route('categories.edit', $category->id)}}">{{$category->name}} </a></td>
             <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}} </td>           
             <td> </td>
             <td align="center">
               <a href="#" class="btn btn-primary" title="Edit"  ><i class="fa fa-pencil"></i></a>
               <a href="#" class="btn btn-warning" title="ban"   ><i class="fa fa-ban"   ></i></a>
               <a href="#" class="btn btn-danger"  title="delete"><i class="fa fa-trash" ></i></a>
             </td>
          </tr>
@endif
          
          
          </tbody>
        </table>
      </div><!-- END id="list" -->


       
      <!-- <div role="tabpanel" class="tab-pane " id="thumb">
        <div class="row">
        <div class="col-md-12">
        
        <div class="ok">
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
  			<div class="panel-heading">
    			<h3 class="panel-title">Djelal Eddine</h3>
  			</div>
  			<div class="panel-body avatar-card">
   			 <img src="https://pbs.twimg.com/profile_images/746779035720683521/AyHWtpGY_400x400.jpg">
 			</div>
            <div class="panel-footer">
               <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"></i></a>
               
               <a href="{{route('categories.edit', $category->id)}}" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" ></i></a>
            </div>
         </div>
		 </div>
       </div>
      	
        <div class="ban">
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
  			<div class="panel-heading">
    			<h3 class="panel-title">Moh Aymen</h3>
  			</div>
  			<div class="panel-body avatar-card">
   			 <img src="https://pbs.twimg.com/profile_images/3511252200/f97a40336742d17609e0b0ca17e301b8_400x400.jpeg">
 			</div>
            <div class="panel-footer">
               <a href="#" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil">		</i></a>
               <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"   >admitted</i></a>
               <a href="#" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash" >		</i></a>
            </div>
         </div>
		 </div>
       </div>
        
        <div class="new">
         <div class="col-md-3">
         <div class="panel panel-default panel-thumb">
  			<div class="panel-heading">
    			<h3 class="panel-title">Dia ElHak</h3>
  			</div>
  			<div class="panel-body avatar-card">
   			 <img src="https://pbs.twimg.com/profile_images/3023221270/fcb34337f850c1037af9840ebe510d36_400x400.jpeg">
 			</div>
            <div class="panel-footer">
               <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary" title="Edit"    ><i class="fa fa-pencil"	  >		</i></a>
        	   <a href="#" class="btn btn-success" title="validate"><i class="fa fa-check-square">validate</i></a>
               <a href="#" class="btn btn-warning" title="ban"	 ><i class="fa fa-ban"		 >		</i></a>
               <a href="{{route('categories.edit', $category->id)}}" class="btn btn-danger"  title="delete"  ><i class="fa fa-trash"	   >		</i></a>
            </div>
         </div> 
		 </div>
       </div>
    
       </div>
      </div>
      </div>
       
     </div>
    </div>
   
   <div class="panel-footer text-center">-->
   		
   </div>
  </div>
</div> 


 <div class="col-md-12">

{{ Form::model($category, ['method' => 'PUT', 'action' => ['AdminCategoriesController@update', $category->id]] ) }}

<div class="form-group">
       {!! Form::label('name', 'Category Name:') !!}
       {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
   {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-6']) !!}
</div>

{{ Form::close() }}


{{ Form::open(['method' => 'DELETE', 'action' => ['AdminCategoriesController@destroy', $category->id]]) }}

<div class="form-group">
  {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-6']) !!}
</div>

{{ Form::close() }}



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

</div>


@endsection