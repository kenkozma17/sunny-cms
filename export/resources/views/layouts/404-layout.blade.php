<!doctype html>
<html lang="{{ $site->short_locale }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="{{ $__data['company']->company_name }} | 404">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;600;700&display=swap" rel="stylesheet">

    <meta name="robots" content="noindex">

    <title>{{ $__data['company']->company_name ? $__data['company']->company_name : env('APP_NAME') }} | 404</title>

    @vite(['resources/js/site.js', 'resources/css/site.css'])
</head>
<body class="font-sans leading-normal">
    <x-navigation-bar :context="$__data" :red_shape="false" />
    <div class="relative md:mt-[10rem] mt-[8rem]">
        @yield('template_content')
    </div>
    <x-footer :context="$__data" />
</body>
</html>
