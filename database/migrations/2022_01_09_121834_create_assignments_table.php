<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->uuid("assign_id")->primary();
            $table->uuid("user_id");
            $table->uuid("project_id");
            $table->integer("assign_status_id")->index();
            $table->string("assignment_title", 200);
            $table->text("description")->nullable();
            $table->text("reject_note")->nullable();
            $table->date("show_date");
            $table->date("deadline_date");
            $table->date("finish_date")->nullable();
            $table->uuid("user_created")->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("user_id")->references("user_id")->on("users")->onUpdate("CASCADE")->onUpdate("RESTRICT");
            $table->foreign("project_id")->references("project_id")->on("projects")->onUpdate("CASCADE")->onUpdate("RESTRICT");
            // $table->foreign("assign_status_id")->references("assign_status_id")->on("assignment_status")->onUpdate("CASCADE")->onUpdate("RESTRICT");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_assignments');
    }
}
