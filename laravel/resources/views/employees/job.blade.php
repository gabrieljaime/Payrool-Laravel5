<!-- Fecha Ingreso Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_ingreso', 'Fecha Ingreso:') !!}
    @if ($edit)
        {!! Form::text('fecha_ingreso', $employees->fecha_ingreso->format('d/m/Y'), ['class' => 'form-control','placeholder'=>'DD/MM/AAAA', 'required']) !!}
    @else
        {!! Form::text('fecha_ingreso', null, ['class' => 'form-control','placeholder'=>'DD/MM/AAAA', 'required']) !!}
    @endif
</div>

<!-- Categoria Field -->
<div class="form-group col-sm-6 col-lg-4"  >
    {!! Form::label('categoria', 'Categoria:') !!}
    {!! Form::select('categoria', $Category ,null, ['class' => 'form-control','data-role'=>'select', 'data-placeholder'=>'Seleccione una Categoria','data-allow-clear'=>'true', 'required']) !!}
</div>

<!-- Subcategoria Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('subcategoria', 'Subcategoria:') !!}
    {!! Form::select('subcategoria',$Specialty, null, ['class' => 'form-control','data-role'=>'select', 'data-placeholder'=>'Seleccione una Subcategoria','data-allow-clear'=>'true', 'required']) !!}
</div>

<!-- Tipo Contrato Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo_contrato', 'Tipo Contrato:') !!}
    {!! Form::select('tipo_contrato',$TipoContrato, null, ['class' => 'form-control','data-role'=>'select', 'data-placeholder'=>'Seleccione...', 'required']) !!}
</div>
<!-- Ubicacion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ubicacion', 'Ubicación:') !!}
    {!! Form::select('ubicacion', $Ubicacion ,null,['class' => 'form-control','data-role'=>'select', 'data-placeholder'=>'Seleccione...']) !!}
</div>
<!-- Turno Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('turno', 'Turno:') !!}
    {!! Form::select('turno',$turno, null, ['class' => 'form-control','data-placeholder'=>'Seleccione...', 'required']) !!}
</div>
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('es_jerarquico', 'Es Jerarquico:') !!}
    {!! Form::select('es_jerarquico',[0=>'NO',1=>'SI'], null, ['class' => 'form-control']) !!}
</div>
<!-- Basico Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('basico', 'Basico:') !!}
    {!! Form::input('text','basico', null, ['class' => 'form-control' , 'required']) !!}
</div>

<!-- Horas Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('horas', 'Horas:') !!}
    {!! Form::text('horas', null, ['class' => 'form-control','data-inputmask'=>'"mask": "999"', 'data-mask', 'required' ]) !!}
</div>