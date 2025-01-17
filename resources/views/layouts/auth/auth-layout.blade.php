@php
    $app = [
        'name' => config('app.name'),
        'year' => date('Y')
    ]
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $app['name'] }} | @yield('title')</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-dark">
    <div id="layoutAuthentication">
       <div id="layoutAuthentication_content">
          <main>
             @yield('content')
          </main>
       </div>
       @include('layouts.auth._footer')
    </div>

    @vite('resources/js/app.js')
 </body>
</html>

