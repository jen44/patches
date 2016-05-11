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

//Landing page
Route::get('/', function(){
    return view('welcome');
    
});  

//No access
Route::get('noaccess', function(){
    return view('noaccess');
    
});

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
    Route::get('dashboard/{id}', 'BoardController@showDashboard');
    
    
    

                            /**********
                                Board
                            **********/
    
    //Show board    
    Route::get('board/{id}', 'BoardController@showIndivBoard');

    //Create new board
    Route::post('boards', 'BoardController@createBoard');
    
    //Update board background
    Route::put('board/{id}', 'BoardController@updateBoardBg');
    
    

                            /**********
                                Note
                            **********/
    
    
    //Update note
    Route::put('notes/{id}', 'NoteController@editNote');
    
    
    
    
    
});