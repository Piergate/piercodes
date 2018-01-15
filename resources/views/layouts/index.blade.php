<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <!-- Website search engine information -->
    <meta name="description" content="Piercodes - Software and digital marketing agency for high-quality website, mobile and software products." />
    <meta name="keywords" content="Piercodes, pier, codes, software, agency, digital, marketing, websites, design, development, mobile, application, seo, search, engine, optimization, improve, business, developers" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">       
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.lighter.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- JavaScript files -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.lighter.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2062767857509083",
            enable_page_level_ads: true
        });
    </script>
</head>
<body>
    <div id="app">
        @yield('content')                
    
    </div>
    @stack('scripts')
</body>
</html>
