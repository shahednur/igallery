<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function create($album_id){
    	return view('photos.create')->with('album_id',$album_id);
    }
}
