@extends('layouts.principal')

@section('content')
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<table>
			<thead>
				<th>Ejercicios resueltos</th>
				<th>Scoreboard</th>
				<th>Estado participacion</th>
				<th>Razon decision</th>
				<th>Editar datos</th>
			</thead>
			@foreach($resultados as $resultado)
			<tbody>
				<td>{{$resultado -> ejercicios}}</td>
				<td>{{$resultado -> posicion}}</td>
				<td>{{$resultado -> estado}}</td>
				<td>{{$resultado -> decision}}</td>
				<td>{!!link_to_route('actualizacionResultados.edit',$title = 'Editar', $parameters = $resultado->id, $atributes=['class'=>'btn btn-primary'])!!}</td>
			</tbody>
			@endforeach
		</table>
	</div>
</section>
@endsection