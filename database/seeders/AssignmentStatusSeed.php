<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AssignmentStatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignment_status')->insert([
            [
                "assign_status_id" => 1,
                "assign_status" => "Created"
            ],
            [
                "assign_status_id" => 2,
                "assign_status" => "Submit"
            ],
            [
                "assign_status_id" => 3,
                "assign_status" => "Accept"
            ],
            [
                "assign_status_id" => 4,
                "assign_status" => "Finish"
            ],
            [
                "assign_status_id" => 5,
                "assign_status" => "Reject"
            ],
            [
                "assign_status_id" => 6,
                "assign_status" => "Cancel"
            ],
        ]);
    }
}
