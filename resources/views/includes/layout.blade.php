<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Para o Alto e Avante</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="{{ secure_asset('/assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/assets/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('/assets/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link href="{{ asset('/assets/admin-lte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="{{ asset('/assets/admin-lte/dist/css/skins/skin-green.min.css') }}">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <!--Header-->
  @include('includes.header')
  <!-- Menu -->
  @guest
  @else
    @include('includes.menu')
  @endguest

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @guest
    @else
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $page_title or "SEM TITULO" }}
      </h1>
    </section>
    @endguest
    <!-- Main content -->
      @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('includes.footer')

</div>
<!-- ./wrapper -->
<script src="{{ secure_asset('/assets/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/admin-lte/dist/js/adminlte.min.js') }}"></script>

</body>
</html>