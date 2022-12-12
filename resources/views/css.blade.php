@php
use Statamic\Support\Arr;
@endphp

@if ($params['outside']['background'])
    @php    
    $background = Arr::wrap($params['outside']['background']);
    @endphp
    .outside.lazy-logo-theme {
        background-color: {{ $background[0] }};
        background-image: linear-gradient(45deg, {{ implode(', ', $background) }});
    }
@endif
