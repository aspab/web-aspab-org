@php
    $prts = explode('@', $slot);
@endphp
<span>{{ $prts[0] }}@<span style="display:none">.HOPEFULLY.HIDDEN</span>{{ $prts[1] }}</span>