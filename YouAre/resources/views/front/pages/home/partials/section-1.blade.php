
<section  class="section2 row col-md-8 justify-content-center">
    <section  class="section2 col-11 col-md-8">
        @foreach($data as $key => $collection)
        @foreach($collection['items'] as $item)
            @include('front.components.section-1-block',[
                'title'=>$item['title'],
                'description'=>$item['description'],
            ])
        @endforeach
        @endforeach
</section>

</section>
<section class="section1 rotate col-md-12">
    
<div class="row justify-content-end">
    <img class="section1__row__tilles-1" data-aos="fade-up" data-aos-duration="1200"  src="{{URL::asset('front/media/Grupo 4327.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-left" data-aos-duration="1600"  src="{{URL::asset('front/media/Grupo 4310.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-up" data-aos-duration="800" src="{{URL::asset('front/media/Grupo 4322.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-right" data-aos-duration="600" src="{{URL::asset('front/media/Grupo 4325.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-down" data-aos-duration="800" src="{{URL::asset('front/media/Grupo 4319.svg')}}" alt="">
</div>
<div class="row justify-content-end">
    <div data-aos="flip-left" data-aos-easing="ease-out-cubic"data-aos-duration="2000">
    <img class="section1__row__tilles-1" data-aos="fade-right" data-aos-duration="2900" src="{{URL::asset('front/media/Grupo 4321.svg')}}" alt="">
</div>
    <img class="section1__row__tilles-1" data-aos="zoom-in-left" data-aos-duration="1000" src="{{URL::asset('front/media/Grupo 4318.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-left" data-aos-duration="2200" src="{{URL::asset('front/media/Grupo 4332.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-down" data-aos-duration="800" src="{{URL::asset('front/media/Grupo 4331.svg')}}" alt="">
</div>
<div class="row justify-content-end">
    <img class="section1__row__tilles-1" data-aos="fade-down" data-aos-duration="2000" src="{{URL::asset('front/media/Grupo 4323.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-left" data-aos-duration="1000" src="{{URL::asset('front/media/Grupo 4329.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="fade-up" data-aos-duration="800" src="{{URL::asset('front/media/Grupo 4324.svg')}}" alt="">
</div>
<div class="row justify-content-end">
    <img class="section1__row__tilles-1" data-aos="fade-right" data-aos-duration="2400" data-aos-offset="0" src="{{URL::asset('front/media/Grupo 4320.svg')}}" alt="">
    <img class="section1__row__tilles-1" data-aos="zoom-in-left" data-aos-duration="1500" data-aos-offset="0" src="{{URL::asset('front/media/Grupo 4330.svg')}}" alt="">
</div>

<div class="row justify-content-end">
    <img class="section1__row__tilles-1" data-aos="fade-down" data-aos-duration="2000" data-aos-offset="0" src="{{URL::asset('front/media/Grupo 4322.svg')}}" alt="">
</div>
</section>

