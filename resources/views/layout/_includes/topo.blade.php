<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>@yield('titulo')</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <a href="{{ route('site.home') }}" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                @if(Auth::guest())
                <li><a href="{{route('site.login')}}">Login</a></li>
                @else
                <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                <li><a href="{{route('admin.tipos-equipamentos')}}">Tipos Equipamentos</a></li>
                <li> <a href="#"> {{ Auth::user()->name }} </a> </li>
                <li><a href="{{ route('site.login.sair') }}">Sair</a></li>
                @endif
            </ul>
        </div>
    </nav>
    <p>

    </p>