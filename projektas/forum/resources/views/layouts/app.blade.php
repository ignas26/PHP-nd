<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="float-left">     {{ date("Y-m-d H:i:s") }} </div>  
            <div class="container">
          
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                        @can('create', App\Channel::class)
                                <li><a class="nav-link" href="{{ route('create') }}">Create New Channel</a></li>
                                <li><a class="nav-link" href="{{ route('adm') }}">Admin control panel</a></li>
                        @endcan
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>    
                </div>
            </div>
        </nav>
         
        @if (Auth::user())
        <div class="float-right"> <h4> esate prisijungęs kaip <span class="text-danger">  {{ Auth::user()->name }}  
        </span> 
        </h4> </div><br>
        @endif
         
<!--
        <div class="container-fluid"><br>
    <div class="row justify-content-center">
    http://localhost/backEnd/nd/projektas/forum/public/channels/create
-->
           
           <div class="container-fluid-inline">
           <div class="row mt-4">
<a href="{{ route('convcreate') }}" class="form-control btn btn-primary"> kurkite naują pokalbį</a>
<br>
<div class="card">
    <div class="panel-heading p-5 mb-3 text-light bg-primary rounded-circle"><p class="text-center text-uppercase"> Forumo kanalai </p>
    
    </div>
    
    <div class="card">
    <div class="card-body">
        <ul class="list-group">
            @foreach ($channels as $channel)
            <li class="list-group-item-action mb-3">
                
          <a href={{ route('home', ['id' => $channel->id]) }} class="list-group-item list-group-item-action" >{{ $channel->title }} <span class="badge badge-primary badge-pill left"> {{ $channel->discussions->count() }} </span></a>
               
            </li>
            @endforeach
        </ul>
    </div>
</div>
               </div>



       <div class="container-fluid col-md-9">
        @yield('content')
    </div>
    
               </div>
    </div>
    </div>
    
    @if(Session::has('message'))
    <div class="alert alert-info">
        {{ Session::get('message') }}
    </div>
    @endif
</body>

</html>
