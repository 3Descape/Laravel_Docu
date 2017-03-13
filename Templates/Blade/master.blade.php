<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container-fluid" id="app">
      @yield('content')
    </div>
    <footer>
      <script src="/js/jquery-3.1.1.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/vue.js"></script>
      <script src="/js/app.js"></script>
    </footer>
  </body>
</html>
