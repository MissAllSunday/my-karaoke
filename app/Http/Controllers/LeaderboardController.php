<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class LeaderboardController extends Controller
{
    public function show()
    {
        $statistics = $this->getOrderedStatistics();
        $this->formatPoints($statistics);

        return view('leaderboard', [ 'statistics' => $statistics ]);
    }

    private function formatPoints(array &$statistics): void
    {
        foreach($statistics as &$user) {
            $user['points'] = number_format($user['points']);
        }
    }

    private function getOrderedStatistics(): array
    {
        $statistics = $this->getStatistics();
        usort(
            $statistics,
            function($a, $b) { return $a['points'] < $b['points']; }
        );

        return $statistics;
    }

    private function getStatistics(): array
    {
        // @todo Get statistics from firebase
        return [
            ['name' => 'Mich', 'points' => 0],
            ['name' => 'Emi', 'points' => 623423],
            ['name' => 'Mario', 'points' => 3],
            ['name' => 'Rafa', 'points' => 1],
        ];
    }
}
