@extends('layout')

@section('content')

<style>
    img
    {
        width: 300px;
        height: 300px;
        border: 10px black;
        border-radius: 10%
    }
    .responsive {
    width: 80%;
    height: auto;
    }
    img
    {
        height: 200px;
        width: 200px;
    }

</style>
<ul>
    <li>{{ $music['title'] }}</li>
    <li>({{ $music['artist'] }})</li>
    <li>{{ $music['year'] }}</li>
    <li>{{ $music['genre'] }}</li>
    <li>{{ $music['description'] }}</li>
    <img class="responsive" src="{{ $music['image'] }}">
</ul>
<a href="{{route('music.index')}}">Főoldal</a>
@if($prev)
    <a href="{{ route('music.show', $prev) }}">Előző Zene</a>
@else

@endif

@if($next)
    <a href="{{ route('music.show', $next) }}">Következő Zene</a>
@else

@endif
@if(!empty($similar))
    <h3>Hasonló műfajú zenék</h3>
    <div class="similar-grid">
        @foreach($similar as $k => $s)
            <div class="similar-item">
                <a href="{{ route('music.show', ['id' => $k]) }}">
                    <img src="{{ $s['image'] }}" alt="{{ $s['title'] }}">
                    <div><strong>{{ $s['title'] }}</strong></div>
                    <div>{{ $s['artist'] }}</div>
                </a>
            </div>
        @endforeach
    </div>
@endif
@endsection
