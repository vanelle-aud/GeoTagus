<div class="">
    {{-- Success is as dangerous as failure. --}}
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

{{--          <div class="container-fluid">--}}
            <div class="row">
              <!-- left column -->
              <!--/.col (left) -->
              <!-- right column -->

              <div class="col-md-12">
                <!-- general form elements disabled -->

                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Ajout Une Zone</h3>
                  </div>
                  <!-- /.card-header -->

                    <form wire:submit.prevent="save">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-sm-8">
                                  <!-- text input -->
                                  <div class="form-group">
                                      <label for="nom">Nom</label>
                                      <input type="text" class="form-control @error('nom') is-invalid @enderror" wire:model="nom"
                                             placeholder=" nom de la zone" id="nom" name="nom" value="{{ old('nom') }}"  >
                                      @error('nom')
                                      <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                      @enderror
                                  </div>

                              </div>

                              <div class="col-sm-4">
                                  <div class="form-group">
                                      <label for="altitude">Altitude limite (Km)</label>
                                      <input type="number" class="form-control  @error('altitude') is-invalid @enderror" wire:model="altitude"  id="altitude"
                                             name="altitude" value="{{ old('altitude') }}"  placeholder="altitude">
                                      @error('altitude')
                                      <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                  </div>

                              </div>
                          </div>

                          <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                          <label for="nbr_sommet">Nombre de points</label>
                          <input type="number" class="form-control @error('nbr_sommet') is-invalid @enderror" wire:model="nbr_sommet" id="nbr_sommet"
                          placeholder="Entrez le nombre de points" name="nbr_sommet" value="{{ old('nbr_sommet') }}" >
                          @error('nbr_sommet')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      </div>


                      <div class="row">
                        <div class="col-sm-6">
                          <!-- select -->
                          <div class="form-group field">
                            <label class="label">type</label>
                            <div class="select">
                            <select class="form-control  @error('type_zones_id') is-invalid @enderror" name="type_zones_id" wire:model="type_zones_id">
                                <option value="">...</option>

                                @forelse($types as $type)
                                    <option value="{{ $type->id }}">
                                      {{ $type->nom }}
                                    </option>
                                    @empty
                                    <option value=""> Aucun Type.</option>
                                @endforelse

                            </select>
                            @error('type_zones_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                            @enderror
                          </div>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control  @error('description') is-invalid @enderror" rows="3" wire:model="description" id="description"
                             placeholder="Decrivez la zone" name="description"  value="" >{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Creer</button>
                      </div>
                    </div>
                    </form>

                  <!-- /.card-body -->
                </div>


                <!-- /.card -->
                <!-- general form elements disabled -->

                <!-- /.card -->
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
{{--          </div><!-- /.container-fluid -->--}}
        </section>
        <!-- /.content -->
      </div>
</div>
