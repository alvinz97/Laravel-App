<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginHistory extends Model
{
    protected $table = 'login_histories';

    protected $fillable = ['user_id', 'logged_at', 'logged_out_at'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
