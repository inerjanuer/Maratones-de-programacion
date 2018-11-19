@extends('layouts.principal')

@section('content')
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<h1>Actualizacion de resultados del maraton</h1>
		{!! Form::open(['route' => 'actualizacionResultados.store', 'method'=>'POST' ]) !!}
			@include('actulResult.forms.formul')
			{!!form::submit('Subir Resultados',['class'=>'btn btn-primary'])!!}
		{!! Form::close() !!}
	</div>
</section>
@endsection