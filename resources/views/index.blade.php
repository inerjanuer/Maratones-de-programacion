@extends('layouts.principal')

@section('content')
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<h1>Maraton de programacion</h1>
		<p>Buenvenidos al maraton de programacion de la universidad piloto de colombia.<br />
			Para inscribirce de clic en el siguiente enlace <a href="{{url('inscripcionEquipos/create')}}">Inscribirse</a>.<br/>
			Para leer el reglamento de clic en el siguiente boton.
		</p>
		<ul class="actions">
			<li><a href="{{url('reglamento')}}" class="button scrolly">Reglamento</a></li>
		</ul>
	</div>
</section>
@endsection