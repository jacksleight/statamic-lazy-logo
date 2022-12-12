@php
use Statamic\Support\Arr;
@endphp

<svg width="280" height="32" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="fill" x1="0" x2="100%" y1="0" y2="0" gradientUnits="objectBoundingBox">
            @php
            $color = Arr::wrap($params['color']);
            $offset = count($color) > 1 ? 100 / (count($color) - 1) : 0;
            @endphp
            @foreach ($color as $i => $c)
                <stop stop-color="{{ $c }}" offset="{{ $offset * $i }}%"/>
            @endforeach
        </linearGradient>
    </defs>
    <text
        x="{{ $params['anchor'] === 'middle' ? '50%' : '0' }}"
        y="50%"
        dominant-baseline="central"
        baseline-shift="{{ $params['font_shift'] }}"
        text-anchor="{{ $params['anchor'] }}"
        fill="url(#fill)"
        style="
            font-family: {{ $params['font_family'] }};
            font-size: {{ $params['font_size'] }};
            font-weight: {{ $params['font_weight'] }};
        ">
        {{ $params['text'] }}
    </text>
</svg>
