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


  

//show register form
Route::get('register', 'UserController@showRegisterForm');

//process register
Route::post('register', 'UserController@createUser');

//Show Login Form
Route::get('login', 'LoginController@showLoginForm');

//Show Login Form
Route::get('login', 'LoginController@showLoginForm');

//Process Logout
Route::get('logout', 'LoginController@logout');

//Test board note show
//Route::get('board', function(){
//    return view('board', compact('board'));
//});



    


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
  
    
    //Process Login
    Route::post('login', 'LoginController@processLogin');
    
    //After login, show Dashboard
    Route::get('dashboard/{id}', 'LoginController@showDashboard');
    
    
    

                            /**********
                                Board
                            **********/
    
    
    Route::get('board/{id}', 'boardController@showIndivBoard');


    
    
    
    

                            /**********
                                Note
                            **********/
    
    
    
    
    
    
    
    
});