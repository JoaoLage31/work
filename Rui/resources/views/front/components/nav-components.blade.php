

<div class="nav__position__menu__middle col-12 col-md-12 col-lg-8 col-xl-12">
        @if(!empty($title))
            <h1 data-aos="fade-left"  data-aos-duration="1000" class="big-title">
                {{$title}}
            </h1>
        @endif
        @if(!empty($description))
            <p data-aos="fade-left"  data-aos-duration="2000" class="small-title">
                {{$description}}
            </p>
        @endif
</div>

@if(!empty($images))
    {{$images}}
@endif