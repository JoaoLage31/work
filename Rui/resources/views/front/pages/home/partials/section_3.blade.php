<div class="slider_01">
    @foreach($data as $key=>$collection)
            @foreach($collection['items'] as $item)
            @foreach($item["images"] as $img)
                <div class="img" style="background-image: url({{($img)}}); ">
            @endforeach
                @include('front.components.sections_components.section_3-components',[
                    'title'=>$item['title'],
                    'date'=>$item['date'],
                    ])
            </div>
                
        @endforeach
    @endforeach
</div>

@push('scripts')

<script>
    $('.slider_01').slick({
    slidesToShow: 3,
    slidesToScroll:1,
    infinite:false,
    centerMode:false,
    centerPadding:'100px',
    dots: true,
    arrows:true,
    prevArrow:'<div><img  class="prev" src="{{URL::asset('front/media/icons/ic-arrows-left.svg')}}" alt=""></div>',
    nextArrow:'<div class="right"><img  class="next" src="{{URL::asset('front/media/icons/ic-arrows-right.svg')}}" alt=""></div>',
}); 

</script>

@endpush