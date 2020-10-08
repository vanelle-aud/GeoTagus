@extends('layouts.app', ['title' => 'Contact'])

@section('content')

    <div class="container" style=""> 
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
              <h2>Prendre Contact</h2>  
              <p class="text-muted">Si vous avez un probleme avec ce service, s'il vous plait <a href="mailto:vtionang05@gmail.com">demandez de l'aide.</a> </p>
              <form action="{{ route('contact_path') }}" method="POST" >
                {{ csrf_field() }} 
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                      <label for="name" class="control-label">Nom</label>
                      <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
                      {!! $errors->first('name', '<span class="help-block">:message </span>') !!}
                </div>

                  <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required="required" value="{{ old('email') }}">
                    {!! $errors->first('email', '<span class="help-block">:message </span>') !!}
                </div>

                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    <label for="message" class="control-label sr-only">Message</label>
                    <textarea class="form-control" required="required" name="message" id="message" cols="10" rows="10">{{ old('message') }}</textarea>
                    {!! $errors->first('message', '<span class="help-block">:message </span>') !!}
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit"> Envoyer &raquo;</button>
                </div>
              </form>
            </div>
        </div>
    </div>
    

    @endsection