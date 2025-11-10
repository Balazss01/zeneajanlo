@extends('layout')

@section('content')
@php
    $music = $music ?? null;
    $musics = $musics ?? [];
    $categories = $categories ?? [];
    $music_id = $music_id ?? null;
@endphp

<h1 style="font-size:50px">Zenei albumajánló</h1>
<h4 style="font-size:25px">"Zene nélkül mit érek én"</h4>

<nav>
    <strong>Műfajok:</strong>
    <a href="{{ route('music.index') }}">Főoldal</a>
    @foreach($categories as $gen)
        | <a href="{{ route('music.genre', ['genre' => $gen]) }}">{{ $gen }}</a>
    @endforeach
</nav>

<br>


@if($music)
    <h2>{{ $music['title'] }}</h2>
    <p>{{ $music['artist'] }} ({{ $music['year'] }})</p>
    <a href="{{ route('music.show', ['id' => $music_id]) }}">
        <img src="{{ $music['image'] }}"  width="120" alt="{{ $music['title'] }}">
    </a>
    <p>{{ $music['description'] }}</p>
@else
    <ul>
        @foreach($musics as $id => $m)
            <li>
                <b><a href="{{ route('music.show', ['id' => $id]) }}">{{ $m['title'] }}</a></b> — {{ $m['artist'] }} ({{ $m['year'] }})<br>
                <a href="{{ route('music.show', ['id' => $id]) }}">
                    <img src="{{ $m['image'] }}"  width="80" alt="{{ $m['title'] }}"><br>
                </a>
                <div>{{ $m['description'] }}</div>
            </li>
        @endforeach
    </ul>
@endif
@endsection

