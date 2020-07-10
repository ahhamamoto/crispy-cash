<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Crispy Cash</title>
        <link rel="stylesheet" href=" {{ asset('css/bulma.min.css') }}">
    </head>
    <body>

        <div class="container">
            @include('layouts.navbar')
        </div>

        <section class="section">

            <div class="container">
                @if (Auth::check())
                    <div class="columns">
                        <div class="column is-one-fifth">
                            @include('layouts.menu')
                        </div>
                        <div class="column">
                            @yield('content')
                        </div>
                    </div>
                @else
                    @yield('content')
                @endif
            </div>

        </section>

        @include('layouts.footer')
    </body>
</html>
