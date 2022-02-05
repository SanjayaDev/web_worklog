<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class UserLevel extends Model
{
    use HasFactory;

    protected $primaryKey = "level_id";
    protected $guarded = [];
    public $incrementing = FALSE;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $uuid = Str::uuid();
                $check_exists = self::where("level_id", $uuid);
            } while($check_exists->count() > 0);

            $model->id = $model->max("id") + 1;
            $model->level_id = $uuid;
        });
    }
}
