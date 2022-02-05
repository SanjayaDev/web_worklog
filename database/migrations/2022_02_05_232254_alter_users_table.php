<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema Alter Table Users
        Schema::table('users', function (Blueprint $table) {
            $table->uuid("level_id");
            $table->uuid("user_status_id");

            $table->foreign("user_status_id")->on("user_status")->references("user_status_id")->onDelete("RESTRICT")->onUpdate("CASCADE");
            $table->foreign("level_id")->on("user_levels")->references("level_id")->onDelete("RESTRICT")->onUpdate("CASCADE");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
