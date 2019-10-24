<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo','Biblioteca') | Probando</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">
    @yield('styles')
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->

<body class="hold-transition skin-green layout-boxed sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- INICIO Header -->
    @include("theme/$theme/header")
    <!-- FIN Header -->
    <!-- INICIO Aside -->
    @include("theme/$theme/aside")
    <!-- FIN Aside -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        @yield('contenido')
      </section>
    </div>
    <!-- INICIO Footer -->
    @include("theme/$theme/footer")
    <!-- FIN Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
  <!-- FastClick -->
  <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

  @yield('scripts')
</body>

</html>