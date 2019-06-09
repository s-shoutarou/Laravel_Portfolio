@extends('template/template')

@section('content1')
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
  <!--企業名をDBから引っこ抜いてループして取得-->
  <ul class="company"><span>会社名</span></ul>
</section>
@endsection


