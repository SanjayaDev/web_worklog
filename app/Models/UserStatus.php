<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    use HasFactory;

    protected $table = "user_status";
    protected $primaryKey = "user_status_id";
    protected $guarded = [];
    public $timeStamps = FALSE;
    public $incrementing = FALSE;

}
