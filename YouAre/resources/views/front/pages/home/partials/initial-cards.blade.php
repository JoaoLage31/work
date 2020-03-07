<div class="cards">
    @foreach($data as $key=>$collection)
        @foreach($collection['items'] as $item)
        <div class="cards__card  col-10 col-md-3 col-lg-3">
            <div class="cards__card__individual">
                @foreach($item["images"] as $img)
                <img src="{{($img)}}" alt="">
              @endforeach
            </div>
            <div class="cards__card__individual__center">  
                @include('front.components.initial-cards-block',[
                    'title'=>$item['title'],
                    'subtitle'=>$item['subtitle'],
                    ])
            </div>    
        </div>
        @endforeach
    @endforeach
</div>

<div class="your-class slide">
    @foreach($data2 as $key=>$collection)
        @foreach($collection['items'] as $item)
            @foreach($item["images"] as $img)
                <div  class="home__img2"  style="background-image: url({{($img)}}); "></div>
            @endforeach
        @endforeach
    @endforeach
</div>
<div class="cards cards2">
<div class="your-class slide2">


        @foreach($data as $key=>$collection)
            @foreach($collection['items'] as $item)
            <div class="cards__card">
                <div class="cards__card__individual">
                    @foreach($item["images"] as $img)
                    <img src="{{($img)}}" alt="">
                @endforeach
                </div>
                <div class="cards__card__individual__center">  
                    @include('front.components.initial-cards-block',[
                        'title'=>$item['title'],
                        'subtitle'=>$item['subtitle'],
                        ])
                </div>    
            </div>
            @endforeach
        @endforeach
    </div>
</div>
@push('scripts')

<script>
$('.slide').slick({
    slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2500,
    prevArrow: false,
    nextArrow: false
});

$('.slide2').slick({
    centerMode:true,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    prevArrow: false,
    nextArrow: false,
    responsive: [
      {
      breakpoint: 992,
      settings: {
        centerMode: true,
        slidesToShow:2.95,
        slidesToScroll:1,
      }
    },
    {
      centerMode: false,
      breakpoint: 768,
      settings: {
          infinite:false,
        slidesToShow:1,
        slidesToScroll:1,
      }
    },
]
});


</script>

@endpush

<!-- <img class="img_cards" src="{{URL::asset('front/media/img/AdobeStock_178862047.jpg')}}" alt=""> -->