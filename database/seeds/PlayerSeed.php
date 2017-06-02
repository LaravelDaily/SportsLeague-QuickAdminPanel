<?php

use Illuminate\Database\Seeder;

class PlayerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'team_id' => 1, 'name' => 'Kevin', 'surname' => 'Durant', 'birth_date' => '',],
            ['id' => 2, 'team_id' => 1, 'name' => 'Stephen', 'surname' => 'Curry', 'birth_date' => '',],

        ];

        foreach ($items as $item) {
            \App\Player::create($item);
        }
    }
}
