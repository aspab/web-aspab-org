@props(['file', 'current' => false])
@php
	$img_src = 'assets/files/newsletters/' . $file . '_cover.png';
	$file_src = 'assets/files/newsletters/' . $file . '.pdf';
@endphp

<div class="flex {{ $current ? 'w-full' : 'w-1/4' }} px-2">
<a href="{{ $file_src }}"><img src="{{ $img_src }}" class="{{ $current ? 'w-80' : 'w-40'  }}"></a>
</div>