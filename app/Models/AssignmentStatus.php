<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class AssignmentStatus extends Model
{
    use HasFactory;
    protected $table = "assignment_status";
    protected $primaryKey = "assign_status_id";
    protected $guarded = [];
    public $incrementing = FALSE;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $uuid = Str::uuid();
                $check_exists = self::where("assign_status_id", $uuid);
            } while($check_exists->count() > 0);

            $model->id = $model->max("id") + 1;
            $model->assign_status_id = $uuid;
        });
    }
}
