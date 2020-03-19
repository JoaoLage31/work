<div data-aos="fade-left"  data-aos-duration="1000" class="section_4__behind"></div>
<div id="sec_4" class="section_4">
    <div class="contact_me_on col-xl-6 d-flex justify-content-end">
        <div class="col-xl-11">
            @foreach($data as $key=>$collection)
            <div data-aos="fade-right"  data-aos-duration="2000" class="section_4__title_posisiton"> <h2 class="section_4__title_buttons"> {{$collection['title']}} </h2></div>
                @foreach($collection['items'] as $item)
                    <div class="section_4__info">
                        @include('front.components.sections_components.section_4-components',[
                        'phone'=>$item['phone'],
                        'street'=>$item['street'],
                        ])
                    </div>
                @endforeach
            @endforeach
            <div class="d-flex">
                <div  >
                    <a href="#" class="mdi mdi-facebook"></a>
                </div>
                <div  >
                    <a href="#" class="mdi mdi-twitter"></a>
                </div>
                <div  >
                    <a href="#" class="mdi mdi-linkedin"></a>
                </div>
                <div  >
                    <a href="#" class="mdi mdi-instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-10 section_4_flex">
        <div class="col-md-6 col-xl-6">
            <input  class="section_4__input col-xl-11" type="text" placeholder="NAME*">
            <input  class="section_4__input col-xl-11" type="text" placeholder="EMAIL*">
            <input  class="section_4__input col-xl-11" type="text" placeholder="PHONE">
            <input  class="section_4__input col-xl-11" type="text" placeholder="SUBJECT*">
            <input   class="section_4__input col-xl-11" type="text" placeholder="MESSAGE*">
            <div class="d-flex align-items-center justify-content-end">
                <div class="section_4__trace col-1 col-md-1 col-lg-1 col-xl-1"></div>
                <input class="section_4__submit col-4 col-md-3 col-lg-3 col-xl-3" type="submit" value="Submit">
            </div>
            
        </div>
        <div class="contact_me_off col-md-5 col-xl-6 d-flex justify-content-end">
            <div class="col-xl-11">
                @foreach($data as $key=>$collection)
                <div data-aos="fade-right"  data-aos-duration="2000" class="section_4__title_posisiton"> <h2 class="section_4__title_buttons"> {{$collection['title']}} </h2></div>
                    @foreach($collection['items'] as $item)
                        <div class="section_4__info">
                            @include('front.components.sections_components.section_4-components',[
                            'phone'=>$item['phone'],
                            'street'=>$item['street'],
                            ])
                        </div>
                    @endforeach
                @endforeach
                <div class="d-flex">
                    <div  >
                        <a href="#" class="mdi mdi-facebook"></a>
                    </div>
                    <div  >
                        <a href="#" class="mdi mdi-twitter"></a>
                    </div>
                    <div  >
                        <a href="#" class="mdi mdi-linkedin"></a>
                    </div>
                    <div  >
                        <a href="#" class="mdi mdi-instagram"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="made">
    <div>
        <h6 class="made-it col-12">Copryright 2020 @ Rui Pedro Gonçalves</h6>
        <h6 class="made-it col-12">Desenvolvido por 4POR4</h6>
    </div>
</div>