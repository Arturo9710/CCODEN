<div class="col-lg-7" style="margin: 0 auto;">
    <div class=" p-5">
        
        <div class="form-group">
            {{ Form::label('Hora entrada') }}
            {{ Form::time('time_in', $horario->time_in, ['class' => 'form-control form-control-user' . ($errors->has('time_in') ? ' is-invalid' : '')]) }}
            {!! $errors->first('time_in', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Hora entrada') }}
            {{ Form::time('time_out', $horario->time_out, ['class' => 'form-control' . ($errors->has('time_out') ? ' is-invalid' : ''), 'placeholder' => 'Time Out']) }}
            {!! $errors->first('time_out', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Crear</button>
    </div>
    </div>
    
    
    


</div>


