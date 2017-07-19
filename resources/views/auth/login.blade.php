@extends('layout.app')

@section('title', 'Inicio de Sesion')

@section('content')
	<br>
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 panel panel-default panel-body">
		<h2 class="text-center"><span class="label label-primary">Iniciar Sesion</span></h2>
		<hr>
			{!! Form::open(['route' => 'auth.login', 'method' => 'POST']) !!}

				<div class="form-group">
					<input class="form-control" type="text" name="name" placeholder="Ingrese su Usuario" required>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Ingrese su Contraseña" required>
				</div>
				<div class="form-group">
					<input type="submit" name="login" value="Entrar" class="form-control btn-default btn-personal">
				</div>
			{!! Form::close() !!}	
		</div>
	</div>
	<br>
@endsection