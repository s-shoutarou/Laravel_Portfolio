@component('components.head')
@endcomponent



<section class="companies">
  @foreach($detail as $key=>$value)
  <!--企業情報を取得して全表示-->
<span class="company-detail">{{$value}}</span>
  @endforeach
</section>


