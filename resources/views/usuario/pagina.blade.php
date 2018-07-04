@extends('vistagral')

@section('title', 'Lista de beneficiarios')

@section('encabezado')
	<div class="container">
    	<h3>IMEJ</h3>
    	<p>Instituto Mexiquense de la Juventud</p>
  	</div>
@endsection

@section('ListaDeBeneficiarios')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <!--<th scope="col">#</th>
      <th scope="col">Folio de Tarjeta</th>
      <th scope="col">Correo Electrónico</th>-->
      <th>#</th>
      <th>Folio de Tarjeta</th>
      <th>Correo Electrónico</th>
      <th>Actualizar información</th>
      <th>Formato</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($total_usuarios as $usuario)
	    <tr>
	      <th>{{ $usuario->id }}</th> 
	      <th>{{ $usuario->folio }}</th>
	      <th>{{ $usuario->email }}</th>
	      <td><a href="{{ route('identificacion-geografica.edit', $usuario->id) }}" class="btn btn-success">Sección 1</a> <a href="{{ route('direccion-vivienda.edit', $usuario->id) }}" class="btn btn-info">Sección 2</a> <a href="{{ route('datos-personales.edit', $usuario->id) }}" class="btn btn-primary">Sección 3</a></td>
        <td><a href="" class="btn btn-warning">PDF</a></td>
	    </tr>
	@endforeach
  </tbody>
</table>
{!! $total_usuarios->links() !!}
@endsection