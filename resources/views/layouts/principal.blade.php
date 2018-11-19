<!DOCTYPE HTML>

<html>
<head>
	<title>Maraton</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

	{!!Html:: style('css/main.css')!!}
	{!!Html:: style('css/noscript.css')!!}
	{!!Html:: style('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')!!}

</head>
<body class="is-preload">

	<!-- Sidebar -->
	<section id="sidebar">
		<div class="inner">
			<nav>
				<ul>
					<li><a href="{{url('/')}}">Bienvenidos</a></li>
					<li><a href="{{url('inscripcionEquipos/create')}}">Inscripcion Equipos</a></li>
					<li><a href="{{url('consulta')}}">Consulta y actualizacion de equipos inscritos</a></li>
					<!--<li><a href="{{url('exportar')}}">Exportar equipos inscritos</a></li>-->
					<li><a href="{{url('actualizacionResultados/create')}}">Actualizacion de resultados</a></li>
					<li><a href="{{url('resultadosMaraton')}}">Resultados de maraton</a></li>
					<li><a href="{{url('reglamento')}}">Objetivo y reglas de competencia</a></li>
				</ul>
			</nav>
		</div>
	</section>
	<div id="wrapper">
		@yield('content')
	</div>
	<!-- Footer -->
	<footer id="footer" class="wrapper style1-alt">
		<div class="inner">
			<ul class="menu">
				<li>&copy; Untitled. All rights reserved.</li>
				<li>Inerjanuer Bernate Fonseca, Universidad Piloto de Colombia</li>
			</ul>
		</div>
	</footer>

	{!!Html::script('js/jquery.min.js')!!}
	{!!Html::script('js/jquery.scrollex.min.js')!!}
	{!!Html::script('js/jquery.scrolly.min.js')!!}
	{!!Html::script('js/browser.min.js')!!}
	{!!Html::script('js/breakpoints.min.js')!!}
	{!!Html::script('js/util.js')!!}
	{!!Html::script('js/main.js')!!}

</body>
</html>
