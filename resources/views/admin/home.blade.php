@extends('layout.app')

@section('title', 'Panel Administrativo')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/dataTables/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<a href="{{ route('auth.logout') }}" class="btn btn-primary">
					Cerrar Sesión
				</a>
			</div>
		</div>
		<hr>
		<div class="panel panel-default">
			<div class="panel-header">
				<h3 class="text-center">Listado de Clientes Registrados</h3>
			</div>
			<div class="panel-body">
				<table id="clientes-table" class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Cedula</th>
							<th>N° factura</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>Cédula</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($personas as $persona)
							<tr>
								<td>{{ $persona->name }}</td>
								<td>{{ $persona->ci }}</td>
								<td>{{ $persona->n_fact }}</td>
								<td>{{$persona->email}}</td>
								<td>{{$persona->tel}}</td>
								<td>{{$persona->ci}}</td>
								<td><a href="">Ver Detalles</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('scripts_footer')
	<script src="{{ asset('lib/dataTables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('lib/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#clientes-table').DataTable({
		    	"language": {
		            "lengthMenu": "Ver _MENU_ entradas por pagina",
		            "zeroRecords": "No se encontraron resultados",
		            "info": "Viendo la pagina _PAGE_ de _PAGES_",
		            "infoEmpty": "No hay informacion",
		            "search": "Buscar: ",
		            "paginate": {
				        "previous": "Anterior ",
				        "next": " Proximo",
				    }
		        }
		    });
		});
	</script>
@endsection