@component('components.head')
@endcomponent



<section class="c-companies">
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

<span class="c-companies__detail"  v-if = "show">{{$value}}</span>
  @endforeach
  <button v-on:click="show = !show">おす</button>
</section>


@component('components.footer')
@endcomponent

