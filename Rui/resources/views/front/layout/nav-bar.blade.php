@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @foreach($item["images"] as $img)
            <nav class="nav" style="background-image: url({{($img)}}); ">
                <div class="col-xl-12 d-flex justify-content-end nav__position">
                    <div class="col-xl-5 nav__position__menu d-flex">
                        <div class="col-xl-9">
                            <div class="nav__position__menu__top d-flex justify-content-between">
                                <a class="menu__top" href="#">About</a>
                                <a class="menu__top"  href="#">About</a>
                                <a class="menu__top" href="#">About</a>
                                <a class="menu__top" href="#">About</a>
                        </div>

                        @include('front.components.nav-components',[
                            'title'=>$item['title'],
                            'description'=>$item['description'],
                            ])

                        
                        <div class="nav__position__menu__bottom d-flex">
                                <div class="col-xl-7 nav__position__menu__bottom__line"></div>
                                <div class="col-xl-5">
                                    <p class="menu__curriculum">curriculum Vitae </p>
                                </div>
                        </div>
                        </div>
                        <div>
                        
                        </div>
                    </div>
                    
                </div>
            </nav>
        @endforeach
    @endforeach
@endforeach