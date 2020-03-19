<div class="col-xl-12 section_2">
    <div class="mobile-on col-xl-4">
        <h2 data-aos="fade-left"  data-aos-duration="2000" class="section_2__title_buttons">curriculum vitae</h2>
        @foreach($data as $key=>$collection)
        <button data-aos="fade-left"  data-aos-duration="2000" id="{{$key == 0 ? '' : 'none'}}"  class="btn {{$key == 0 ? 'active' : ''}}   slector-filter" data-target="#button{{$key}}"> {{$collection['name']}}</button>
        <br>
        @endforeach
    </div>
    <div id="sec_2" data-aos="fade-right"  data-aos-duration="2000" class="section_2__behind">
        <div class="section_2__behind_1"></div>
    </div>
    <div class="invisible col-lg-1 col-xl-2"></div>
    <div class="col-xl-6">
        @foreach($data as $key=>$collection)
        <div  class="info_container col-md-10 col-xl-8 {{$key == 0 ? '' : 'none'}}" id="button{{$key}}">
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

    <div class="mobile-off col-md-5 col-xl-4">
        <h2 data-aos="fade-left"  data-aos-duration="2000" class="section_2__title_buttons col-md-12">curriculum vitae</h2>
        @foreach($data as $key=>$collection)
        <button data-aos="fade-left"  data-aos-duration="2000" id="{{$key == 0 ? '' : 'none'}}"  class="btn {{$key == 0 ? 'active' : ''}}   slector-filter" data-target="#button{{$key}}"> {{$collection['name']}}</button>
        <br>
        @endforeach
    </div>
    
    
</div>
<div data-aos="fade-left"  data-aos-duration="2000" class="partilhar3 d-flex align-items-center">
    <div class="partilhar__buttons d-flex">
        <a  href="#">Download the CV</a>
      </div>
    <div class="line3"></div>
</div>



@push('scripts')
<script>
function filterSelection(el) {
      $('.btn').removeClass('active');    
      $('.info_container').addClass('none');
      $('.info_container').addClass('effect');
      var idContainer = $(el).attr("data-target");
      $(el).addClass('active');
      $(idContainer).removeClass('none');
      $('.info_container').removeClass('effect');
}

     $('.slector-filter').on('click', function(){
      filterSelection(this);
     })
</script>
@endpush