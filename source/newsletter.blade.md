---
extends: _layouts.main
section: body
---
@php
$nlttrs = [
	["file" => "Newsletter_2022-1"],
	["file" => "Newsletter_2021-2"],
	["file" => "Newsletter_2021-1"],
	["file" => "Newsletter_2020-2"],
	["file" => "Newsletter_2020-1"],
];
$current = array_shift($nlttrs);
@endphp
# Newsletter

## Current Edition
<x-newsletter 
	href="{{ trim($page->baseUrl, '/') . '/assets/files/newsletters/' . $current['file'] . '.pdf' }}" 
	img="{{ trim($page->baseUrl, '/') . '/assets/files/newsletters/' . $current['file'] . '_cover.png' }}" current></x-newsletter>

## Previous Editions
<div class="flex">
@foreach ($nlttrs as $nlttr)
<x-newsletter 
	href="{{ trim($page->baseUrl, '/') . '/assets/files/newsletters/' . $nlttr['file'] . '.pdf' }}" 
	img="{{ trim($page->baseUrl, '/') . '/assets/files/newsletters/' . $nlttr['file'] . '_cover.png' }}"></x-newsletter>
@endforeach
</div>