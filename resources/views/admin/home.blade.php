<!DOCTYPE html>
<html>
@include('layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active">Carte</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    
                    <button id = "find-me"> {{ __('ma position') }}</button>
                    
                    <button id = "print">{{ __('imprimer') }}</button>
                   
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class= "alert alert-success role"="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p id = "status"></p>
                    <a id = "map-link" target="_blank"></a>
                
                   
                    <div id="mapid"  style="height: 400px; ">
                    </div>

                    <script>
                        var mymap = L.map('mapid').setView([4.04, 9.70], 5);    
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                        maxZoom: 18,
                        id: 'mapbox/streets-v11',
                        tileSize: 512,
                        zoomOffset: -1,
                        accessToken: 'your.mapbox.access.token'
                        }).addTo(mymap);

                        var searchControl = L.esri.Geocoding.geosearch().addTo(mymap);


                        var results = L.layerGroup().addTo(mymap);

                        searchControl.on('results', function (data) {
                          results.clearLayers();
                          for (var i = data.results.length - 1; i >= 0; i--) {
                            results.addLayer(L.marker(data.results[i].latlng));
                          }
                        });
                
                        function geoFindMe() {
                
                        const status = document.querySelector('#status');
                        const mapLink = document.querySelector('#map-link');
                
                        mapLink.href = '';
                        mapLink.textContent = '';
                
                        function success(position) {
                        const latitude  = position.coords.latitude;
                        const longitude = position.coords.longitude;
                
                        status.textContent = '';
                        mapLink.href =`https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
                        mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
                        var marker = L.marker([latitude, longitude]).addTo(mymap).bindPopup(position.address).openPopup();
                        }
                
                        function error() {
                        status.textContent = 'impossible de trouver votre localisation';
                        }
                
                        if(!navigator.geolocation) {
                        status.textContent = 'Geolocation is not supported by your browser';
                        } else {
                        status.textContent = 'Locating…';
                        navigator.geolocation.getCurrentPosition(success, error);
                        }
                
                        }
                        document.querySelector('#find-me').addEventListener('click', geoFindMe);
                        //geoFindMe();
                        document.getElementById('print').addEventListener('click', () => {
                            print(); 
                        });
                    </script>

                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">vtionang</a>.</strong>
    tout droit reservé.
    <div class="float-right d-none d-sm-inline-block">
     
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->

<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
</body>
</html>
