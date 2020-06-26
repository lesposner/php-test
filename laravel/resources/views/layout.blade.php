<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rick and Morty</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    {{--<link href="/css/default.css" rel="stylesheet" />--}}
    {{--<link href="/node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />--}}
    <link href="/css/app.css" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet" />
    {{--<link href="{{ mix('css/app.css') }}" rel="stylesheet" />--}}

    @yield('head')
</head>
<body>
<div id="header-wrapper">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/character/1">Characters <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/location/1">Locations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/episode/1">Episodes</a>
            </li>
        </ul>
        {{--<form class="form-inline my-2 my-lg-0">--}}
            {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}

        @include('partials.searchform')
    </div>
</nav>



    @yield ('header')

</div>

@yield ('content')

<div id="copyright" class="container">
    <p>&copy; {{ now()->year }} Les Posner. All rights reserved.</p>
</div>

</body>
</html>
