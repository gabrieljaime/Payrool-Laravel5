<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Filds </h3>
        <div class="box-tools pull-right">
            {!! Form::button('<i class="fa fa-minus"></i>', array('class' => 'btn btn-box-tool','title' => 'Collapse', 'data-widget' => 'collapse', 'data-toggle' => 'tooltip')) !!}
        </div>
    </div>
    <div class="box-body">

        <!-- Descripcion Field -->
        <div class="form-group col-sm-4 col-lg-2">
            {!! Form::label('descripcion', 'Descripcion:') !!}
            <p class ="form-control" >{!! $tiposNovedades->descripcion !!}</p>
        </div>
    </div>
  </div>

