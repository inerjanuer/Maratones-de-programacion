@extends('layouts.principal')

@section('content')
<section id="intro" class="wrapper style1 fullscreen fade-up">
	<div class="inner">
		<table>
			<thead>
				<th>Nombre del equipo</th>
				<th>Correo Profesor</th>
				<th>Nombre Profesor</th>
				<th>Ver integrantes</th>
			</thead>
			@foreach($inscripcionEquipos as $inscripcionEquipo)
			<tbody>
				<td>{{$inscripcionEquipo -> nombreEquipo}}</td>
				<td>{{$inscripcionEquipo -> nombreProfesor}}</td>
				<td>{{$inscripcionEquipo -> correoProfesor}}</td>
				<td>{!!link_to_route('inscripcionEquipos.edit',$title = 'Ver integrantes', $parameters = $inscripcionEquipo->id, $atributes=['class'=>'btn btn-primary'])!!}</td>
			</tbody>
			@endforeach
		</table>
	</div>
</section>
@endsection