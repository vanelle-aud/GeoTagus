




<div class="container-fluid">

    <div class="card card-primary mt-5">
        <div class="card-header">
            <h3 class="card-title"> Liste des Zones
            </h3>
        </div>

        <div class="card-body">


            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Type de zone</th>
                    <th scope="col">Altitude min</th>
                    <th scope="col">Nbr de sommets</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($zones as $z)
                        <tr>
                            <th scope="row">{{$loop->index}}</th>
                            <td>
                                <a href="{{route('admin.zone.show',$z->id)}}" class="text-decoration-none text-primary">
                                    {{$z->nom}}
                                </a>
                            </td>
                            <td>{{$z->type_zone->nom ?? ''}}</td>
                            <td>{{$z->altitude}}</td>
                            <td>{{$z->nbr_sommet}}</td>
                            <td>{{$z->description}}</td>
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
                            <td class="tab-content" colspan="7">
                                <center>Aucune zone disponible ajouter   <i class="ml-2 mr-2 fas fa-arrow-right"></i> <a href="{{route('admin.zone.create')}}">ici</a></center>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>




        </div>

    </div>

    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
