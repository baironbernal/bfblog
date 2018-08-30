

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Admin') }}</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body>
      <div id="app">
         @guest
         <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         @else
         <div class="container">
            <div class="row justify-content-md-center">
               <div class="col col-lg-8">
                  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
                     <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{ Auth::user()->name }}</a>
                     <ul class="navbar-nav px-3">
                        <li class="nav-item text-nowrap">
                           <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                           Sign out</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
               </form>
            </div>
         </div>
         </div>
         
         @endguest
        
            <div class="menu" style="margin-top: 80px;">
               <div class="container">
                  <div class="row justify-content-md-center">
                     @include('admin.partials.nav-menu')
                  </div>
               </div>
            </div>
            <div class="form-new">
               <div class="container">
                  <div class="row justify-content-md-center">
                     @yield('content')
                  </div>
               </div>
            </div>
              
               
                  
             
         
      
   </body>
</html>

