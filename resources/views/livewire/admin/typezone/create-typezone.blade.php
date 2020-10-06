




<div >


        <div class="container-fluid">
            <h2>Ajouter un type de zone</h2>



            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Type de zone </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form wire:submit.prevent="save">

                    <div class="card-body">

                        <div class="form-group">
                            <label for="intitule">Intitulé de la zone</label>
                            <input type="text"  wire:model="nom" id="intitule" placeholder="Entrez le nom de la zone"
                                   class="form-control @error('nom') is-invalid @enderror" name="intitule" value="{{ old('nom') }}"  >
                            @error('nom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="commentaire">Description</label>
                            <textarea  id="commentaire" wire:model="description" class="form-control @error('description') is-invalid @enderror" name="commentaire" >{{ old('description') }}
                        </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <i class="fas fa-spinner fa-spin" wire:loading wire:target="save"></i>
                        <button class="btn btn-primary">save</button>
                    </div>
                </form>
            </div>

        </div>

</div>
