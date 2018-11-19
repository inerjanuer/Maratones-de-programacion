@extends('layouts.principal')

@section('content')
<section id="inscripcion" class="wrapper style1 fade-up">
	<div class="inner">
		<h2>Inscripcion Maraton de Programacion</h2>
		<p>Diligencia todos los campos, para realizar la inscripcion al maraton de programacion todos los campos son requeridos.</p>
		<div>
			<section>
				{!! Form::open(['route' => 'inscripcionEquipos.store', 'method'=>'POST' ]) !!}
					@include('inscripciones.forms.formul')
					{!!form::submit('Inscribir equipo',['class'=>'btn btn-primary'])!!}
				{!! Form::close() !!}
			</section>
		</div>
	</div>
</section>
@endsection