@extends('vistagral')

@section('title','Dirección de la Vivienda')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('dir-vivienda')
	<div>
		<h4>Sección 2. Dirección de la Vivienda</h4>
		<p>Por favor, se lo más preciso que puedas. Todos estos datos se generan a partir del lugar donde vives.</p><br>
	</div>
@endsection

@section('registro-dir-vivienda')
	
	{!! Form::open(['route' => 'direccion-vivienda.store', 'method' => 'POST']) !!}

		<div class = "form-group">
			{!! Form::label('calle','2.1 Calle, Avenida, Callejón, Carretera, Camino, Boulevard, Km') !!}
			{!! Form::text('calle',null,['class' => 'form-control','placeholder' => 'Avenida Ámsterdam' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('num_exterior','2.2 Número Exterior') !!}
			{!! Form::text('num_exterior',null,['class' => 'form-control','placeholder' => '505' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('num_interior','2.3 Número Interior') !!}
			{!! Form::text('num_interior',null,['class' => 'form-control','placeholder' => '5A' ,]) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('colonia','2.4 Colonia') !!}
			{!! Form::text('colonia',null,['class' => 'form-control','placeholder' => 'Colonia Revolución' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('codigo_postal','2.5 Código Postal') !!}
			{!! Form::text('codigo_postal',null,['class' => 'form-control','placeholder' => '50170' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('entre_calle','2.6 Entre la calle...') !!}
			{!! Form::text('entre_calle',null,['class' => 'form-control','placeholder' => 'Calle 5 de Marzo Sur']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('y_calle','2.7 Y la calle...') !!}
			{!! Form::text('y_calle',null,['class' => 'form-control','placeholder' => 'Calle Francisco I. Madero']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('rasgo_fisico','2.8 Rasgo físico que ayude a ubicar la vivienda (Tienda, río, edificio, arroyo, árbol, u otro)') !!}
			{!! Form::text('rasgo_fisico',null,['class' => 'form-control','placeholder' => 'Existen 2 árboles en la entrada de la casa' ,'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Continuar',['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection