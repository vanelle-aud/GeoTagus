@extends('layouts.app', ['title' => 'Accueil'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-append">
                  <button class="btn btn-secondary" type="button">OK</button>
                </span>
              </div>  
        </div>
    </div>
</div>
@endsection
