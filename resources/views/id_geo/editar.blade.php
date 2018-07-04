@extends('vistagral')

@section('title','Actualizar identificación geográfica')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('id-geo')

	<div class="container">
		<h4>Sección 1. Identificación Geografica</h4>
		<p>Por favor, se lo más preciso que puedas. Todos estos datos se generan a partir del lugar donde vives.</p><br>
	</div>
	
	{!! Form::open(['route' => ['identificacion-geografica.update',$id_geo], 'method' => 'PUT']) !!}

		<div class="container">

			<div class = "form-group">
				{!! Form::label('cve_estado','1.1 Clave de Estado') !!}
				{!! Form::select('cve_estado',['' => 'Selecciona una opción','15'=>'Estado de México'],null,['class' => 'form-control']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('cve_municipio','1.2 Clave de Municipio') !!}
				{!! Form::select('cve_municipio',['' => 'Selecciona una opción','054' => 'Metepec','106' => 'Toluca','118' => 'Zinacantepec'],null,['class' => 'form-control']) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('cve_localidad','1.3 Clave de Localidad') !!}
				{!! Form::text('cve_localidad',$id_geo->cve_localidad,['class' => 'form-control','placeholder' => '0102' ,'required','minlength'=>"4",'maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('cve_ageb','1.4 Clave de AGEB') !!}
				{!! Form::text('cve_ageb',$id_geo->cve_ageb,['class' => 'form-control','placeholder' => '0102','minlength'=>"4",'maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('manzana','1.5 Manzana') !!}
				{!! Form::text('manzana',$id_geo->manzana,['class' => 'form-control','placeholder' => '0006','maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('lote','1.6 Lote') !!}
				{!! Form::text('lote',$id_geo->lote,['class' => 'form-control','placeholder' => '0002','maxlength'=>"4"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('fecha_solicitud','1.7 Fecha de Solicitud') !!}
				{!! Form::text('fecha_solicitud',$id_geo->fecha_solicitud,['class' => 'form-control','placeholder' => 'dd/mm/aaaa' ,'required','maxlength'=>"10"]) !!}
			</div>

			<div class = "form-group">
				{!! Form::label('localidad','1.8 Nombre de Localidad') !!}
				{!! Form::text('localidad',$id_geo->localidad,['class' => 'form-control','placeholder' => 'Toluca' ,'required','minlength'=>"4"]) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
			</div>

		</div>

	{!! Form::close() !!}

@endsection