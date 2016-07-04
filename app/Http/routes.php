<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'TeacherController@index');
Route::get('/new/{id}/{pass}', function ($id, $pass) {
        return view('custom_view', compact('id', 'pass'));
    }
);
Route::get('/test', function () {
$addnew = new App\Teacher;
$addnew->t_fname = 'Testststst';
$addnew->t_lname = 'watthefuck';
$addnew->save();
echo $addnew->teacher_id;
    }
);
Route::auth();

Route::get('/profile', 'TeacherController@index');
Route::get('/check', ['middleware' => ['auth', 'admin'], function () {
        return redirect('manage');
    }]
);

//Admin Routes
Route::group(['middleware' => ['auth', 'admin']], function () {

Route::resource('/photo', 'PhotoController');
  Route::get('/manage', 'AdminController@index');
  Route::post('/custom', 'CustomLoginController@authenticate');
   Route::get('/manageparttime', 'AdminController@partTime');
  Route::get('/profile/{id}', 'AdminController@profile_teacher');
  Route::get('/add', 'AdminController@add_new');
});