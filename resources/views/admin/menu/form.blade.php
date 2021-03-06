<div class="form-group">
    <label for="nombre" class="col-sm-3 control-label requerido">Nombre</label>

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <input type="text" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" name="nombre" id="nombre" required>
    </div>
</div>
<div class="form-group">
    <label for="url" class="col-sm-3 control-label requerido">Url</label>

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <input type="text" class="form-control" value="{{old('url', $data->url ?? '')}}" name="url" id="url" required>
    </div>
</div>
<div class="form-group">
    <label for="icono" class="col-sm-3 control-label">Icono</label>

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <input type="text" class="form-control" value="{{old('icono', $data->icono ?? '')}}" name="icono" id="icono">
    </div>

    <div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{old('icono')}}"></span>
    </div>
</div>