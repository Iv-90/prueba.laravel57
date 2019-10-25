@extends("theme.$theme.layout")
@section('titulo')
Sistemas Menus
@endsection
@section('contenido')

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Menu Crear</h3>
            </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
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