@props(['href', 'img', 'current' => false])

<div class="flex {{ $current ? 'w-full' : 'w-1/4' }} px-2">
<a href="{{ $href }}"><img src="{{ $img }}" class="{{ $current ? 'w-80' : 'w-40'  }}"></a>
</div>
