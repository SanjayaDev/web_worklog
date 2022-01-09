<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("user_status")->insert([
            [
                "user_status_id" => Str::uuid(),
                "id" => 1,
                "user_status" => "Active",
            ],
            [
                "user_status_id" => Str::uuid(),
                "id" => 2,
                "user_status" => "Inactive",
            ],
        ]);
    }
}
