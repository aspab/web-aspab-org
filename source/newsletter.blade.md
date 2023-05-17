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
<x-newsletter file="{{ $current['file'] }}" current></x-newsletter>

## Previous Editions
<div class="flex">
@foreach ($nlttrs as $nlttr)
<x-newsletter file="{{ $nlttr['file'] }}"></x-newsletter>
@endforeach
</div>