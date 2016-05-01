<?php



/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function() {
    return view('login');
});

Route::get('dashboard', function() {
    return view('dashboard');
});

Route::get('board', function() {
    return view('board');
});

Route::get('success', function() {
    return view('success');
});

Route::get('testshowusers', function() {
    return view('testshowusers', compact('users'));
});

Route::get('testshowboards', function() {
    return view('testshowboards', compact('boards'));
});

Route::get('testshownotes', function() {
    return view('testshownotes', compact('notes'));
});
    


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
Route::group(['middleware' => ['web']], function () {
    
    
                            /**********
                                User
                            **********/
    
   
    //show register form
    Route::get('register', 'UserController@showRegisterForm');
    
    //process register
    Route::post('register', 'UserController@createUser');
    
    
    
    //Show Login Form
    Route::get('login', 'LoginController@showLoginForm');
    
    
    //Process Login
    Route::post('login', 'LoginController@processLogin');
    
    
    //Process Logout
    Route::get('logout', 'LoginController@logout');
    
    

                            /**********
                                Board
                            **********/
    

    
    
    
    

                            /**********
                                Note
                            **********/
    
    
    
    
    
    
    
    
});