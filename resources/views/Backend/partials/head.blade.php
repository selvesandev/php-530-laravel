<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico"/>

	<title>Dashboard</title>

	<link rel="stylesheet" href="{{URL::to('lib/bootstrap/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link href="{{URL::to('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet"/>

	<link rel="stylesheet"
		  href="{{URL::to('lib/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('lib/select2/css/select2.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('/lib/daterange/daterangepicker.css')}}">
	<link rel="stylesheet" href="{{URL::to('/lib/tagsinput/jquery.tagsinput.min.css')}}">

	<!-- Custom Theme Style -->
	<link href="{{URL::to('/css/admin.css')}}" rel="stylesheet">
	<link href="{{URL::to('/css/customa.css')}}" rel="stylesheet">
	{{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
	{{--<script>tinymce.init({selector: '#details'});</script>--}}
</head>

<body class="nav-md">