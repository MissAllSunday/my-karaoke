<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class HostController extends Controller
{
    private const KARAOKE_VIDEOS = [
        'https://www.youtube.com/watch?v=UvyIE8fivUw',
        'https://www.youtube.com/watch?v=ENwKjGXZ9-M',
        'https://www.youtube.com/watch?v=uVy91MBxNwE',
        'https://www.youtube.com/watch?v=SXAhh8WHnkg',
        'https://www.youtube.com/watch?v=gDuMOeYzSpM',
        'https://www.youtube.com/watch?v=0ZMGT2BTy1c',
    ];

    public function showLobby()
    {
        return view('host_lobby');
    }

    public function showGame()
    {
        return view('host_game', ['karaokeEmbed' => self::getRandomEmbed()]);
    }

    private static function getRandomEmbed(): string
    {
        $randomIndex = random_int(0, count(self::KARAOKE_VIDEOS) - 1);
        return self::getEmbedFromUrl(self::KARAOKE_VIDEOS[$randomIndex]);
    }

    private static function getEmbedFromUrl($url)
    {
        return preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe style=\"width: 100%; height: 500px; display: block\" src=\"//www.youtube.com/embed/$1?controls=0\" frameborder=\"0\" allowfullscreen></iframe>", $url);
    }
}
