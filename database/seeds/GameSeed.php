<?php

use Illuminate\Database\Seeder;

class GameSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team1_id' => 1, 'team2_id' => 2, 'start_time' => '2017-06-01 15:00:00', 'result1' => 80, 'result2' => 90,],
            ['id' => 2, 'team1_id' => 2, 'team2_id' => 1, 'start_time' => '2017-06-06 13:00:00', 'result1' => null, 'result2' => null,],

        ];

        foreach ($items as $item) {
            \App\Game::create($item);
        }
    }
}
