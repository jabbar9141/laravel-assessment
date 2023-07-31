<!doctype html>
<html lang="en">
    <head>
        @include('partials.head')
        @yield('head')
    </head>
  <body>
    <div class="container">
        @yield('content')
    </div>
    @include('partials.script');
    @yield('script');
  </body>
</html>
