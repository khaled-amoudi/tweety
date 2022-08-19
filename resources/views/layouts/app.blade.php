<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    <div id="app">

        <section class="px-5 py-4">
            <header class="container mx-auto">
                <a href="{{ route('tweets.index') }}" class="nav-link text-dark">
                    <h3 class="font-weight-bold"> <i class="fa fa-twitter text-primary"></i> Tweety</h3>
                </a>
            </header>
        </section>

        <section class="px-5 mb-5">
            <main class="container mx-auto">
                <div class="row">

                    @if (auth()->check())
                        <div class="col-md-2">
                            @include('includes.sidebar-list')
                        </div>
                    @endif

                    <div class="col-md-7">

                        @yield('content')

                    </div>


                    @if (auth()->check())
                    <div class="col-md-3">
                        @include('includes.friends-list')
                    </div>
                    @endif
                </div>
            </main>
        </section>

    </div>
</body>
</html>
