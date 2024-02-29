<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-icon" href="images/LOGO.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/globals.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset ('css/styleguide.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/stylist.css')  }}">
        <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">  
      </head>
    <body>
        
            @if (Route::has('login'))
                <div class="header-fix">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 button-1">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 button-1">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 button-1">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        
        <!-- HEADER -->
        <div class="wireframe-home-page">
          <div class="div">
            <div class="logo">
              <img class="img" src="{{ asset('images/LOGO.png') }}">
            </div>
            <div class="frame-wrapper">
              <div class="frame-2">
                <p class="text-wrapper">Kantor Urusan Agama Kota Malang</p>
                <p class="p">Senyum (Sehat, Nyaman, Ungggul dan Maju)</p>
              </div>
            </div>
            <div class="frame-3">
              <p class="text-wrapper-2">Silahkan Pilih Untuk Layanan Dari KUA Cabang dibawah ini</p>
              <div class="allcabangkua">
                <div class="cabangsukun">
                  <div class="card-kua-cabang">
                    <div class="text-wrapper-3">Kua Cabang Kedungkandang
                    </div>
                    <i class="fa-solid fa-building fa-4x"></i>
                    <div class="button-visit">
                      <div class="text">
                        <div class="text-wrapper-4">Visit
                          </div></div>
                    </div>
                  </div>
                </div>
                <div class="cabangsukun">
                  <div class="card-kua-cabang">
                    <div class="text-wrapper-3">Kua Cabang Klojen</div>
                    <i class="fa-solid fa-building-user fa-4x"></i>
                    <div class="button-visit">
                      <div class="text">
                        <div class="text-wrapper-4">Visit</div></div>
                    </div>
                  </div>
                </div>
                <div class="cabangsukun">
                  <div class="card-kua-cabang">
                    <div class="text-wrapper-3">Kua Cabang Sukun</div>
                    <i class="fa-solid fa-building-user fa-4x"></i>
                    <div class="button-visit">
                      <div class="text"><div class="text-wrapper-4">Visit</div></div>
                    </div>
                  </div>
                </div>
                <div class="cabangsukun">
                  <div class="card-kua-cabang">
                    <div class="text-wrapper-3">Kua Cabang Lowokwaru</div>
                    <i class="fa-solid fa-building-user fa-4x"></i>
                    <div class="button-visit">
                      <div class="text"><div class="text-wrapper-4">Visit</div></div>
                    </div>
                  </div>
                </div>
                <div class="card-kua-cabang-wrapper">
                  <div class="card-kua-cabang">
                    <div class="text-wrapper-3">Kua Cabang Blimbing</div>
                    <i class="fa-solid fa-building-user fa-4x"></i>
                    <a href="{{ url('/beranda') }}" class="div-wrapper">
                      <div class="text">
                        <div class="text-wrapper-4">Visit
                          </div></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
