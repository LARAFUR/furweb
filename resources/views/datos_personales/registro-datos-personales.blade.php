@extends('vistagral')

@section('title','Datos Personales')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('datos-personales')
	<div>
		<h4>Sección 3. Datos Personales</h4>
		<p>Por favor, se lo más preciso que puedas.</p><br>
	</div>
@endsection

@section('registro-dato-personal')
	
	{!! Form::open(['route' => 'datos-personales.store', 'method' => 'POST']) !!}

		<div class = "form-group">
			{!! Form::label('apellido_paterno','3.1.1 Apellido Paterno') !!}
			{!! Form::text('apellido_paterno',null,['class' => 'form-control','placeholder' => 'Gutierrez' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('apellido_materno','3.1.2 Apellido Materno') !!}
			{!! Form::text('apellido_materno',null,['class' => 'form-control','placeholder' => 'Hernandez' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('nombre','3.1.3 Nombre(s)') !!}
			{!! Form::text('nombre',null,['class' => 'form-control','placeholder' => 'Eduardo' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('sexo','3.2 Sexo') !!}
			{!! Form::select('sexo',['' => 'Selecciona una opción','M'=>'Mujer','H'=>'Hombre'],null,['class' => 'form-control']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('fecha_nacimiento','3.3 Fecha de nacimiento') !!}
			{!! Form::text('fecha_nacimiento',null,['class' => 'form-control','placeholder' => 'dd/mm/aaaa' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('edad','3.4 Edad') !!}
			{!! Form::text('edad',null,['class' => 'form-control','placeholder' => '18' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('rfc','3.5 RFC') !!}
			{!! Form::text('rfc',null,['class' => 'form-control','placeholder' => '10 dígitos' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('ent_nacimiento','3.6 Entidad de Nacimiento') !!}
			{!! Form::select('ent_nacimiento',['' => 'Selecciona una opción','AGUSCALIENTES'=>'Aguascalientes','BAJA CALIFORNIA'=>'Baja California','BAJA CALIFORNIA SUR'=>'Baja California Sur','CAMPECHE'=>'Campeche','CIUDAD DE MEXICO'=>'Ciudad de México','CHIAPAS'=>'Chiapas','CHIHUAHUA'=>'Chihuahua','COAHUILA'=>'Coahuila','COLIMA'=>'Colima','DURANGO'=>'Durango','ESTADO DE MEXICO'=>'Estado de México','GUANAJUATO'=>'Guanajuato','GUERRERO'=>'Guerrero','HIDALGO'=>'Hidalgo','JALISCO'=>'Jalisco','MICHOACAN'=>'Michoacan','MORELOS'=>'Morelos','NACIDO EN EL EXTRANJERO'=>'Nacido en el extranjero','NAYARIT'=>'Nayarit','NUEVO LEON'=>'Nuevo Leon','OAXACA'=>'Oaxaca','PUEBLA'=>'Puebla','QUERETARO'=>'Querétaro','QUINTANA ROO'=>'Quintana Roo','SAN LUIS POTOSI'=>'San Luis Potosí','SIN ESPECIFICAR'=>'Sin Especificar','SINALOA'=>'Sinaloa','SONORA'=>'Sonora','TABASCO'=>'Tabasco','TAMAULIPAS'=>'Tamaulipas','TLAXCALA'=>'Tlaxcala','VERACRUZ'=>'Veracruz','YUCATAN'=>'Yucatán','ZACATECAS'=>'Zacatecas'],null,['class' => 'form-control']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('curp','3.7 CURP') !!}
			{!! Form::text('curp',null,['class' => 'form-control','placeholder' => 'CURP' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('doc_id_oficial','3.8 Documentación de identificación') !!}
			{!! Form::select('doc_id_oficial',['' => 'Selecciona una opción','Credencial para votar'=>'Credencial para votar','Cartilla del Servicio Militar Nacional'=>'Cartilla del Servicio Militar Nacional','Credencial de identificación laboral'=>'Credencial de identificación laboral','CURP'=>'CURP','Cédula profesional'=>'Cédula profesional','Pasaporte'=>'Pasaporte','Acta de nacimiento'=>'Acta de nacimiento','Licencia o permiso para conducir'=>'Licencia o permiso para conducir','Credencial derechohabiente de servicios médicos'=>'Credencial derechohabiente de servicios médicos','Documentos de escuelas con reconocimiento oficial'=>'Documentos de escuelas con reconocimiento oficial','Constancia de domicilio'=>'Constancia de domicilio'],null,['class' => 'form-control']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('folio','3.9 Folio, clave o número del comprobante de identificación oficial') !!}
			{!! Form::text('folio',null,['class' => 'form-control','placeholder' => '511039' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('tel_fijo','3.10 Teléfono fijo (con lada)') !!}
			{!! Form::text('tel_fijo',null,['class' => 'form-control','placeholder' => '(722)2808118' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('tel_celular','3.11 Teléfono celular') !!}
			{!! Form::text('tel_celular',null,['class' => 'form-control','placeholder' => '7228848248' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('correo','3.12 Correo electrónico') !!}
			{!! Form::email('correo',null,['class' => 'form-control','placeholder' => 'ejemplo@gmail.com' ,'required']) !!}
		</div>

		<div class = "form-group">
			{!! Form::label('ent_fed_nacimiento','3.13 Entidad federativa de nacimiento') !!}
			{!! Form::text('tel_celular',null,['class' => 'form-control','placeholder' => 'México' ,'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Continuar',['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection