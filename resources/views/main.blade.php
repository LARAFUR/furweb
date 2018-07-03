<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Inicio') | FUR</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<!--<link rel="stylesheet" type="text/css" href="{{ asset('public/css/main.css') }}">-->
</head>
<body>
	
	<div class="general">
		<div class="logotipo">
			 
		</div>

		<div class="login fuente-centro">
			<section class="titulo1 _separador_horizontal_login">@yield('titulo')</section>			
			<section class="botones_iniciales _separador_horizontal_login">@yield('botones-iniciales')</section>
			<section>@yield('indicaciones')</section>
		</div>

		<div class="instrucciones fuente-centro">
			<section>@yield('instrucciones')</section>
		</div>
		
	</div>

	<script type="{{ asset('plugins/jquery/js/jquery-2.2.4.js') }}"></script>
	<script type="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>