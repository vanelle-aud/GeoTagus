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

  @livewire('admin.zone.create-zone')
{{--  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ajouter une zone</h1>
          </div>
         
            @if(session()->has('success') )
            <div class="mb-3 border-l-4 border-green-500 bg-green-10 text-green-700 ">
              {{ session()->get('success') }}
            </div>
              
            @endif
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Accueil</a></li>
              <li class="breadcrumb-item active">Formulaires</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Coordonnées en degré décimal</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('admin.form') }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nombre de points</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Entrez la latitude">
                  </div>
                  <div class="form-group">
                    <label for="latitude">Latitude °</label>
                    <input type="number" step="any"  id="latitude" placeholder="Entrez la latitude" 
                    class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude') }}"  required>
                    @error('latitude')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="longitude">Longitude °</label>
                    <input type="number" step="any" id="longitude" placeholder="Entrez la longitude" 
                    class="form-control @error('latitude') is-invalid @enderror" name="longitude" value="{{ old('longitude') }}"  required>
                    @error('longitude')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ok</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->

            <div class="card card-gray">
              <div class="card-header">
                <h3 class="card-title">Coordonnées en Dégre minute seconde</h3>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">nombre de points</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nombre de points">
                </div>
                <div class="row">
                  <div class="col-4">
                    Latitude °  "  '
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="degré">°
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="minute">'
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="seconde">"
                  </div>
                </div><br>

                <div class="row">
                  <div class="col-4">
                    Longitude °  "  '
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="degré">°
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="minute">'
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" placeholder="seconde">"
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Input addon -->
           
            <!-- /.card -->
            <!-- Horizontal Form -->
           
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ajout de la description</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nom</label>
                        <input type="text" class="form-control" placeholder=" nom de la zone">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Altitude limite</label>
                        <input type="number" class="form-control" placeholder="altitude" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Type de restriction</label>
                        <select class="form-control">
                          <option>interdite</option>
                          <option>limite</option>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Decrivez la zone" ></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Creer</button>
                  </div>
                  
                  
                  

                 

                  

                 
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
            
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
--}}
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
</script>
</body>
</html>
