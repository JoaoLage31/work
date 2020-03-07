
    <div class="content ">
        @if(!empty($number))
        <p class="variant-1">
            {{$number}}
        </p>
        @endif
        @if(!empty($title))
            <p class="title-parameters__variant-1">
                {{$title}}
            </p>
        @endif
        @if(!empty($description))
            <p class="title-parameters__variant-3">
                {{$description}}
            </p>
        @endif
    </div> 