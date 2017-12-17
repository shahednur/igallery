@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">
		<a class="btn btn-secondary" href="/">Go Back</a>
		<a class="btn btn-info" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
	</div>
	<hr>
</div>
<hr>
<div class="row">
  <?php 
    $colcount = count($album->photos);
    $i = 1;
  ?>
  <div id="photos">
  	<div class="row text-center">
  		@foreach($album->photos as $photo)
  		 @if($i == $colcount)
  		  	<div class="card" style="width: 20rem;">
  		  		<a href="/photos/{{$photo->id}}">
			  <img class="card-img-top" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="Card image cap"></a>
			  <div class="card-body">
			    <p class="card-text">{{$photo->title}}</p>
			  </div>
			
  		  	@else
  		     <div class="card" style="width: 20rem;">
  		  		<a href="/photos/{{$photo->id}}">
			  <img class="card-img-top" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="Card image cap"></a>
			  <div class="card-body">
			    <p class="card-text">{{$album->title}}</p>
			  </div>
		
  		 	@endif
  		 	@if($i%3 == 0)
  		 </div>
  		</div>
  	<div class="row text-center">
  		@else
  	</div>
  	@endif
  	<?php $i++;?>
  	@endforeach
  </div>
</div>
</div>
@endsection