@extends('layouts.app')

@section('content')
@if(count($albums)>0)
  <?php 
    $colcount = count($albums);
    $i = 1;
  ?>
  <div id="albums">
  	<div class="row text-center">
  		@foreach($albums as $album)
  		 @if($i == $colcount)
  		  	<div class="card" style="width: 20rem;">
  		  		<a href="/albums/{{$album->id}}">
			  <img class="card-img-top" src="storage/albums/{{$album->cover_image}}" alt="Card image cap"></a>
			  <div class="card-body">
			    <p class="card-text">{{$album->name}}</p>
			  </div>
			
  		  	@else
  		     <div class="card" style="width: 20rem;">
  		  		<a href="/albums/{{$album->id}}">
			  <img class="card-img-top" src="storage/albums/{{$album->cover_image}}" alt="Card image cap"></a>
			  <div class="card-body">
			    <p class="card-text">{{$album->name}}</p>
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
@else
<p>No Albums To Display</p>
@endif

@endsection