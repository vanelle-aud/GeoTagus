<!DOCTYPE html>
<html>

@include('layouts.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield("content")
      {{ $slot ?? ''}}
  </div>


  <!-- /.content-wrapper -->
@include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@livewireScripts
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script type="text/javascript">

$(document).ready(function () {
  bsCustomFileInput.init();
});
@stack('js')

</script>
@include('flashy::message')

</body>
</html>
