<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="images/LOGO.png">
    <!-- Styles -->
    <link href="{{ asset('css/globals.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('css/styleguide.css') }}" />
    <link rel="stylesheet" href="{{ asset ('css/stylist.css')  }}" />

</head>
    <body>
        <!-- Authentication Links -->
        @guest @else
        <li class="nav-item dropdown">
            <a
                id="navbarDropdown"
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                v-pre="v-pre">
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a
                    class="dropdown-item"
                    href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        @endguest 
    @yield('content')
</body>
</html>