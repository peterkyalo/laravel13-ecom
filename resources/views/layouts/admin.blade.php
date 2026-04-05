<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.includes.admin.head')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">

        @include('layouts.includes.admin.sidebar')

        <div class="flex-1 flex flex-col min-w-0 overflow-hidden">

            @include('layouts.includes.admin.header')

            <!-- Main Content Start -->

            {{ $slot }}

            <!-- Main Content End -->

        </div>
    </div>

    @include('layouts.includes.admin.script')
</body>


</html>
