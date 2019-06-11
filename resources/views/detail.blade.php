@extends('template/template')

@section('content1')

<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
  アイウエオ
</nav>

<section class="user">
  <ul>
    <li class = 'name'><span></span></li>
    <li class = 'startday'><span></span></li>
    <li class = 'naitei-count'><span></span></li>
    <li class = 'oinori-count'><span></span></li>
  </ul>
</section>
@endsection


@section('content2')
<section class="companies">
  @foreach($companies)
  <!--企業名をDBから引っこ抜いてループして取得-->
    <a href="{{route('companies.detail',['id'=>$companies->id])}}" class = 'list-company-item'>
      {{$companies->name}}
    </a>
  @endforeach
</section>
@endsection


