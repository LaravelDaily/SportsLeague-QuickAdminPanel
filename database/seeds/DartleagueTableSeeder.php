<?php

use App\Dartleague;
use Illuminate\Database\Seeder;

class DartleagueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Dartleague::class)->times(faker()->numberBetween(6, 10))->create();
    }
}
