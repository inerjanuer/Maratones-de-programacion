<div class="fields">
	<div class="field">
		{!!form::label('Ejercicios resueltos:')!!}
		{!!form::text('ejercicios',null,['class'=>'form-control','placeholder'=>'Ingrese la cantidad de ejercicios resueltos', 'required'])!!}
	</div>
	<div class="field">
		{!!form::label('Posicion del scoreboard:')!!}
		{!!form::text('posicion',null,['class'=>'form-control','placeholder'=>'Ingrese la posicion del scoreboard', 'required'])!!}
	</div>
	<div class="field">
		{!!form::label('Estado de la participacion:')!!}
		{!!form::text('estado',null,['class'=>'form-control','placeholder'=>'Ingrese vigente o descalificado', 'required'])!!}
	</div>
	<div class="field">
		{!!form::label('Razon de la decision:')!!}
		{!!form::text('decision',null,['class'=>'form-control','placeholder'=>'Ingrese la posicion del scoreboard', 'required'])!!}
	</div>
</div>