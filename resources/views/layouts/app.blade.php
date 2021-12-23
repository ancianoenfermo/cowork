<!DOCTYPE html>
<html lang= "{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="lang" content="es"/>
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="B1xmbazr7wY-0-DJToWFqDQSBkxOtaICADk5nFNtGB0" />
        <title>CoWorking en Santiago de Quelqum</title>
        <meta name="description" content="Coworking en Santiago de Compostela. Puestos individuales, despachos privados y aulas de formación. Pegados al Corte Inglés. Espacio Pet Friendly">
        <meta name="keywords" content="coworking santiago compostela">
        <link rel="canonical" href="https://coworking.quelqum.com/"/>
        <meta name="robots" content="all">



        {{--.{!!\Artesaos\SEOTools\Facades\SEOTools::generate() !!}--}}
        {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}



        <!-- Styles -->
        {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">







    </head>
    <body class="font-sans antialiased">
        {{--<x-jet-banner />--}}



            <!-- Page Heading -->
            @if (isset($header))
                {{--<header class="bg-white shadow"> --}}
                    {{--<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
                        {{ $header }}
                    {{--</div>--}}
                {{-- </header>--}}
            @endif
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @if (isset($footer))
                {{ $footer }}
            @endif

        @stack('modals')

        @stack('js')
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>
