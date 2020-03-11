
<div id="myBtnContainer" class="d-flex justify-content-center">

    @php
   // $control = true
    @endphp
    @foreach($data as $key=>$collection)
      <button id="{{$key == 0 ? '' : 'none'}} slider{{$key}}" id="slide{{$key}}" class="btn {{$key == 0 ? 'active2' : ''}}   slector-slick" data-target="#slide{{$key}}"> {{$collection['name']}} <p class="filter-number"> {!!count($collection['items'])!!}</p></button>
    @php
 /* <button id="{{$key == 0 ? '' : 'none'}}" id="slide{{$key}}" class="btn {{$control ? 'active2' : ''}}  slector-slick" data-target="#slide{{$key}}"> {{$collection['name']}} <p class="filter-number"> {!!count($collection['items'])!!}</p></button> */
  //  $control = false;
    @endphp
    @endforeach
</div>
<div class="blank"></div>
<div id="here">
@foreach($data as $key=>$collection)

<div class="slide_section2  homes_for_rent my-edi {{$key == 0 ? '' : 'none'}}" id="slide{{$key}}">
         @foreach($collection['items'] as $item)
         
            <div class="col-12 col-lg-12">
                <div  class="home">
                    <div class="slide_home_individual">
                      @foreach($item["images"] as $img)
                        <a href="#" class="home__img"  style="background-image: url({{($img)}}); "></a>
                      <!--  <a href=""><img class="home__img" src="{{($img)}}" alt=""></a> -->
                      @endforeach
                    </div>
                    
                        
                    <div  class="home__text_section col-lg-12" >
                        @include('front.components.home-cards-block',[
                        'subhome'=>$item['subhome'],
                        'home'=>$item['home'],
                        ])
                        
                            @include('front.components.homes-text-block',[
                            'field__1'=>$item['field__1'],
                            'field__2'=>$item['field__2'],
                            'field__3'=>$item['field__3'],
                            'field__4'=>$item['field__4'],
                            'inidvidual_field_1'=>$item['inidvidual_field_1'],
                            'inidvidual_field_2'=>$item['inidvidual_field_2'],
                            'inidvidual_field_3'=>$item['inidvidual_field_3'],
                            'deal'=>$item['deal'],
                            'price'=>$item['price'],
                            ])
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>
</div>
@endforeach

@push('scripts')

<script>
/*
$(window).bind('resize', function(e)
{
  if (window.RT) clearTimeout(window.RT);
  window.RT = setTimeout(function()
  {
    this.location.reload(false); /* false to get page from cache 
  }, 1);
});
*/
$( window ).resize(function() {
  location.reload(true);
});

function filterSelection(el) {
      $('.btn').removeClass('active2');    
      $('.slide_section2').addClass('none');
      var idSlide = $(el).attr("data-target");
      $(el).addClass('active2');
      $(idSlide).removeClass('none');
  //  $(target).slick('refresh');
  //  $(target + " .slide_home_individual").slick('unslick');
  //  $(target + " .slide_home_individual").slick('getSliderSettings()');
}

     $('.slector-slick').on('click', function(){
      filterSelection(this);
     })


$('.slide_section2').on('afterChange init',  function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').addClass("slick-arrow2");
    $(".slick-current").find('.home').addClass("on");  
    $('.blank').addClass("add__Blank");
});

$('.slide_section2').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').removeClass("slick-arrow2");
    $(".slick-current").find('.home').removeClass("on");
    $('.blank').remove("add__Blank");
});



$(window).on('resize orientationchange', function() {
  $( ".slide_section2" ).each(function( index , el ) {
    $(el)[0].slick.resize();
    $(el)[0].slick.refresh();

    $(el).find(".slide_home_individual").each(function( index ,target ) {
      console.log($(target))
      $(target)[0].slick.resize();
      $(target)[0].slick.refresh();
      
    });
});
});


$('.slide_section2').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    slidesToScroll:3,
    prevArrow:false,
    nextArrow: false,
    responsive: [
      {
      breakpoint: 1180,
      settings: {
        slidesToShow:2,
        slidesToScroll:1,
      }
    },
    
    {
      breakpoint: 825,
      settings: {
        slidesToShow:2,
        slidesToScroll: 1,
        centerPadding: '0px',
      }
    },
    {
      breakpoint: 550,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerPadding: '20px',
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  //   onAfterChange: function(){
  //  $('.current').text($('.slides').slickCurrentSlide()+1);
  //}
}); 

// $(window).resize(function(){
//  $('.slide_home_individual').slick('refresh');
// });

// $(window).on('orientationchange', function() {
//  $('.slide_home_individual').slick('resize');
// });




$('.slide_home_individual').slick({
    slidesToShow: 1,
    slidesToScroll:1,
    draggable: false,
    swipe: false,
    swipeToSlide: false,
    touchMove: false,
    draggable: false,
    accessibility: false,
    mobilefirst:true,
    dots: true,
    arrows:true,
    prevArrow:'<div><img  class="prev" src="{{URL::asset('front/media/icons/ic-arrows-left.svg')}}" alt=""></div>',
    nextArrow:'<div class="right"><img  class="next" src="{{URL::asset('front/media/icons/ic-arrows-right.svg')}}" alt=""></div>',
}); 


  
    $(document).ready(function() { 
        // filterSelection("Rent");
        AOS.init({
            once: true,
            duration: 1200
        })
     });

     

  /*  function filterSelection(c) {
        console.log(c);
        Refresh();
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function Refresh(){
        
    }
    
    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
      
    }
    
    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);     
        }
      }
      
      element.className = arr1.join(" ");
    }
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active2");
        current[0].className = current[0].className.replace(" active2", "");
        this.className += " active2";
      });
    }

    */
    </script>
@endpush