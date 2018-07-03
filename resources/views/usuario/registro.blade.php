@extends('vistagral')

@section('title','Registro')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('nota')
	<div class="container">
		<h4>Instrucciones</h4>
		<p>Por favor, ingresa los datos solicitados.</p><br>
	</div>
@endsection

@section('registro')

	{!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}

		<div class="container">

			<div class = "form-group">
				{!! Form::label('folio','Ingresa folio de tarjeta') !!}
				{!! Form::text('folio',null,['class' => 'form-control','placeholder' => '024807' ,'required','minlength'=>"6",'maxlength'=>"6"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('email','Ingresa tú correo electronico') !!}
				{!! Form::email('email',null,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com' ,'required']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('password','Crea tú contraseña') !!}
				{!! Form::password('password',['class' => 'form-control','placeholder' => '********','required','minlength'=>"8"]) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
			</div>

		</div>

	{!! Form::close() !!}

@endsection