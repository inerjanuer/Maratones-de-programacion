<div class="fields">
	<div class="field">
		{!!form::label('Nombre del equipo:')!!}
		{!!form::text('nombreEquipo',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del equipo', 'required'])!!}
	</div>
	<div class="field">
		<h3>Integrantes</h3>
	</div>
	<div class="field">
		<div class="field half">
			{!!form::label('Codigo:')!!}
			{!!form::text('codigo',null,['class'=>'form-control','placeholder'=>'Ingrese el codigo primer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Semestre:')!!}
			{!!form::text('semestre',null,['class'=>'form-control','placeholder'=>'Ingrese el semestre primer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Nombre y Apellidos:')!!}
			{!!form::text('nombreApellidos',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre completo primer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Correo:')!!}
			{!!form::text('correo',null,['class'=>'form-control','placeholder'=>'Ingrese el correo primer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Categorias:')!!}
			{!!form::text('categorias',null,['class'=>'form-control','placeholder'=>'Ingrese la categoria del primer estudiante', 'required'])!!}
		</div>
	</div>
	<div class="field">
		<div class="field half">
			{!!form::label('Codigo:')!!}
			{!!form::text('codigo2',null,['class'=>'form-control','placeholder'=>'Ingrese el codigo segundo estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Semestre:')!!}
			{!!form::text('semestre2',null,['class'=>'form-control','placeholder'=>'Ingrese el semestre segundo estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Nombre y Apellidos:')!!}
			{!!form::text('nombreApellidos2',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre completo segundo estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Correo:')!!}
			{!!form::text('correo2',null,['class'=>'form-control','placeholder'=>'Ingrese el correo segundo estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Categorias:')!!}
			{!!form::text('categorias2',null,['class'=>'form-control','placeholder'=>'Ingrese la categoria del segundo estudiante', 'required'])!!}
		</div>
	</div>
	<div class="field">
		<div class="field half">
			{!!form::label('Codigo:')!!}
			{!!form::text('codigo3',null,['class'=>'form-control','placeholder'=>'Ingrese el codigo tercer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Semestre:')!!}
			{!!form::text('semestre3',null,['class'=>'form-control','placeholder'=>'Ingrese el semestre tercer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Nombre y Apellidos:')!!}
			{!!form::text('nombreApellidos3',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre completo tercer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Correo:')!!}
			{!!form::text('correo3',null,['class'=>'form-control','placeholder'=>'Ingrese el correo tercer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Catergorias:')!!}
			{!!form::text('categorias3',null,['class'=>'form-control','placeholder'=>'Ingrese la categoria del tercer estudiante', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Nombre del Profesor:')!!}
			{!!form::text('nombreProfesor',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del profesor que	reconoce su participacion', 'required'])!!}
		</div>
		<div class="field half">
			{!!form::label('Correo Profesor:')!!}
			{!!form::text('correoProfesor',null,['class'=>'form-control','placeholder'=>'Ingrese el correo del profesor que reconoce su participacion', 'required'])!!}
		</div>
	</div>
	
</div>