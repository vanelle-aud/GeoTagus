




<div class="container-fluid">
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="row">
        <div class="col-12">


                <!-- /.card-header -->

                @if($zone->sommets->count() > 0 || count($sommets) >0)
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sommets de la zone</h4>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>


                                </thead>
                                <tbody>
                                @forelse($zone->sommets as $sommet)
                                    <tr>
                                        <td>{{ $loop->index}}</td>
                                        <td>{{ $sommet->latitude ?? ' '}}</td>
                                        <td>{{ $sommet->longitude ?? ''}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>aucune donnée</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    @else
                    <div class=" m-3 alert alert-danger">
                        <p class="text-center">Cette zone n'a pas de Sommet !</p>
                    </div>
                @endif
        </div>

    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Zone : {{$zone->nom}}</h3>
                </div>
                <!-- /.card-header -->

{{--                POINT Add--}}
                <div class="card-body">
                    <div class="row">
                        <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <button class="btn btn-sm btn-dark">
                                    Ajouter des points decimaux
                                </button>
                                <button class="btn btn-sm btn-outline-dark" type="button">
                                    Ajouter des points
                                </button>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-body ">
                                <!-- form start -->
                                <form wire:submit.prevent="savepoint">

                                        <div class="form-group">
                                            <label for="latitude">Latitude °</label>
                                            <input type="number" step="any" wire:model="latitude" id="latitude" placeholder="Entrez la latitude"
                                                   class="form-control @error('latitude') is-invalid @enderror" name="latitude" value="{{ old('latitude') }}"  required>
                                            @error('latitude')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="longitude">Longitude °</label>
                                            <input type="number" step="any" id="longitude" wire:model="longitude" placeholder="Entrez la longitude"
                                                   class="form-control @error('longitude') is-invalid @enderror" name="longitude" value="{{ old('longitude') }}"  required>
                                            @error('longitude')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- /.card-body -->

                                    <div class="form-group">
                                        <button class="btn btn-primary">Ajouter</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="card card-body">
                                <h3>Coordonnées en Dégre minute seconde</h3>
                                <form wire:submit.prevent="savepointdm">
                                    <div class="row">
                                        <div class="col-6">
                                            Latitude °  "  '
                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-4 form-group">
                                            <input type="number" class="form-control" placeholder="degré">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="number" class="form-control" placeholder="minute">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="number" class="form-control" placeholder="seconde">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            Longitude °  "  '
                                        </div>

                                    </div>

                                    <div class="row form-group">
                                        <div class="col-4 form-group">
                                            <input type="number" class="form-control" placeholder="degré">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="number" class="form-control" placeholder="minute">
                                        </div>
                                        <div class="col-4 form-group">
                                            <input type="number" class="form-control" placeholder="seconde">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Ajouter</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                     </div>
                </div>


            </div>

        </div>
    </div>

</div>
