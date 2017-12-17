<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index(){
    	return view('albums.index');
    }

    public function create(){
    	return view('albums.create');
    }

    public function store(Request $request){

       $this->validate($request,[
         'name'=>'required',
         'description'=>'required',
         'cover_image'=>'required|image|max:1999'
       ]);

       //Get filename with extension
       $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

       //Get just the filename
       $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

       //Get extension
       $extension = $request->file('cover_image')->getClientOriginalExtension();

       //Create new filename
       $filenameToStore = $filename.'_'.time().'.'.$extension;

       //Upload image
       $path = $request->file('cover_image')->storeAs('public/albums',$filenameToStore);

       return $path;
    }

    public function show($id){
    	return "hi";
    }
}
