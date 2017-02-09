<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Task extends Model
{
    protected $fillable = ['user_name', 'cus_id', 'cus_tel', 'call_date', 'call_why', 'call_ok', 'call_bak'];

    protected $casts = [
        'user_id' => 'int',
    ];

    public function belongsToUser()
    {
        return $this->belongsTo(User::class);
    }
}
