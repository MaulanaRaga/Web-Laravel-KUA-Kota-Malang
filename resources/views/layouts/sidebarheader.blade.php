<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-icon" href="images/LOGO.png">

        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
        <!-- Styles -->
        <link href="{{ asset('css/webpage/globals.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset ('css/webpage/styleguide.css') }}"/>
        <link rel="stylesheet" href="{{ asset ('css/webpage/style.css')  }}"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar-sidebar.css') }}">
    </head>
    <body>
      <div class="navbar">
        <div class="frame-7">
          <p class="text-wrapper-9">KANTOR URUSAN AGAMA KOTA MALANG</p></div>
        <div class="frame-8">
          <div class="frame-9"> 
          </div>
            <i class="fa-solid fa-headphones-simple fa-2x" style="color: #ffffff ;"></i>
            <i class="fa-solid fa-globe fa-2x" style="color: #ffffff ;"></i>
          </div>
      </div>

      <div class="side-bar">
        <a href="{{ url('/') }}" class="side-bar-logo">
          <div class="logo">
            <img class="logo-2" src="{{ asset('images/LOGO.png') }}" />
          </div>
        </a>
        <div class="side-baricon-text-wrapper">
          <div class="side-baricon-text">
            <a href="{{ url('/beranda') }}" class="div-2">
              <i class="fa-solid fa-house fa-2x"></i>
              <div class="text-wrapper-7">Beranda</div>
            </a>
            <div class="side-bar-profil">
              <i class="fa-solid fa-user fa-2x"></i>
              <a href="{{ url('/profile') }}">
              <div class="text-wrapper-8">Profile</div>
              </a>
            </div>
            <div class="div-2">
              <i class="fa-solid fa-image fa-2x"></i>
              <a href="{{ url('/agenda')}}">
              <div class="text-wrapper-7">Agenda</div>
            </a>
            </div>
            <div class="div-2">
              <i class="fa-solid fa-newspaper fa-flip-horizontal fa-2x"></i>
              <a href="{{ url('/layanan')}}">
              <div class="text-wrapper-7">Layanan</div>
              </a>
            </div>
            <div class="side-bar-data">
              <i class="fa-solid fa-chart-pie fa-2x"></i>
              <a href="{{ url('/datachart')}}">
              <div class="text-wrapper-7">Data</div>
              </a>
            </div>
          </div>
        </div>
    </div>
    @yield('beranda')

    

    </body>
</html>