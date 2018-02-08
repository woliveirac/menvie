<html>
    <head>
    @section('head')
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="Content-Language" content="pt-br" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

            <link href="{{ url('css/app.css') }}" rel="stylesheet" />
            <meta name="csrf-token" content="{{ csrf_token() }}" />

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        @show
    </head>
    <body>
        @section('header')
            @include('partials.header')
        @show

        <main>
            <section class="section-content">
                @yield('content')
            </section>
        </main>

        @section('footer')
            @include('partials.footer')

            <script src="{{ url('js/app.js') }}"></script>
        @show
    </body>
</html>