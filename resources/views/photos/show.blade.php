@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<a class="btn btn-info btn-md" href="/albums/{{$photo->album_id}}">Back to Gallery</a>
	</div>
	<br>
	<div class="row">
		<div class="col-md-10">
			<div class="card bg-dark text-white">
			  <img class="card-img" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="Card image">
			</div>
		</div>
		<div class="col-md-2">
			<div class="card border-info mb-3" style="max-width: 20rem;">
			  <div class="card-header">Photo Details</div>
			  <div class="card-body">
			    <h4 class="card-title">{{$photo->title}}</h4>
			    <p class="card-title">Photo size: {{$photo->size}}</p>
			    <p class="card-text">{{$photo->description}}</p>
			  </div>
			  <div class="card-footer">
			  	{!!Form::open(['route'=>['delete.photo',$photo->id],'method'=>'POST'])!!}
                  {{Form::hidden('_method','DELETE')}}
                  {{csrf_field()}}
                  {{Form::submit('Delete Photo',['class'=>'btn btn-info'])}}
			  	{!!Form::close()!!}
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection