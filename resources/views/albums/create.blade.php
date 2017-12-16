@extends('layouts.app')

@section('content')
<!-- {!!Form::open(['route'=>'store','method'=>'POST','enctype'=>'multipart/form-data'])!!}
{{Form::text('name','',['placeholder'=>'Album Name'])}}
{{Form::textarea('description','',['placeholder'=>'Album Description'])}}
{{Form::file('cover_image')}}
{{Form::submit('submit')}}
{!!Form::close()!!} -->
<form  method="POST" action="{{route('store.store')}}">
     {{ csrf_field() }}
	<input type="text" name="name" placeholder="Album Name">
</form>
@endsection