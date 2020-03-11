
<div class="slider-container">
    <div class="slide_section my-edit col-lg-11">
        @foreach($data as $key=>$collection)
            @foreach($collection['items'] as $item)
            <div class="hello">
                    <div class="check-2"></div>
                    <div class="check-2"></div>

                @include('front.components.slider-block',[
                    'number'=>$item['number'],
                    'title'=>$item['title'],
                    'description'=>$item['description'],
                    ])
            </div>
            @endforeach
          
        @endforeach
    </div>

</div>


@push('scripts')

<script>


$('.slide_section').on('afterChange init',  function(event, slick, currentSlide, nextSlide){
    setTimeout(function(){ $(".slick-current").find('.check-2').addClass("aside"); }, 100);
});

$('.slide_section').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.check-2').removeClass("aside");
});


$('.slide_section').slick({
    centerMode:true,
    slidesToShow: 3,
    slidesToScroll:1,
    arrows:true,
    prevArrow:'<div><img  class="prev2" src="{{URL::asset('front/media/icons/Caminho 593.svg')}}" alt=""></div>',
    nextArrow:'<div><img  class="next2" src="{{URL::asset('front/media/icons/Layer.svg')}}" alt=""></div>',
    responsive: [
      {
      
      breakpoint: 1180,
      settings: {
        centerMode: false,
        slidesToShow:2,
        slidesToScroll:2,
      }
    },
    {
      
      breakpoint: 1024,
      settings: {
        centerMode: false,
        slidesToShow:2,
        slidesToScroll:2,
      }
    },
    {
      breakpoint: 825,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '0px',
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
}); 

    </script>

@endpush