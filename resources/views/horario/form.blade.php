<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('time_in') }}
            {{ Form::text('time_in', $horario->time_in, ['class' => 'form-control' . ($errors->has('time_in') ? ' is-invalid' : ''), 'placeholder' => 'Time In']) }}
            {!! $errors->first('time_in', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('time_out') }}
            {{ Form::text('time_out', $horario->time_out, ['class' => 'form-control' . ($errors->has('time_out') ? ' is-invalid' : ''), 'placeholder' => 'Time Out']) }}
            {!! $errors->first('time_out', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>