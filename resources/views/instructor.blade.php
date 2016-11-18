<h1>{{$instruc->first_name}}'s Sections</h1>

@php
$myvar = $instruc->sectionz

@endphp

 @foreach ($myvar as $i)
    <h3>{{ $i->name}}</h3>
@endforeach

{{-- <h3>{{$instruc->sectionz}}</h3> --}}
