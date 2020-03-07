<section  class="section2 row col-10 col-md-10 col-lg-8 justify-content-center">
    <section  class="section2-2 col-11 col-md-10 col-lg-10">
        @foreach($data as $key => $collection)
        @foreach($collection['items'] as $item)
            @include('front.components.tilles-2-block',[
                'title'=>$item['title'],
                'description'=>$item['description'],
                'subtitle'=>$item['subtitle'],
            ])
        @endforeach
        @endforeach
</section>

</section>
<section class="section1 col-md-12">
    
<div class="row justify-content-end">
    <img class="section1__row__tilles-2" data-aos="fade-up" data-aos-duration="1000" src="{{URL::asset('front/media/Grupo 4327.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-down" data-aos-duration="2000" src="{{URL::asset('front/media/Grupo 4310.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-left" data-aos-duration="1000" src="{{URL::asset('front/media/Grupo 4322.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-right" data-aos-duration="2000" src="{{URL::asset('front/media/Grupo 4325.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-right" data-aos-duration="500" src="{{URL::asset('front/media/Grupo 4319.svg')}}" alt="">
</div>
<div class="row justify-content-end">
    <img class="section1__row__tilles-2" data-aos="fade-right" data-aos-duration="3000"  src="{{URL::asset('front/media/Grupo 4321.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-up" data-aos-duration="2000" src="{{URL::asset('front/media/Grupo 4318.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-left" data-aos-duration="1500" src="{{URL::asset('front/media/Grupo 4332.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-down" data-aos-duration="1500" src="{{URL::asset('front/media/Grupo 4331.svg')}}" alt="">
</div>
<div class="row justify-content-end">
    <img class="section1__row__tilles-2" data-aos="fade-down" data-aos-duration="2500" src="{{URL::asset('front/media/Grupo 4323.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-up" data-aos-duration="1700" src="{{URL::asset('front/media/Grupo 4329.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-left" data-aos-duration="900" src="{{URL::asset('front/media/Grupo 4324.svg')}}" alt="">
</div>
<div class="row justify-content-end">
    <img class="section1__row__tilles-2" data-aos="fade-down" data-aos-duration="1500" src="{{URL::asset('front/media/Grupo 4320.svg')}}" alt="">
    <img class="section1__row__tilles-2" data-aos="fade-right" data-aos-duration="7000"src="{{URL::asset('front/media/Grupo 4330.svg')}}" alt="">
</div>

<div class="row justify-content-end last">
    <img class="section1__row__tilles-2" data-aos="fade-up" data-aos-duration="1000" src="{{URL::asset('front/media/Grupo 4328.svg')}}" alt="">
</div>
</section>

