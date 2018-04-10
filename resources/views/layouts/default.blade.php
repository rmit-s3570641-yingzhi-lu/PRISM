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
                @include('shared._messages')
                @yield('content')
            </div>
      </div>>

      <!--Add by LosoLai 10.04.2018 for fix footer issue-->
      <footer class="page-footer font-small blue pt-4 mt-4">
          @include('inc._footer')
          <!--Footer Links-->
          <div class="container-fluid text-center text-md-left">
              <div class="row">
      
                  <!--First column-->
                  <div class="col-md-6">
                      <h5 class="text-uppercase">Footer Content</h5>
                      <p>Here you can use rows and columns here to organize your footer content.</p>
                  </div>
                  <!--/.First column-->
      
          <!--Copyright-->
          <div class="footer-copyright py-3 text-center">
              © 2018 Copyright:
              <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
          </div>
          <!--/.Copyright-->
      
      </footer>
      <script src="/js/app.js"></script>
  </body>
</html>