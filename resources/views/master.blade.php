<!DOCTYPE html>
<html>
  @include('layouts.css')
  <body>
     @include('layouts.header')
    <div class="d-flex align-items-stretch">
      @include('layouts.sidebar')
      <div class="page-holder w-100 d-flex flex-wrap">
        <div>
          @yield('contant')
        </div>
         @include('layouts.footer')
      </div>
    </div>
     @include('layouts.js')
  </body>
</html>