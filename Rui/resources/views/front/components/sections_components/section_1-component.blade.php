<div  class="section-1__title col-md-5  col-xl-7 col-12">
    <div>
        @if(!empty($title))
        <h2 data-aos="fade-right" data-aos-duration="1000" class="section_1__title_text ">
            {{$title}}
        </h2>
    @endif
    </div>
</div>

<!-- DIV ABAIXO É FECHADA NO section_1-->
<div  data-aos="fade-right" data-aos-duration="2000" class="box">
    <div class="section-1__description col-md-5 col-xl-4 col-12">
        @if(!empty($description_1))
            <p class="section_1__description_text ">
                {{$description_1}}
            </p>
        @endif
        @if(!empty($description_2))
            <p class="section_1__description_text ">
                {{$description_2}}
            </p>
        @endif
        @if(!empty($description_3))
            <p class="section_1__description_text ">
                {{$description_3}}
            </p>
        @endif
    </div>