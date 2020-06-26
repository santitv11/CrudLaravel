<div class="form-row w-25">
    <div class="col">
        <div class="form-group">
            <label for="descripcion" class="control-label">{{'Descripcion'}}</label>
            <input type="text" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" name="descripcion" id="descripcion" value="{{isset($ticket->descripcion)?$ticket->descripcion:old('descripcion')}}">
            {!!$errors->first('descripcion','<div class="invalid-feedback">:message</div>')!!}
            
        </div>
        <div class="form-group">
            <label for="responsable" class="control-label">{{'Responsable'}}</label>
            <input type="text" class="form-control {{$errors->has('responsable')?'is-invalid':''}}" name="responsable" id="responsable" value="{{isset($ticket->responsable)?$ticket->responsable:old('responsable')}}">
            {!!$errors->first('responsable','<div class="invalid-feedback">:message</div>')!!}
        </div>
        <div class="form-group">
            <label for="fecha" class="control-label">{{'Fecha'}}</label>
            <input type="date" class="form-control {{$errors->has('fecha')?'is-invalid':''}}" name="fecha" id="fecha" value="{{isset($ticket->fecha)?$ticket->fecha:old('fecha')}}">
            {!!$errors->first('fecha','<div class="invalid-feedback">:message</div>')!!}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <input type="submit" class="btn btn-outline-success" value="{{$Modo=='crear'?'Agregar':'Actualizar'}}">
        <a class="btn btn-outline-primary"href="{{url('tickets')}}">Regresar</a>
    </div>
</div>