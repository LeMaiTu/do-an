<div class="panel-body">
    <ol class="breadcrumb">
        @foreach($breadcrumbs as $title=>$link)
            @if(stristr($link,'index'))
                <li class="breadcrumb-item">
                    <a href="{{ route($link) }}">{{ __($title) }}</a>
                </li>
            @elseif(stristr($link,'auth'))
                <li class="breadcrumb-item">
                    <a href="{{ route($link) }}">{{ __($title) }}</a>
                </li>
            @elseif(stristr($link,'show'))
                <li class="breadcrumb-item">
                    <a href="{{ !empty($id) ? route($link,$id) : route($link) }}">{{ __($title) }}</a>
                </li>
            @elseif(!empty($link))
                <li class="breadcrumb-item">
                    <a href="{{ !empty($id) ? route($link,$id) : route($link) }}">{{ __($title) }}</a>
                </li>
            @else
                <li class="breadcrumb-item active">{{ __($title) }}</li>
            @endif
        @endforeach
    </ol>
</div>

