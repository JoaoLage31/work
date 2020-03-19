@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @foreach($item["images"] as $img)
            <nav  class="nav" style="background-image: url({{($img)}}); ">
                <div class="col-xl-12  nav__position">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-6 nav__position__menu">
                        <div class="col-12 col-md-10 col-lg-6 col-xl-9">
                            <div class="nav__position__menu__top d-flex justify-content-between col-10 col-md-6 col-lg-4 col-xl-4">
                                <a data-aos="zoom-in"  data-aos-duration="1000" class="menu__top" href="#sec_1">About</a>
                                <a data-aos="zoom-in"  data-aos-duration="1500" class="menu__top"  href="#sec_2">Skills</a>
                                <a  data-aos="zoom-in"  data-aos-duration="2000" class="menu__top" href="#sec_3">Blog</a>
                                <a  data-aos="zoom-in"  data-aos-duration="2500" class="menu__top" href="#sec_4">Contacts</a>
                            </div>

                        @include('front.components.nav-components',[
                            'title'=>$item['title'],
                            'description'=>$item['description'],
                            ])

                        
                        <div  class="nav__position__menu__bottom d-flex">
                                <div class="col-xl-7 nav__position__menu__bottom__line"></div>
                                <div class="col-xl-5">
                                    <p data-aos="fade-left"  data-aos-duration="2000" class="menu__curriculum">curriculum Vitae </p>
                                </div>
                        </div>
                        </div>
                        <div class="mdi__position">
                            <div >
                                <a href="#" class="mdi mdi-facebook mdi-nav"></a>
                            </div>
                            <div >
                                <a href="#" class="mdi mdi-twitter mdi-nav"></a>
                            </div>
                            <div >
                                <a href="#" class="mdi mdi-linkedin mdi-nav"></a>
                            </div>
                            <div >
                                <a href="#" class="mdi mdi-instagram mdi-nav"></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>
        @endforeach
    @endforeach
@endforeach

@push('scripts')
<script>
    $(function () {
        $(".nav").addClass("GoFull");
    $(document).scroll(function () {
        var $nav = $(".nav");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});

$(".menu__top").click(function(e) {
    e.preventDefault();
    var aid = $(this).attr("href");
    $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
});

</script>
@endpush