@extends("theme.$theme.layout")
@section('titulo')
    Permisos
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @include('includes.mensaje')
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Permisos Table</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_permiso')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Crear Permisos
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-bordered table-hover table-striped" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Permiso</th>
                            <th>-</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permisos as $permiso)
                        <tr>
                            <td>{{$permiso->id}}</td>
                            <td>{{$permiso->nombre}}</td>
                            <td>{{$permiso->slug}}</td>
                            <td>
                                <a href="{{route("editar_permiso", ['id' => $permiso->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <form action="{{route("eliminar_permiso",  ['id' => $permiso->id])}}" class="d-inline form-eliminar" method="POST">
                                    @csrf @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="fa fa-times-circle text-danger"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection