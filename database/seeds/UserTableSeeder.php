<?php

use App\League;
use Illuminate\Database\Seeder;

class LeagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(League::class)->times(faker()->numberBetween(10, 20))->create();
    }
}
