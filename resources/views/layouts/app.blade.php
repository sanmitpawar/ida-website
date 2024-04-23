<!doctype html>
<html lang="en">
  <head>
      @include('layouts.includes')
  </head>
  <body>
    {{-- header --}}
    @include('layouts.header')
    {{-- body content --}}
    @yield('content')
    <!-- FOOTER -->
    @include('layouts.footer')
    @include('layouts.scripts')
  </body>
</html>
