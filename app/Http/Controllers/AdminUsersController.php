<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\Photo;
use Alert;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\UsersEditRequest;
use Illuminate\Support\Facades\Session;

//use ImageIntervention;
//use Image;
//use Illuminate\Support\Facades\Auth;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        //dd($role);
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        $input = $request->all();

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $input['password'] = bcrypt($request->password);

        User::create($input);

        Alert::success('The user is successfully created!');

        return redirect('/admin/users');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {

        if(trim($request->password) == ''){

            $input = $request->except('password');

        } else {

            $input['password'] = bcrypt($request->password);

            $input = $request->all();

        }

        $user = User::findOrFail($id);

        

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images', $name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        $input['password'] = bcrypt($request->password);

       $user->update($input);

       Alert::success('The user was successfully updated!');

       return redirect('admin/users');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        unlink(public_path() . "/images/". $user->photo->file);

        $user->delete();

        Alert::success('The user was successfully deleted!');

        return redirect('/admin/users');

        //return redirect('/admin/users');


    }

    



    // public function profile(){
    // 	return view('profile', array('user' => Auth::user()) );
    // }

    // public function update_avatar(Request $request){

    // 	// Handle the user upload of avatar
    // 	if($request->hasFile('avatar')){
    // 		$avatar = $request->file('avatar');
    // 		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    // 		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    // 		$user = Auth::user();
    // 		$user->avatar = $filename;
    // 		$user->save();
    // 	}

    // 	return view('profile', array('user' => Auth::user()) );

    // }
}
