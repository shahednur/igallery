@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		{!!Form::open(['route'=>'store.post','method'=>'POST','enctype'=>'multipart/form-data'])!!}
		{{ csrf_field() }}
		<div class="form-group">
          {{Form::text('name','',['placeholder'=>'Album Name','class'=>'form-control'])}}
         </div>
         <div class="form-group">
          {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Album Description'])}}
         </div>
         <div class="form-group">
         	{{Form::file('cover_image',['class'=>'btn btn-info'])}}
         </div>
         <div class="form-group">
         	{{Form::submit('submit',['class'=>'btn btn-outline-success btn-lg'])}}
         </div>
		{!!Form::close()!!}
	</div>
</div>
@endsection