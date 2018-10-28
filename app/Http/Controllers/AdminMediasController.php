<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class AdminMediasController extends Controller
{
    public function index(){

        $photos = Photo::all();

        return view('media.index', compact('photos'));
    }

    public function create(){

        return view('media.create');
    }

     public function store(Request $request){


        $file = $request->file('file');

        $name = time() . $file->getClientOriginalName();

        $file->move('images', $name);

        Photo::create(['file'=>$name]);

    }

    public function edit($id){

        $photo = Photo::findOrFail($id);

        return view('media.edit', compact('photo'));

    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);

        unlink(public_path() ."/images/" . $photo->file );

        $photo->delete();
        
        return redirect('admin/media/');
    }

    public function show(){

    }


}
