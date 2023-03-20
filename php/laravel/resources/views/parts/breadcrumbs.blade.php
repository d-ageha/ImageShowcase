@unless ($breadcrumbs->isEmpty())
    <ol class="breadcrumb pure-g">
        @foreach ($breadcrumbs as $breadcrumb)

            @if (!is_null($breadcrumb->url) && !$loop->last)
                <li class="breadcrumb-item pure-u"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active pure-u">{{ $breadcrumb->title }}</li>
            @endif
            @if(!$loop->last)
                <div>></div> 
            @endif
        @endforeach
    </ol>
@endunless