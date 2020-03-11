<div  class="home__text_section__parameters col-lg-12">
    <div class="home__text_section__parameters__individual ">
        @if(!empty($field__1))
            <p class="local-place">
                {{$field__1}}
            </p>
                @if($collection['id'] == '0')
                    <p class="title-place">Hóspedes</p>
                @endif
                @if($collection['id'] == '1')
                    <p class="title-place">Área</p>
                @endif
                @if($collection['id'] == '2')
                    <p class="title-place">Hóspedes</p>
                @endif
        @endif
    </div>
    
    <div class="span"></div>

    <div class="home__text_section__parameters__individual ">
        @if(!empty($field__2))
            <p class="local-place">
                {{$field__2}}
            </p>
        <p class="title-place">Quartos</p>
        <div class="span"></div>
        @endif
    </div>

    <div class="home__text_section__parameters__individual ">
        @if(!empty($field__3))
            <p class="local-place">
                {{$field__3}}
            </p>
        <p class="title-place">Banheiro</p>
        <div class="span"></div>
        @endif
    </div>

    <div class="home__text_section__parameters__individual ">
        @if(!empty($field__4))
            <p class="local-place">
                {{$field__4}}
            </p>
        <p class="title-place">Cozinha</p>
        @endif
    </div>
</div>



<div  class="home__text_section__parameters__extras d-flex flex-row bd-highlight mb-3">
    
    @if(!empty($inidvidual_field_1))
        @if($collection['id'] == '0')
            <p class="title-parameters">
                {{$inidvidual_field_1}}
            </p>
         @endif
         @if($collection['id'] == '1')
            <p class="title-parameters">
               <b> {{$inidvidual_field_1}} </b>
               Certificado
            </p>
         @endif
         @if($collection['id'] == '2')
         <p class="title-parameters">
             {{$inidvidual_field_1}}
         </p>
      @endif
        <div class="span2"></div>
    @endif



    @if(!empty($inidvidual_field_2))
    @if($collection['id'] == '0')
        <p class="title-parameters">
            {{$inidvidual_field_2}}
        </p>
     @endif
     @if($collection['id'] == '1')
        <p class="title-parameters">
           <b> {{$inidvidual_field_2}} </b>
           Área
        </p>
     @endif
     @if($collection['id'] == '2')
     <p class="title-parameters">
         {{$inidvidual_field_2}}
     </p>
  @endif
    <div class="span2"></div>
@endif



    
    
@if(!empty($inidvidual_field_3))
@if($collection['id'] == '0')
    <p class="title-parameters">
        {{$inidvidual_field_3}}
    </p>
 @endif
 @if($collection['id'] == '1')
    <p class="title-parameters">
       <b> {{$inidvidual_field_3}} </b>
       Tipologia
    </p>
 @endif
 @if($collection['id'] == '2')
 <p class="title-parameters">
     {{$inidvidual_field_3}}
 </p>
@endif
@endif
</div>


<div  class="home__text_section__bottom">
                        
    @if(!empty($deal))
    @if($collection['id'] == '0')
        <p class="home-descritpion">
            {{$deal}}
        </p>
    @endif
    @if($collection['id'] == '1')
        <p class="home-descritpion-buy">
            {{$deal}}
        </p>
    @endif
    @if($collection['id'] == '2')
        <p class="home-descritpion">
            {{$deal}}
        </p>
    @endif
    @endif

    
    @if(!empty($price))
        <div class="home__text_section__bottom__price">
        @if($collection['id'] == '0')
        <p class="home-descritpion">@lang('app.deal')</p>
        <b class="home-descritpion">
            {{$price}}
        </b>
        @endif
        @if($collection['id'] == '1')
        <b class="home-descritpion-buy">
            {{$price}}
        </b>
        @endif
        @if($collection['id'] == '2')
        <p class="home-descritpion">@lang('app.deal')</p>
        <b class="home-descritpion">
            {{$price}}
        </b>
        @endif
        </div>
    @endif
</div>


@if(!empty($images))
    {{$images}}
@endif