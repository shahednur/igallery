@extends('layouts.app')

@section('content')
<h4>Create Album</h4>
{!!Form::open(['route'=>'store.post','method'=>'POST','enctype'=>'multipart/form-data'])!!}
{{ csrf_field() }}
{{Form::text('name','',['placeholder'=>'Album Name'])}}
{{Form::textarea('description','',['placeholder'=>'Album Description'])}}
{{Form::file('cover_image')}}
{{Form::submit('submit')}}
{!!Form::close()!!}

<div>
	<a href="/download/francois-hoang-85060_1513472207.jpg">File Name</a>
</div>
@endsection