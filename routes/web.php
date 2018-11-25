<?php
use Illuminate\Support\Facades\Input;
use App\Application;
use App\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::post('/welcome', function(){
    $q = Input::get('q');
    $q2 = Input::get('q2');

    /*if($q != "" && $q2 != ""){
        $posts = Post::where('title','LIKE', '%' . $q . '%')
                       ->where('body', 'LIKE', '%' .$q2. '%')
                       ->get();

        if($posts){
            return view('welcome')->withDetails($posts)->withQuery($q, $q2);
        }*/
        

      if($q != ""){

        $posts = Post::where('title','LIKE', '%' . $q . '%')->get();

        if($posts){
            return view('welcome')->withDetails($posts)->withQuery($q);
        }
    }
        

     if($q2 != "") {

    
        $posts = Post::where('location','LIKE', '%' . $q2 . '%')->get();

        if($posts){
            return view('welcome')->withDetails($posts)->withQuery($q2);
        }
        return view('welcome')->withMessage("No users found");
    }

});


Route::get('post/{id}', 'AdminPostsController@post')->name('home.post');

Route::get('admin', function() {
    return view('admin.index');
});

Route::group(['middleware'=>'admin'], function(){
    
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/posts', 'AdminPostsController');
    Route::resource('admin/categories', 'AdminCategoriesController');
    Route::resource('admin/media', 'AdminMediasController');
    Route::resource('admin/applied', 'AdminAppliedController');
    Route::resource('admin/search', 'AdminSearchController');
    
});

Route::resource('applications', 'PostApplicationsController');
Route::resource('application/replies', 'ApplicationRepliesController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
