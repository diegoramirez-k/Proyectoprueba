<div class="form-group {{ $errors->has('Imagen') ? 'has-error' : ''}}">
    <label for="Imagen" class="control-label">{{ 'Imagen' }}</label>
    @if(isset($producto->Imagen))
    <br>
    <img src="{{ asset('storage').'/'.$producto->Imagen}}" class="img-thumbnail img-fluid" alt="" width="200">

    @endif
    <input class="form-control" name="Imagen" type="file" id="Imagen" value="{{ isset($producto->Imagen) ? $producto->Imagen : ''}}" >
    {!! $errors->first('Imagen', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($producto->Nombre) ? $producto->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Descripcion') ? 'has-error' : ''}}">
    <label for="Descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="Descripcion" type="text" id="Descripcion" value="{{ isset($producto->Descripcion) ? $producto->Descripcion : ''}}" >
    {!! $errors->first('Descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Precio') ? 'has-error' : ''}}">
    <label for="Precio" class="control-label">{{ 'Precio' }}</label>
    <input class="form-control" name="Precio" type="number" id="Precio" value="{{ isset($producto->Precio) ? $producto->Precio : ''}}" >
    {!! $errors->first('Precio', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-success" type="submit" value="{{ $formMode === 'Editar' ? 'Actualizar' : 'Crear' }}">
</div>
