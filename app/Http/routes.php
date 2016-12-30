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
Route::get('/',['middleware' => ['guest'], 'uses' => 'HomeController@start']);
Route::get('/job-post',['middleware' => ['guest'], 'uses' => 'HomeController@jobPost']);
//..................................... Home ..........................................
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@index');

});
///////////////////////////////////////////////////////////////////////

Route::get('/messages/create','MessageController@create');
Route::post('/messages','MessageController@store');

//////////////////////////////////////////
Route::get('/notices', 'NoticeController@show');
//........................................Leave ........................................
Route::get('/applications', 'ApplicationController@index');
Route::get('/applications/create', 'ApplicationController@create');
Route::post('/applications', 'ApplicationController@store');






//.......................................................................................
//Route::group(['middleware' => ['auth','admin']], function () {
//...................................... Employees .....................................
    Route::get('admin/employees', 'EmployeeController@index');
    Route::get('admin/employees/create', 'EmployeeController@create');
    Route::post('admin/employees', 'EmployeeController@store');
    Route::get('admin/employees/{id}/edit', 'EmployeeController@edit');
    Route::patch('admin/employees/{id}', 'EmployeeController@update');
    Route::get('admin/employees/{id}', 'EmployeeController@delete');
    Route::get('admin/employees/active/{id}', 'EmployeeController@active');
    Route::get('admin/employees/pending/{id}', 'EmployeeController@pending');
    Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'EmployeeController@myformAjax'));


//.......................................................................................
//...................................... Promotion ......................................
    Route::get('admin/promotions', 'PromotionController@index');
    Route::get('admin/promotions/create', 'PromotionController@create');
    Route::post('admin/promotions', 'PromotionController@store');
    Route::get('admin/promotions/{id}/edit', 'PromotionController@edit');
    Route::patch('admin/promotions/{id}', 'PromotionController@update');
    Route::get('admin/promotions/{id}', 'PromotionController@delete');

//.......................................................................................

//...................................... Transfer .......................................
    Route::get('admin/transfers', 'TransferController@index');
    Route::get('admin/transfers/create', 'TransferController@create');
    Route::post('admin/transfers', 'TransferController@store');
    Route::get('admin/transfers/{id}/edit', 'TransferController@edit');
    Route::patch('admin/transfers/{id}', 'TransferController@update');
    Route::get('admin/transfers/{id}', 'TransferController@delete');

//.......................................................................................

//...................................... Suspension .....................................
    Route::get('admin/suspensions', 'SuspensionController@index');
    Route::get('admin/suspensions/create', 'SuspensionController@create');
    Route::post('admin/suspensions', 'SuspensionController@store');
    Route::get('admin/suspensions/{id}/edit', 'SuspensionController@edit');
    Route::patch('admin/suspensions/{id}', 'SuspensionController@update');
    Route::get('admin/suspensions/{id}', 'SuspensionController@delete');

//.......................................................................................
//......................................Retirement.......................................
    Route::get('admin/retirements', 'RetirementController@index');
    Route::get('admin/retirements/create', 'RetirementController@create');
    Route::post('admin/retirements', 'RetirementController@store');
    Route::get('admin/retirements/{id}/edit', 'RetirementController@edit');
    Route::patch('admin/retirements/{id}', 'RetirementController@update');
    Route::get('admin/retirements/{id}', 'RetirementController@delete');

//........................................................................................

//......................................notices...........................................
    Route::get('admin/notices', 'NoticeController@index');
    Route::get('admin/notices/create', 'NoticeController@create');
    Route::post('admin/notices', 'NoticeController@store');
    Route::get('admin/notices/{id}/edit', 'NoticeController@edit');
    Route::patch('admin/notices/{id}', 'NoticeController@update');
    Route::get('admin/notices/{id}', 'NoticeController@delete');

//........................................................................................
//......................................jobs...........................................
    Route::get('admin/jobs', 'JobController@index');
    Route::get('admin/jobs/create', 'JobController@create');
    Route::post('admin/jobs', 'JobController@store');
    Route::get('admin/jobs/{id}/edit', 'JobController@edit');
    Route::patch('admin/jobs/{id}', 'JobController@update');
    Route::get('admin/jobs/{id}', 'JobController@delete');

//..................................leave......................................................
    Route::get('admin/leaves', 'LeaveController@index');
    Route::get('admin/leaves/create', 'LeaveController@create');
    Route::post('admin/leaves', 'LeaveController@store');
    Route::get('admin/leaves/{id}', 'LeaveController@delete');
    Route::get('/applications/active/{id}', 'ApplicationController@active');

//...................................Deshboard..................................................

    Route::get('admin/dashboard', 'DashboardController@index');
    Route::post('admin/dashboard/notice', 'DashboardController@store');
//...................................Admin Setting ............................................
    Route::get('admin/settings/edit', 'SettingController@edit');
    Route::post('admin/settings/updatedetail', 'SettingController@updateDetail');
    Route::post('admin/settings/updatepassword', 'SettingController@updatePassword');
//..............................................................................................

    Route::get('admin/settings/user/edit', 'SettingController@userEdit');
    Route::post('admin/settings/user/updatedetail', 'SettingController@updateUserDetail');
    Route::post('admin/settings/user/updatepassword', 'SettingController@updateuserPassword');

//......................................messages................................................

    Route::get('admin/messages', 'MessageController@index');

//--------------------------------------Department ---------------------------------------------

Route::get('admin/departments', 'DepartmentController@index');

Route::get('admin/departments/create', 'DepartmentController@create');
Route::post('admin/departments', 'DepartmentController@store');
Route::get('admin/departments/{id}/edit', 'DepartmentController@edit');
Route::patch('admin/departments/{id}', 'DepartmentController@update');
Route::get('admin/departments/{id}', 'DepartmentController@delete');


//--------------------------------------designations ---------------------------------------------

Route::get('admin/designations', 'DesignationController@index');
Route::get('admin/designations/create', 'DesignationController@create');
Route::post('admin/designations', 'DesignationController@store');
Route::get('admin/designations/{id}/edit', 'DesignationController@edit');
Route::patch('admin/designations/{id}', 'DesignationController@update');
Route::get('admin/designations/{id}', 'DesignationController@delete');

//Route::auth();
//});
//login ---------------------------------------
///Route::get('/login', ['uses' => 'AuthController@getLogin', 'middleware' => ['guest']]);
Route::post('/login', ['uses' => 'AuthController@postLogin', 'middleware' => ['guest']]);

//logout --------------------------------------
Route::get('/logout', 'AuthController@getLogout');

