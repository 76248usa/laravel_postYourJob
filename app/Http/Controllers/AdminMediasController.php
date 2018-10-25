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
}
