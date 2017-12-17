<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
    	return view('photos.create')->with('album_id',$album_id);
    }

    public function store(Request $request){
    	$this->validate($request,[
          'title'=>'required',
          'description'=>'required',
          'photo'=>'required|image|max:1999'
    	]);
    	//Get filename with extension
       $filenameWithExt = $request->file('photo')->getClientOriginalName();

       //Get just the filename
       $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

       //Get extension
       $extension = $request->file('photo')->getClientOriginalExtension();

       //Create new filename
       $filenameToStore = $filename.'_'.time().'.'.$extension;

       //Upload image
       $path = $request->file('photo')->storeAs('public/photos/'.$request->input('album_id'),$filenameToStore);

       //Create Photo
       $photo = new Photo;
       $photo->album_id = $request->input('album_id');
       $photo->photo = $filenameToStore;
       $photo->title = $request->input('title');
       $photo->size = $request->file('photo')->getClientSize();
       $photo->description = $request->input('description');

       $photo->save();

       return redirect('/albums/'.$request->input('album_id'))->with('success','Photo Uploaded');
    }
}
