

<div class="nav__position__menu__middle">
        @if(!empty($title))
            <h1 class="big-title">
                {{$title}}
            </h1>
        @endif
        @if(!empty($description))
            <p class="small-title">
                {{$description}}
            </p>
        @endif
</div>

@if(!empty($images))
    {{$images}}
@endif