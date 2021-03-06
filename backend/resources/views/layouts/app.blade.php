<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body class="font-sans antialiased">
    <div class="min-h-screen">
      <header class="text-slate-100 bg-cyan-600 mb-8">
        <h1 class="py-4 pl-4 text-4xl">
          Dress Connection
        </h1>
        @include('layouts.navigation')
      </header>
      <div class="mb-10">
      @yield('content')
      </div>
      <footer class="text-center">
        Copyright © 2021 Dress Connection All rights reserved.
      </footer>
    </div>
  </body>
</html>
