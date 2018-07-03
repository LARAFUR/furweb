@extends('main')

@section('titulo')
		<p>Secretaría de Desarrollo Social</p>
		<p>Sistema para el Formato Único de Registro</p>
		<p>(FUR)</p>
@endsection

@section('botones-iniciales')
    <a href="" class="btn btn-primary">Iniciar Sesión</a>
    <br></br><p>o</p>
    <a href="{{ route('usuario.create') }}" class="btn btn-primary">Registrarse</a>
@endsection

@section('indicaciones')	
    <div class="fuente-peq">
    	<p>Para iniciar sesion,primero es necesario registrarse.</p>
    	<p>Es importante revisar las instrucciones antes de iniciar con el registro.</p>
    </div>
@endsection

@section('instrucciones')
	<p>Instrucciones</p>
	<p>1. La persona a registrarse debe tener la mayoría de edad (18 años cumplidos).</p>
	<p>2. Considerar tener a la mano los documentos que se solicitan para el ingreso al programa (acta de nacimiento, identificación oficial, CURP y comprobante domiciliario).</p>
@endsection

@section ('botones-registro')
    <a href="" class="btn btn-success">Guardar</a>
@endsection