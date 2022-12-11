@php
use Statamic\Support\Arr;
@endphp

@if ($params['outside']['background'])
    @php    
    $background = Arr::wrap($params['outside']['background']);
    @endphp
    .outside.lazy-logo-theme {
        background: {{ $background[0] }};
        background: linear-gradient(45deg, {{ implode(', ', $background) }});
    }
@endif
