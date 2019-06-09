<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>転活サポーター</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <!--共通ヘッダー-->
    <header class="links">
      <nav>転活サポーター</nav>
      <nav>HOME</nav>
      <nav>USER</nav>
      <nav>LOGIN</nav>
    </header>


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