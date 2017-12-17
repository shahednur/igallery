@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-8">
		<a class="btn btn-secondary" href="/">Go Back</a>
		<a class="btn btn-info" href="/photos/create/{{$album->id}}">Upload Photo To Album</a>
	</div>
	<hr>
</div>
@endsection