<!doctype html>
<html lang="en">
<head>
	<meta charset="utf_8">
	<meta name="csrf_token" content="{ csrf_token() }" />
	<title>pshop|online photo sharing apps</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
</head>
<body>
	@include('inc.topbar')
	<br>
	<div class="row">
		@include('inc.messages')
		@yield('content')
	</div>
</body>
</html>