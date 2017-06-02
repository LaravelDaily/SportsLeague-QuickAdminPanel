<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(TeamSeed::class);
        $this->call(GameSeed::class);
        $this->call(PlayerSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);

    }
}
