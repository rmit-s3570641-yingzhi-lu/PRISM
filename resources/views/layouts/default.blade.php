<!DOCTYPE html>
<html>
  <head>
  <title>@yield('title','PRISM') - Pharmancy and Retailer Mactching System</title>
  <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
        @include('inc._header')
      <div class = "container">
            <div class="col-md-offset-1 col-md-10">
          @yield('content')
      </div>
      </div>
       @include('inc._footer')
  </body>
</html>