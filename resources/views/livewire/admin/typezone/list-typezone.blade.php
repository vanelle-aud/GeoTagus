



<div class="container-fluid">
    <div class="card card-primary mt-5">
        <div class="card-header">
            <h3 class="card-title"> Liste des types de Zones
            </h3>
        </div>

        <div class="card-body">


                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($types as $t)
                    <tr>
                        <th scope="row">{{$loop->index}}</th>
                        <td>{{$t->nom}}</td>
                        <td>{{$t->description}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-sm  btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <center>Aucun type de zone disponible ajouter   <i class="ml-2 mr-2 fas fa-arrow-right"></i> <a href="{{route('admin.typezone.create')}}">ici</a></center>
                        </tr>
                    @endforelse
                    </tbody>
                </table>




        </div>

    </div>

    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
