@extends("theme.$theme.layout")
@section('titulo')
Sistemas Menus
@endsection


@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Menu Crear</h3>
                <a href="{{route('menu')}}" class="btn btn-info btn-sm pull-right">Listado</a>
            </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="box-body ">
                    @include('admin.menu.form')
                </div>
                <div class="box-footer">
                    <div class="col-md-offset-3">
                        @include("includes.boton-form-crear")
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection