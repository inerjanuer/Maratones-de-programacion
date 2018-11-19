@extends('layouts.principal')

@section('content')
<!-- Intro -->
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<h1>Consulta y actualizacion de equipos inscritos</h1>
			<p>Si decesea consultar los equipos inscritos en el maraton de programacion de clic en el siguiente boton.</p>
			<ul class="actions">
				<li><a href="{{url('inscripcionEquipos')}}" class="button scrolly">Equipos</a></li>
			</ul>
	</div>
</section>
@endsection