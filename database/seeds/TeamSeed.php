<?php

use Illuminate\Database\Seeder;

class TeamSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Golden State Warriors',],
            ['id' => 2, 'name' => 'Cleveland Cavaliers',],
            ['id' => 3, 'name' => 'Los Angeles Lakers',],

        ];

        foreach ($items as $item) {
            \App\Team::create($item);
        }
    }
}
