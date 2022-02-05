<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserLevel;

class UserLevelsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLevel::create([
            "id" => 1,
            "level_name" => "Super Admin"
        ]);

        UserLevel::create([
            "id" => 2,
            "level_name" => "Staff"
        ]);
    }
}
