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
    
    //upload avatar
    Route::post('user/avatar/{id}', 'UserController@uploadAvatar');
    
    
    

                            /**********
                                Board
                            **********/
    
    //Show board    
    Route::get('board/{id}', 'BoardController@showIndivBoard');

    //Create new board
    Route::post('boards', 'BoardController@createBoard');
    
    //Edit board info
    Route::put('board/{id}/update', 'BoardController@editBoard');
    
    //Update board background
    Route::put('board/{id}/update/background', 'BoardController@updateBoardBg');
    
    //Upload board background
    Route::post('board/{id}/upload/background', 'BoardController@uploadBoardBg');
    
    //Delete board
    Route::get('board/{id}/delete', 'BoardController@deleteBoard');
    
    //Clear board
    Route::get('board/{id}/clear', 'BoardController@clearBoard');
    
    

                            /**********
                                Note
                            **********/
    
    
    //create note
    Route::post('notes/create', 'NoteController@createNote');    
    
    //Update note content
    Route::put('notes/{id}/update', 'NoteController@editNote');
    
    //Update note position
    Route::put('notes/{id}/update/position', 'NoteController@editNoteXY');
    
    //Delete note
    Route::get('notes/{id}/delete', 'NoteController@deleteNote');
    
    
    
});