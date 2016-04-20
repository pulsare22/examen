<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
@yield('titulo')
<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
@yield('content')
</body>
</html>
