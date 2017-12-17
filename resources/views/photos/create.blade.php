@extends('layouts.app')

@section('content')
<div class="row">
	<h3>Upload Photo</h3>
	<div class="col-md-12">
		{!!Form::open(['route'=>'store.photo','method'=>'POST','enctype'=>'multipart/form-data'])!!}
		{{ csrf_field() }}
		<div class="form-group">
          {{Form::text('title','',['placeholder'=>'Photo Title','class'=>'form-control'])}}
         </div>
         <div class="form-group">
          {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Photo Description'])}}
         </div>
         <div class="form-group">
         	{{Form::hidden('album_id',$album_id)}}
         </div>
         <div class="form-group">
         	{{Form::file('photo',['class'=>'btn btn-info'])}}
         </div>
         <div class="form-group">
         	{{Form::submit('submit',['class'=>'btn btn-outline-success btn-lg'])}}
         </div>
		{!!Form::close()!!}
	</div>
</div>
@endsection