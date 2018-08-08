<!doctype html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{URL::to('/css/app.css')}}">
	<title>Laravel</title>
</head>
<body>

@include('Frontend.partials.nav')

<div class="container">
	<br>
	<br>
	@yield('content')
</div>

</body>
</html>

