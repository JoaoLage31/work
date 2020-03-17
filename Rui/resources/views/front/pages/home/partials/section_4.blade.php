<div data-aos="fade-left"  data-aos-duration="1000" class="section_4__behind"></div>
<div class="section_4 d-flex justify-content-center">
    <div class="col-xl-10 d-flex">
        <div class="col-xl-6">
            <input data-aos="fade-up"  data-aos-duration="1000" class="section_4__input col-xl-11" type="text" placeholder="NAME*">
            <input data-aos="fade-up"  data-aos-duration="1500" class="section_4__input col-xl-11" type="text" placeholder="EMAIL*">
            <input data-aos="fade-up"  data-aos-duration="2000" class="section_4__input col-xl-11" type="text" placeholder="PHONE">
            <input data-aos="fade-up"  data-aos-duration="2500" class="section_4__input col-xl-11" type="text" placeholder="SUBJECT*">
            <input data-aos="fade-up"  data-aos-duration="3000" class="section_4__input col-xl-11" type="text" placeholder="MESSAGE*">
            <div class="d-flex align-items-center justify-content-end">
                <div class="section_4__trace col-xl-1"></div>
                <input class="section_4__submit col-xl-3" type="submit" value="Submit">
            </div>
            
        </div>
        <div class="col-xl-6 d-flex justify-content-end">
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
                    <div data-aos="fade-up"  data-aos-duration="3000">
                        <a href="#" class="mdi mdi-facebook"></a>
                    </div>
                    <div data-aos="fade-up"  data-aos-duration="3000">
                        <a href="#" class="mdi mdi-twitter"></a>
                    </div>
                    <div data-aos="fade-up"  data-aos-duration="3000">
                        <a href="#" class="mdi mdi-linkedin"></a>
                    </div>
                    <div data-aos="fade-up"  data-aos-duration="3000">
                        <a href="#" class="mdi mdi-instagram"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>