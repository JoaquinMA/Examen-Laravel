@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
	<div class="form-group">
		
		{!! Form::label('name', 'Nombre:') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}

	</div>

	<div class="form-group">
		
		{!! Form::label('age', 'Edad:') !!}
		{!! Form::text('age', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}

	</div>

	<div class="form-group">
		
		{!! Form::label('gender', 'Género:') !!}
		{!! Form::text('gender', null, ['class' => 'form-control', 'placeholder' => '', 'required']) !!}

	</div>

{!! Form::close() !!}

@endsection