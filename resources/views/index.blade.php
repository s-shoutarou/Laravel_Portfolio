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
  @foreach($companies as $company)
  <!--企業名をDBから引っこ抜いてループして取得-->
    <a href="{{route('companies.detail',['id'=>$company->id])}}" class = 'list-company-item'>
      {{$company->name}}
    </a>
  @endforeach
</section>
@endsection


