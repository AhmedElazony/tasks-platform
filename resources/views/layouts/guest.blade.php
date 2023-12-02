@props(['headLine'])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased  flex flex-col overflow-hidden">

<!-- Header -->
<nav x-data="{ open : false }" class="bg-gray-900 border-b border-gray-100 py-5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex justify-between items-center h-8">

            <div class="flex items-center">
                <a href="/" class="text-white text-lg font-bold sm:flex">{{ config('app.name') }}</a>
            </div>

            <div class="flex mt-4 md:mt-0 md:flex items-center ms-2">
                <div class="flex">
                    <div class="ms-2 sm:flex text-sm sm:ms-6">
                        <a href="/login" class="ml-4 md:ml-6 text-sm  font-bold uppercase py-2 px-4 hover:text-gray-500 {{ (request()->routeIs('login')) ? 'text-gray-500' : 'text-white'  }}">
                            {{ __('Login') }}
                        </a>
                    </div>
                    <div class="ms-2 sm:flex text-sm sm:ms-6">
                        <a href="/register"
                           class="ml-4 md:ml-6 text-sm font-bold uppercase py-2 px-4 hover:text-gray-500 {{ request()->routeIs('register') ? 'text-gray-500' : 'text-white'  }}">
                            {{ __('Register') }}
                        </a>
                    </div>
                </div>
            </div>
    </div>
    </div>
</nav>

<!-- Main Content -->
<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <h1 class="font-bold text-xl text-gray-900 mb-5 sm:text-2xl lg:text-3xl">{{ $headLine }}</h1>
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
<!-- Footer -->
<footer class="bg-gray-300 py-4 mt-auto">
    <div class="container mx-auto text-center">
        <p>&copy; 2023 Assignment Platform</p>
    </div>
</footer>

</body>

</html>

