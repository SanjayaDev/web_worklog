<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserStatus;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $su_id = UserLevel::where("id", 1)->first()->level_id;
        $active_id = UserStatus::where("id", 1)->first()->user_status_id;

        User::create([
            "user_id" => Str::uuid(),
            "id" => 1,
            "name" => "admin",
            "email" => "rickysanjaya411@gmail.com",
            "password" => Hash::make("admin123!"),
            "level_id" => $su_id,
            "user_status_id" => $active_id,
        ]);
    }
}
