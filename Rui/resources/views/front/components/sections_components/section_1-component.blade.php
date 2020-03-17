<div  class="section-1__title col-xl-7">
    @if(!empty($title))
        <h2 data-aos="fade-right" data-aos-duration="1000" class="section_1__title_text">
            {{$title}}
        </h2>
    @endif
</div>

<!-- DIV ABAIXO É FECHADA NO section_1-->
<div class="d-flex justify-content-between">
    <div class="section-1__description col-xl-4">
        @if(!empty($description_1))
            <p data-aos="fade-right" data-aos-duration="1000" class="section_1__description_text">
                {{$description_1}}
            </p>
        @endif
        @if(!empty($description_2))
            <p data-aos="fade-right" data-aos-duration="1500" class="section_1__description_text">
                {{$description_2}}
            </p>
        @endif
        @if(!empty($description_3))
            <p data-aos="fade-right" data-aos-duration="2000" class="section_1__description_text">
                {{$description_3}}
            </p>
        @endif
    </div>