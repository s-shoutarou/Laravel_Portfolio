<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>転活サポーター</title>

        <!-- デザイン -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
    <!--共通ヘッダー-->
  <!-- Navbar content -->
    <header class="links l-header">
      <nav class="navbar navbar-dark bg-primary c-head">
      <a class="navbar-brand">転活サポーター</a>
      <ul class = "c-head__ul">
      <li class="c-head__list"><a class="c-head__link">HOME</a></li>
      <li class="c-head__list"><a class="c-head__link">USER</a></li>
      <li class="c-head__list"><a class="c-head__link">LOGIN</a></li>
      </ul>
      </nav>
    </header>


