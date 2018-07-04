<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Home') | FUR</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	@include('user/nav')
	@include('flash::message')
	<div class ="vista-principal">
		<section>@yield('encabezado')</section>
		<section>@yield('nota')</section>
		<section>@yield('registro')</section>
		<section>@yield('id-geo')</section>
		<section>@yield('registro-id-geo')</section>
		<section>@yield('dir-vivienda')</section>
		<section>@yield('registro-dir-vivienda')</section>
		<section>@yield('datos-personales')</section>
		<section>@yield('registro-dato-personal')</section>
		<section>@yield('ListaDeBeneficiarios')</section>
	</div>
	<!--SCRIPTS PARA MENSAJES-->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script>
    	$('#flash-overlay-modal').modal();
	</script>
	<!-- ....................................... -->
</body>
</html>