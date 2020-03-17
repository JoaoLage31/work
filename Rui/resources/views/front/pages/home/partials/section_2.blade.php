<div class="col-xl-12 d-flex section_2">
    <div data-aos="fade-left"  data-aos-duration="2000" class="section_2__behind">
        <div class="section_2__behind_1"></div>
        <div data-aos="fade-left"  data-aos-duration="2000" class="partilhar3 d-flex align-items-center">
            <div class="partilhar__buttons d-flex">
                <a  href="">Download the CV</a>
              </div>
            <div class="line3"></div>
        </div>
    </div>
    <div class="col-xl-2"></div>
    <div class="col-xl-6">
        @foreach($data as $key=>$collection)
        <div  class="info_container col-xl-8 {{$key == 0 ? '' : 'none'}}" id="button{{$key}}">
                @foreach($collection['items'] as $item)
                                @include('front.components.sections_components.section_2-components',[
                                'field_date_1'=>$item['field_date_1'],
                                'field_title_1'=>$item['field_title_1'],
                                'field_description_1'=>$item['field_description_1'],
                                ])
                @endforeach
        </div>
        @endforeach
    </div>

    <div class="col-xl-4">
        <h2 data-aos="fade-left"  data-aos-duration="2000" class="section_2__title_buttons">curriculum vitae</h2>
        @foreach($data as $key=>$collection)
        <button data-aos="fade-left"  data-aos-duration="2000" id="{{$key == 0 ? '' : 'none'}}"  class="btn {{$key == 0 ? 'active' : ''}}   slector-filter" data-target="#button{{$key}}"> {{$collection['name']}}</button>
        <br>
        @endforeach
    </div>
    
</div>




@push('scripts')
<script>
function filterSelection(el) {
      $('.btn').removeClass('active');    
      $('.info_container').addClass('none');
      var idContainer = $(el).attr("data-target");
      $(el).addClass('active');
      $(idContainer).removeClass('none');
}

     $('.slector-filter').on('click', function(){
      filterSelection(this);
     })
</script>
@endpush