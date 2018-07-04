@extends('vistagral')

@section('title','Identificación Geográfica')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('id-geo')
	<div>
		<h4>Sección 1. Identificación Geográfica</h4>
		<p>Por favor, se lo más preciso que puedas. Todos estos datos se generarán a partir del lugar donde vive.</p><br>
	</div>
@endsection

@section('registro-id-geo')
	
	{!! Form::open(['route' => 'identificacion-geografica.store', 'method' => 'POST']) !!}

			<div class = "form-group">
				{!! Form::label('cve_estado','1.1 *Clave de Estado') !!}
				{!! Form::select('cve_estado',['' => 'Selecciona una opción','15'=>'Estado de México'],null,['class' => 'form-control']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('cve_municipio','1.2 *Clave de Municipio') !!}
				{!! Form::select('cve_municipio',['' => 'Selecciona una opción','054' => 'Metepec','106' => 'Toluca','118' => 'Zinacantepec'],null,['class' => 'form-control']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('cve_localidad','1.3 *Clave de Localidad') !!}
				{!! Form::text('cve_localidad',null,['class' => 'form-control','placeholder' => '0102' ,'required','minlength'=>"4",'maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('cve_ageb','1.4 *Clave de AGEB') !!}
				{!! Form::text('cve_ageb',null,['class' => 'form-control','placeholder' => '0102','minlength'=>"4",'maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('manzana','1.5 *Manzana') !!}
				{!! Form::text('manzana',null,['class' => 'form-control','placeholder' => '0006','maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('lote','1.6 *Lote') !!}
				{!! Form::text('lote',null,['class' => 'form-control','placeholder' => '0002','maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('fecha_solicitud','1.7 *Fecha de Solicitud') !!}
				{!! Form::text('fecha_solicitud',null,['class' => 'form-control','placeholder' => 'dd/mm/aaaa' ,'required','maxlength'=>"10"]) !!}
						<!-- COMO SACAR LA FECHA DEL SISTEMA -->
			</div>

			<div class = "form-group">
				{!! Form::label('localidad','1.8 *Nombre de Localidad') !!}
				{!! Form::text('localidad',null,['class' => 'form-control','placeholder' => 'Toluca' ,'required','minlength'=>"4"]) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Continuar',['class' => 'btn btn-primary']) !!}
			</div>

	{!! Form::close() !!}

@endsection