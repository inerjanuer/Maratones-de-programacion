@extends('layouts.principal')

@section('content')
<!-- Intro -->
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<h1>Resultados del maraton</h1>
			<p>Si desea conocer los resultados del maraton de programacion de clic en siguiente boton.</p>
			<ul>
				<li><a href="{{url('actualizacionResultados')}}" class="button scrolly">Resultados</a></li>
			</ul>
	</div>
</section>
@endsection