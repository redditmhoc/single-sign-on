<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <title>{{ config('app.name', 'MHoC SSO Service') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body class="bg-gray-200 flex items-center justify-center h-screen">
    <div class="w-3/4 md:w-1/2 bg-white shadow-md">
        @yield('container')
    </div>
    <div class="absolute bottom-2">
        <p class="text-xs text-gray-500">https://reddit.com/r/MHOC&nbsp;-&nbsp;<a class="underline" href="#">Privacy Policy</a></p>
    </div>
    @yield('js')
</body>
</html>
