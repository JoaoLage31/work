@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @foreach($item["images"] as $img)
            <div class="d-flex justify-content-center">
                <div class="col-xl-10 section-1">
                    @include('front.components.sections_components.section_1-component',[
                            'title'=>$item['title'],
                            'description_1'=>$item['description_1'],
                            'description_2'=>$item['description_2'],
                            'description_3'=>$item['description_3'],
                                ])
                        <div class="col-xl-5 section-1__img" style="background-image: url({{($img)}});">
                        </div>
                        <!--AQUI EM BAIXO-->
                    </div>
                </div>
                <div class="section-1__behind"></div>
            </div>
        @endforeach
    @endforeach
@endforeach