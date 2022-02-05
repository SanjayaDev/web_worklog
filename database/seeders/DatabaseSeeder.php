<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Database\Seeders\AssignmentStatusSeed::class,
            \Database\Seeders\UserStatusSeed::class,
            \Database\Seeders\ProjectsSeed::class,
            \Database\Seeders\UserLevelsSeed::class,
            \Database\Seeders\UsersSeed::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
