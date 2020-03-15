@if(!empty($date))
<p class="slider_01__bottom__date">
    {{$date}}
</p>
@endif

@if(!empty($title))
<p class="slider_01__bottom__title">
    {{$title}}
</p>
@endif
  

@if(!empty($add_info))
<p class="slider_01__bottom__add_info_text">
    {{$add_info}}
</p>
@endif

@if(!empty($full_title))
    <p class="slider_01__bottom__pop_up_title">
        {{$full_title}}
    </p>
@endif
@if(!empty($text_body))
    <p class="slider_01__bottom__pop_up_text">
        {{$text_body}}
    </p>
@endif