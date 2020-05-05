<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Realty - Base</title>
        <link rel="stylesheet" href="{{ url('sass/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="nav-wrapper">
                <ul id="nav-mobile">
                    <li><a href="/">Список Недвижимости</a></li>
                    <li><a href="/admin/">Добавить Недвижимость</a></li>
                </ul>
                </div>
            </nav>
        </header>
        <main class="container">
            @yield('content')
        </main>
        <footer>
        </footer>
    </body>
</html>
