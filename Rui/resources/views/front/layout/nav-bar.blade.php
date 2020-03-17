@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @foreach($item["images"] as $img)
            <nav class="nav" style="background-image: url({{($img)}}); ">
                <div class="col-xl-12 d-flex justify-content-end nav__position">
                    <div class="col-xl-5 nav__position__menu d-flex justify-content-between">
                        <div class="col-xl-9">
                            <div class="nav__position__menu__top d-flex justify-content-between">
                                <a data-aos="fade-up"  data-aos-duration="1000" class="menu__top" href="#">About</a>
                                <a data-aos="fade-up"  data-aos-duration="1500" class="menu__top"  href="#">Skills</a>
                                <a  data-aos="fade-up"  data-aos-duration="2000" class="menu__top" href="#">Blog</a>
                                <a  data-aos="fade-up"  data-aos-duration="2500" class="menu__top" href="#">Contacts</a>
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
                        <div>
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
    $(document).scroll(function () {
        var $nav = $(".nav");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
</script>
@endpush