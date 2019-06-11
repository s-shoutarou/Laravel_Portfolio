<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>転活サポーター</title>

        <!-- デザイン -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
    <!--共通ヘッダー-->
    <nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
    <header class="links">
      <a class="navbar-brand">転活サポーター</a>
      <ul>
      <li class="nav-item"><a class="nav-item">HOME</a></li>
      <li class="nav-item"><a class="nav-item">USER</a></li>
      <li class="nav-item"><a class="nav-item">LOGIN</a></li>
      </ul>
    </header>
</nav>

    <div class="content">
    @yield("content1")
    </div>


<div class="content">
  @yield("content2")
</div>

    <footer>
      
    </footer>
  </body>
</html>