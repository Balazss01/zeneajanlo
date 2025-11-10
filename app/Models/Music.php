<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{

     public static function getmusic()
    {
        return [
            1 => [
                'title' => 'Back in Black',
                'artist' => 'AC/DC',
                'year' => 1980,
                'genre' => 'rock',
                'description' => 'A klasszikus hard rock album.',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/92/ACDC_Back_in_Black.png'
            ],
            2 => [
                'title' => 'Thriller',
                'artist' => 'Michael Jackson',
                'year' => 1982,
                'genre' => 'pop',
                'description' => 'Minden idők legnagyobb példányszámú albuma.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/5/55/Michael_Jackson_-_Thriller.png'
            ],
            3 => [
                'title' => 'Kind of Blue',
                'artist' => 'Miles Davis',
                'year' => 1959,
                'genre' => 'jazz',
                'description' => 'A jazz egyik legikonikusabb lemeze.',
                'image' => 'https://cdn-p.smehost.net/sites/c5d2b1a28fd246bfafed3b8dbafc1352/wp-content/uploads/2021/05/cover-46.jpg'
            ],
            4 => [
                'title' => 'The Dark Side of the Moon',
                'artist' => 'Pink Floyd',
                'year' => 1973,
                'genre' => 'rock',
                'description' => 'A konceptalbum, amely megváltoztatta a rockzenét.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Dark_Side_of_the_Moon.png'
            ],
            5 => [
                'title' => 'Abbey Road',
                'artist' => 'The Beatles',
                'year' => 1969,
                'genre' => 'rock',
                'description' => 'A Beatles legendás búcsúalbuma, ikonikus borítóval.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/4/42/Beatles_-_Abbey_Road.jpg'
            ],
            6 => [
                'title' => 'Nevermind',
                'artist' => 'Nirvana',
                'year' => 1991,
                'genre' => 'grunge',
                'description' => 'Az album, amely a grunge mozgalmat világhírűvé tette.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/b/b7/NirvanaNevermindalbumcover.jpg'
            ],
            7 => [
                'title' => 'Rumours',
                'artist' => 'Fleetwood Mac',
                'year' => 1977,
                'genre' => 'rock',
                'description' => 'Személyes drámákból született klasszikus mestermű.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/f/fb/FMacRumours.PNG'
            ],
            8 => [
                'title' => 'The Wall',
                'artist' => 'Pink Floyd',
                'year' => 1979,
                'genre' => 'rock',
                'description' => 'Egy epikus konceptalbum az elidegenedésről és a hírnévről.',
                'image' => 'https://i.scdn.co/image/ab67616d00001e02cbf8b2cd89b54a021db51e75'
            ],
            9 => [
                'title' => 'Hotel California',
                'artist' => 'Eagles',
                'year' => 1976,
                'genre' => 'rock',
                'description' => 'A 70-es évek egyik legnagyobb klasszikusa.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/4/49/Hotelcalifornia.jpg'
            ],
            10 => [
                'title' => 'Born to Run',
                'artist' => 'Bruce Springsteen',
                'year' => 1975,
                'genre' => 'rock',
                'description' => 'Az amerikai álom himnusza és Springsteen áttörése.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn9cv1XCnhDSsgdpb1qCrlywmE8dUHYv3Xbg&s'
            ],
            11 => [
                'title' => 'OK Computer',
                'artist' => 'Radiohead',
                'year' => 1997,
                'genre' => 'rock',
                'description' => 'Egy futurisztikus mestermű a modern elidegenedésről.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRO5vWyVeeXYnw4ik9OiJvE6RA4QmPyJ_vxg&s'
            ],
            12 => [
                'title' => '21',
                'artist' => 'Adele',
                'year' => 2011,
                'genre' => 'pop',
                'description' => 'Adele szívszaggató soul-pop albuma, ami világhírűvé tette.',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/1/1b/Adele_-_21.png'
            ]

        ];
    }
}
