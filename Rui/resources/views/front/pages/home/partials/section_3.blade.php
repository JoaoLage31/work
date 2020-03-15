<div>
    <div class="section_3__behind"></div>
    <div class="section_3">
        @foreach($data as $key=>$collection)
            <div class="section_3__title_posisiton col-xl-3"> <h2 class="section_3__title_buttons"> {{$collection['title']}} </h2></div>
        @endforeach
        
        <div class="slider_01__arrows d-flex justify-content-end">
            <div class="col-xl-1">
                <div><img  class="next" src="{{URL::asset('front/media/svgs/setadireita.svg')}}" alt=""></div>
                <div><img  class="prev" src="{{URL::asset('front/media/svgs/setaesquerda.svg')}}" alt=""></div>
            </div>
        </div>
        <div  class="slider_01">
            @foreach($data as $key=>$collection)
                    @foreach($collection['items'] as $item)
                            <div class="individual">
                                @foreach($item["images"] as $img)
                                    <div class="img" style="background-image: url({{($img)}}); "></div>
                                @endforeach
                                <div class="slider_01__bottom">
                                    @include('front.components.sections_components.section_3-components',[
                                    'title'=>$item['title'],
                                    'date'=>$item['date'],
                                    ])
                                </div>
                                <button type="button"  data-toggle="modal" data-target="#exampleModal2" class="slider_01__bottom__add_info d-flex align-items-center">
                                    <div class="slider_01__bottom__add_info__line col-xl-2"></div>
                                    @include('front.components.sections_components.section_3-components',[
                                        'add_info'=>$item['add_info'],
                                        ])
                                </button>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@foreach($data as $key=>$collection)
  @foreach($collection['items'] as $item)
    <div class="modal fade" id="find" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-xl-5">
              @include('front.components.sections_components.section_3-components',[
                'full_title'=>$item['full_title'],
                ])
            </div>
            <div class="d-flex">
              <div class="col-xl-5">
                  @foreach($item["images"] as $img)
                    <div class="img" style="background-image: url({{($img)}}); "></div>
                  @endforeach
              </div>
              <div class="col-xl-4">
                @include('front.components.sections_components.section_3-components',[
                  'text_body'=>$item['text_body'],
                  ])
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endforeach
@push('scripts')
<script>

    var i=0;
    $('.slider_01__bottom__add_info').each(function(){
        i++;
        var newModal='#modal'+i;
        $(this).attr('data-target',newModal);
        $(this).val(i);
    });
    
    var j=0;
    $('.modal').each(function(){
        j++;
        var newModalOpen='modal'+j;
        $(this).attr('id',newModalOpen);
        $(this).val(j);
    });


    $('.slider_01').slick({
        centerMode: true,
        slidesToShow: 3.5,
        slidesToScroll:1,
        infinite:false,
        centerMode:false,
        arrows:true,
        prevArrow:$('.prev'),
        nextArrow:$('.next'),
    }); 

</script>

@endpush