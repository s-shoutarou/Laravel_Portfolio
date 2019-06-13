@component('components.head')
@endcomponent



<section id="companies">
  <!--企業情報を取得して全表示-->
  <!--idは表示しない-->
  <!--created_atとupdated_atも表示しない-->
  @foreach($detail as $key=>$value)
    @if($key == 'id')
      @continue
    @endif


    @if($key == 'created_at')
      @break
    @endif

<span class="company-detail" v-on:click="show = !show">{{$value}}</span>
  @endforeach
</section>


@component('components.footer')