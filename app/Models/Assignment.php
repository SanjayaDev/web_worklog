<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Assignment extends Model
{
    use HasFactory;
    protected $primaryKey = "assign_id";
    protected $guarded = [];
    public $incrementing = FALSE;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $uuid = Str::uuid();
                $check_exists = self::where("assign_id", $uuid);
            } while($check_exists->count() > 0);

            // $model->id = $model->max("id") + 1;
            $model->assign_id = $uuid;
        });
    }

    public function project()
    {
        return $this->hasOne("App\Models\Project", "project_id", "project_id");
    }

    public function assignment_status()
    {
        return $this->hasOne("App\Models\AssignmentStatus", "assign_status_id", "assign_status_id");
    }

    public function user_create()
    {
        return $this->hasOne("App\Models\User", "user_id", "user_created");
    }
}
