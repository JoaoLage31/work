<div class="col-xl-12 d-flex section_2">
    <div class="section_2__behind"></div>
    <div class="col-xl-2"></div>
    <div class="col-xl-6">
        @foreach($data as $key=>$collection)
        <div class="info_container col-xl-8 {{$key == 0 ? '' : 'none'}}" id="button{{$key}}">
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
        <h2 class="section_2__title_buttons">curriculum vitae</h2>
        @foreach($data as $key=>$collection)
        <button id="{{$key == 0 ? '' : 'none'}}"  class="btn {{$key == 0 ? 'active' : ''}}   slector-slick" data-target="#button{{$key}}"> {{$collection['name']}}</button>
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

     $('.slector-slick').on('click', function(){
      filterSelection(this);
     })
</script>
@endpush