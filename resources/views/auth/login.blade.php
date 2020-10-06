@extends('layouts.app', ['title' => 'Connexion'])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
            <div class="card">
                <div class="card-header " style="background-color: #adb5bd">{{ __('Connexion') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row" >

                            <div class="input-group ">
                                
                                <input id="login" type="text" class="form-control {{ $errors->has('email') || 
                                $errors->has('user_name') ? 'is-invalid' : '' }} "  placeholder="Email ou username" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                              <span class="fas fa-envelope"></span>
                                            </div>
                                          </div>
                                     
                                @if($errors->has('email') || $errors->has('user_name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') ?: $errors->first('user_name') }}</strong>

                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">


                            <div class="input-group">
                                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-lock"></span>
                                    </div>
                                  </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       <strong> {{ __('Se souvenir') }}</strong>
                                    </label>
                                </div>
                            </div>
                        </div>

                       

                        <div class="form-group row ">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                           
                              
                               
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
