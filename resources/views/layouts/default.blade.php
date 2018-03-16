<!DOCTYPE html>
<html>
  <head>
  <title>@yield('title','PRISM') - Pharmancy and Retailer Mactching System</title>
  <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
        @include('inc.navbar')
      <div class = "container">
          @yield('content')
      </div>
  </body>
</html>