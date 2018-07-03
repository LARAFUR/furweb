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
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($total_usuarios as $usuario)
	    <tr>
	      <th>{{ $usuario->id }}</th>
	      <th>{{ $usuario->folio }}</th>
	      <td>{{ $usuario->email }}</td>
	      <td><a href="" class="btn btn-success">Editar</a> <a href="" class="btn btn-warning">PDF</a></td>
	    </tr>
	@endforeach
  </tbody>
</table>
{!! $total_usuarios->links() !!}
@endsection