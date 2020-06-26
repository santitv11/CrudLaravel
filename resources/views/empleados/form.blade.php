<div class="form-row">
    <div class="col">
        <div class="form-group">
            <label for="Nombre" class="control-label">{{'Nombre'}}</label>
            <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')}}">
            {!!$errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}
            
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="ApellidoPaterno" class="control-label">{{'Primer Apellido'}}</label>
                    <input type="text" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}">
                    {!!$errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>')!!}
                </div>
                <div class="col">
                    <label for="ApellidoMaterno" class="control-label">{{'Segundo Apellido'}}</label>
                    <input type="text" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}">
                    {!!$errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>')!!}
                </div>
            </div>
        </div>
        <div class="form-group">    
            <label for="Correo" class="control-label">{{'Correo'}}</label>
            <input type="emaiñ" class="form-control {{$errors->has('Correo')?'is-invalid':''}}" name="Correo" id="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('Correo')}}">
            {!!$errors->first('Correo','<div class="invalid-feedback">:message</div>')!!}
        </div>
    </div>
    <div class="col ml-5">
        <div class="form-group">
            <label for="Foto" class="control-label">{{'Foto'}}</label>
            </br>
            @if(isset($empleado->Foto))
                <img class="img-thubnail img-fluid border" src="{{asset('storage').'/'.$empleado->Foto}}" alt="" width="200">
                </br></br>
            @endif
            <input class="{{$errors->has('Foto')?'is-invalid':''}}" type="file" name="Foto" id="Foto" value="">
            {!!$errors->first('Foto','<div class="invalid-feedback">:message</div>')!!}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <input type="submit" class="btn btn-success" value="{{$Modo=='crear'?'Agregar':'Actualizar'}}">
        <a class="btn btn-primary"href="{{url('empleados')}}">Regresar</a>
    </div>
</div>