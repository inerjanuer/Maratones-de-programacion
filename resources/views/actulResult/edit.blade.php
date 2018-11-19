@extends('layouts.principal')

@section('content')
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<h1>Actualizacion de resultados del maraton</h1>
		{!! Form::model($resultados,['route' => ['actualizacionResultados.update',$resultados->id], 'method'=>'PUT' ]) !!}
			@include('actulResult.forms.formul')
			{!!form::submit('Actualizar Resultados',['class'=>'btn btn-primary'])!!}
		{!! Form::close() !!}
	</div>
</section>
@endsection