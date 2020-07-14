<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    protected $table = 'login_histories';
    protected $primaryKey = 'id';
    protected $timestamp = true;

    protected $dates = [
        'logged_at', 'logged_out_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
