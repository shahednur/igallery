<!doctype html>
<html lang="en">
<head>
	<meta charset="utf_8">
	<meta name="csrf_token" content="{ csrf_token() }" />
	<title>pshop|online photo sharing apps</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
	@include('inc.topbar')
	<br>
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
</body>
</html>