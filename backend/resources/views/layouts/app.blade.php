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
      <header>
        <h1 class="py-4 pl-4 text-2xl text-slate-100 bg-cyan-600">
          Dress Connection
        </h1>
      </header>
      @yield('content')
      <footer class="text-center">
        Copyright © 2021 Dress Connection All rights reserved.
      </footer>
    </div>
  </body>
</html>
