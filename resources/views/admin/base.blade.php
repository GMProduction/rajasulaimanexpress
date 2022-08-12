<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Radja Sulaiman Express || Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/appstyle/genosstyle.1.0.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet"
        href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}

    {{-- ICON --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('vitalets-bootstrap-datepicker/css/datepicker.css') }}" />
    <link href="{{ asset('/css/sweetalert2.css') }}" rel="stylesheet">
    <script src="{{ asset('/js/sweetalert2.min.js')}}"></script>
    @yield('css')
</head>

<body>

    <div class="header">
        <div class="header-panel-kiri">
            <a class="btn-icon " onclick="openNav()">
                <span class="material-icons">menu
                </span>
            </a>
            <p class="title">
                Radja Sulaiman Express
            </p>
        </div>

        <p class="text-title text-center">
            Beranda
        </p>

        <div class="header-panel-kanan">
            <a class="profil dropdown-toggle" href="#" role="button" id="dropdownprofile" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="{{ asset('images/local/nobody.png') }}" />
            </a>

            <ul class="dropdown-menu custom" aria-labelledby="dropdownprofile">
                <li><a class="dropdown-item disabled" href="#">{{ auth()->user()->username }}</a></li>
                <hr>
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>

        </div>

    </div>

    <div class="d-flex">

        {{-- <div class="sidebar"> --}}
        <nav id="sidebar" class="sidebar card py-2">
            <ul class="nav flex-column" id="nav_accordion">

{{--                <li class="nav-item">--}}
{{--                    <a class="title-role" href="#"> Admin </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link menu {{ \Illuminate\Support\Facades\Request::path() == 'dashboard' ? 'active' : ''}}" href="/dashboard">
                        <i class="material-icons menu-icon">dashboard</i>
                        <p class="menu-text">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu {{ \Illuminate\Support\Facades\Request::path() == 'province' ? 'active' : ''}}" href="/province">
                        <i class="material-icons menu-icon">location_on</i>
                        <p class="menu-text">Provinsi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu {{ \Illuminate\Support\Facades\Request::path() == 'city' ? 'active' : ''}}" href="/city">
                        <i class="material-icons menu-icon">location_city</i>
                        <p class="menu-text">Kota</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu {{ \Illuminate\Support\Facades\Request::path() == 'platform' ? 'active' : ''}}" href="/platform">
                        <i class="material-icons menu-icon">flight</i>
                        <p class="menu-text">Mode Transport</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu {{ explode('/', \Illuminate\Support\Facades\Request::path())[0] == 'pricing' ? 'active' : ''}}" href="/pricing">
                        <i class="material-icons menu-icon">attach_money</i>
                        <p class="menu-text">Harga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu {{ explode('/', \Illuminate\Support\Facades\Request::path())[0] == 'article' ? 'active' : ''}}" href="/article">
                        <i class="material-icons menu-icon">newspaper</i>
                        <p class="menu-text">Artikel</p>
                    </a>
                </li>

            </ul>
        </nav>



        <div class="w-100 p-4">
            @yield('content')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="{{ asset('js/base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatable/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('datatable/select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vitalets-bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @yield('morejs')

</body>

</html>
