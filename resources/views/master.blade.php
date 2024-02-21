<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('includes.style')
  <body>
    @include('includes.navbar')

    <div class="container">
        @yield('content')
    </div>
    @include('includes.script')
  </body>
</html>
