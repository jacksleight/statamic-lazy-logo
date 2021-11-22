@php
$colors = config('statamic.lazy_logo.color');
if (!is_array($colors)) {
    $colors = [$colors];
}
$offset = count($colors) > 1 ? 100 / (count($colors) - 1) : 0;
$center = strpos(Request::server('HTTP_REFERER'), 'auth') !== false;
@endphp
<svg width="280" height="32" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <linearGradient id="fill" x1="0" x2="100%" y1="0" y2="0" gradientUnits="objectBoundingBox">
            @foreach ($colors as $i => $color)
                <stop stop-color="{{ $color }}" offset="{{ $offset * $i }}%"/>
            @endforeach
        </linearGradient>
    </defs>
    <style>
        #text {
            font-family: {{ config('statamic.lazy_logo.font_family') }};
            font-size: {{ config('statamic.lazy_logo.font_size') }};
            font-weight: {{ config('statamic.lazy_logo.font_weight') }};
        }
    </style>
    <text
        id="text"
        x="{{ $center ? '50%' : '0' }}"
        y="50%"
        dominant-baseline="central"
        baseline-shift="{{ config('statamic.lazy_logo.font_shift') }}"
        text-anchor="{{ $center ? 'middle' : 'start' }}"
        fill="url(#fill)">
        {{ config('statamic.lazy_logo.text') }}
    </text>
</svg>
