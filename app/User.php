<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'cl_teacher_user';
    protected $primaryKey = 'teacher_id';

    protected $fillable = [
         'teacher_id', 'password',
    ];

    /**
     * The attributes that should be hidden for arr"--level": "psr2"ays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }
    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }

    
}
