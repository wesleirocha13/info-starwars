<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO-Star Wars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        @auth
            <a class="navbar-brand" href="{{ route('home') }}">INFO-Star Wars</a>
        @else
            <a class="navbar-brand" href="{{ route('welcome') }}">INFO-Star Wars</a>
        @endauth
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        @auth
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('planets') }}">Planetas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('starships') }}">Naves</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('saved') }}">Salvos</a>
                </li>
            </ul>
            <ul class="navbar-nav mr">
                <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
        @endauth
      </nav>
    @yield('content')
    <footer class="bg-dark text-center w-100" style="position: static; bottom:0; left:0;">
        <!-- Copyright -->
        <div class="text-center p-3 text-light">
          © 2020 Copyright:
          <a class="text-light" href="https://github.com/wesleirocha13" target="_blank">WRS Development</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>