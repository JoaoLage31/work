@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @foreach($item["images"] as $img)
            <div class="d-flex justify-content-center">
                <div id="sec_1" class="col-xl-10 section-1">
                    @include('front.components.sections_components.section_1-component',[
                            'title'=>$item['title'],
                            'description_1'=>$item['description_1'],
                            'description_2'=>$item['description_2'],
                            'description_3'=>$item['description_3'],
                                ])
                        <div data-aos="fade-up" data-aos-duration="3000" class="col-md-6 col-xl-5 section-1__img" style="background-image: url({{($img)}});">
                        </div>
                        <!--AQUI EM BAIXO-->
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-duration="1500" class="section-1__behind"></div>
            </div>
        @endforeach
    @endforeach
@endforeach
<div data-aos="fade-right" data-aos-duration="1500" class="partilhar2 d-flex align-items-center">
    <div class="line2"></div>
    <div class="partilhar__buttons d-flex">
        <a  href="">Get In Touch</a>
    </div>
  </div>

  @push('scripts')

  <script>
        // filterSelection("Rent");
        AOS.init({
        })

  </script>


@endpush