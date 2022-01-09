<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $guarded = [];
    protected $primaryKey = "user_id";
    public $incrementing = FALSE;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $uuid = Str::uuid();
                $check_exists = self::where("user_id", $uuid);
            } while($check_exists->count() > 0);

            $model->id = $model->max("id") + 1;
            $model->user_id = $uuid;
        });
    }

    public function user_status()
    {
        return $this->hasOne("\App\Models\UserStatus", "user_status_id", "user_status_id");
    }
}
