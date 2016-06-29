<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Teacher;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
    	$all_teacher = Teacher::where('teacher_type','FT')->get();
    	//return $all_teacher;
    	return view('admin.fulltime_list', compact('all_teacher'));
    }
      public function profile_teacher($id)
    {
    	$teacher = Teacher::find($id);
        return view('admin.profile', compact('teacher'));
    	
    }
     public function partTime()
    {
    	$all_teacher = Teacher::where('teacher_type','PT')->get();
    	//return $all_teacher;
    	return view('admin.fulltime_list', compact('all_teacher'));
    }
       public function add_new()
    {
    	return view('admin.addnew_f');
    	
    }
}
