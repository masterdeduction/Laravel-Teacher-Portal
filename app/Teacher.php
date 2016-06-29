<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	public $timestamps = false;
    protected $table = 'cl_teacher';
    protected $primaryKey = 'teacher_id';
    protected $dates = ['dob','visa_expiry'];
    protected $fillable = ['t_fname', 't_lname'];
}
