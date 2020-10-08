<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ page_title($title ?? '' ) }}</title>

    <!-- Scripts -->
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    
    <script  src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <script  src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-color: #e3f2fd;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img width="80" height="45" src="{{ asset('images/tagus.jpg') }}" class="attachment-full size-full" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item {{ set_active_route('root_path') }}">
                            <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class="nav-item {{ set_active_route('about_path') }}">
                            <a class="nav-link" href="{{ route('about_path') }}">A propos</a>
                        </li>
                        <li class="nav-item {{ set_active_route('contact_path') }}">
                            <a class="nav-link" href="{{ route('contact_path') }}">Contact</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item {{ set_active_route('login') }}">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item {{ set_active_route('register') }}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->user_name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    
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
                        var marker = L.marker([latitude, longitude]).addTo(mymap);
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
    </div>
</div>


</body>
</html>
