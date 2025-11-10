<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class MusicController extends Controller
{

    public function index()
    {
        $musics = Music::getmusic();
        $categories = collect($musics)->pluck('genre')->unique()->values()->all();

        $key = array_rand($musics);
        $random = $musics[$key];

        return view('Music.index', [
            'music' => $random,
            'music_id' => $key,
            'musics' => $musics,
            'categories' => $categories,
        ]);
    }

    public function genre($genre)
    {
        $musics = Music::getmusic();
        $filtered = array_filter($musics, fn($m) => isset($m['genre']) && $m['genre'] === $genre);

        return view('Music.index', [
            'musics' => $filtered,
            'categories' => collect($musics)->pluck('genre')->unique()->values()->all(),
        ]);
    }

    public function show(int $id)
    {
        $musics = Music::getmusic();

        if (!isset($musics[$id])) {
            abort(404, "Invalid music id: $id");
        }

        $music = $musics[$id];

        $ids = array_keys($musics);
        $min = min($ids);
        $max = max($ids);

        $prev = ($id <= $min) ? $max : $id - 1;
        $next = ($id >= $max) ? $min : $id + 1;

        $similar = collect($musics)
            ->except([$id])
            ->where('genre', $music['genre'] ?? null)
            ->take(5)
            ->all();

        return view('music.show', compact('music', 'id', 'prev', 'next','similar'));
    }
}
