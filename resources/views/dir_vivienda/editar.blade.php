@extends('vistagral')

@section('title','Actualizar Dirección de la Vivienda')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('dir-vivienda')
	<div class="container">
		<h4>Sección 2. Dirección de la Vivienda</h4>
		<p>Por favor, se lo más preciso que puedas. Todos estos datos se generan a partir del lugar donde vives.</p><br>
	</div>
	
	{!! Form::open(['route' => ['direccion-vivienda.update',$dirv], 'method' => 'PUT']) !!}

		<div class="container">

			<div class = "form-group">
				{!! Form::label('calle','2.1 *Calle, Avenida, Callejón, Carretera, Camino, Boulevard o Km') !!}
				{!! Form::text('calle',$dirv->calle,['class' => 'form-control','placeholder' => 'Avenida Ámsterdam' ,'required','minlength'=>"4",'maxlength'=>"254"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('num_exterior','2.2 *Número Exterior') !!}
				{!! Form::text('num_exterior',$dirv->num_exterior,['class' => 'form-control','placeholder' => '505' ,'required','minlength'=>"1",'maxlength'=>"5"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('num_interior','2.3 *Número Interior') !!}
				{!! Form::text('num_interior',$dirv->num_interior,['class' => 'form-control','placeholder' => '5A','maxlength'=>"5"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('colonia','2.4 *Colonia') !!}
				{!! Form::text('colonia',$dirv->colonia,['class' => 'form-control','placeholder' => 'Colonia Revolución' ,'required','minlength'=>"4",'maxlength'=>"60"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('codigo_postal','2.5 *Código Postal') !!}
				{!! Form::text('codigo_postal',$dirv->codigo_postal,['class' => 'form-control','placeholder' => '50170' ,'required','minlength'=>"5",'maxlength'=>"5"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('entre_calle','2.6 *Entre la calle...') !!}
				{!! Form::text('entre_calle',$dirv->entre_calle,['class' => 'form-control','placeholder' => 'Calle 5 de Marzo Sur']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('y_calle','2.7 *Y la calle...') !!}
				{!! Form::text('y_calle',$dirv->y_calle,['class' => 'form-control','placeholder' => 'Calle Francisco I. Madero']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('rasgo_fisico','2.8 *Rasgo físico que ayude a ubicar la vivienda (Tienda, río, edificio, arroyo, árbol, u otro)') !!}
				{!! Form::text('rasgo_fisico',$dirv->rasgo_fisico,['class' => 'form-control','placeholder' => 'Existen 2 árboles en la entrada de la casa' ,'required']) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			</div>

		</div>

	{!! Form::close() !!}

@endsection