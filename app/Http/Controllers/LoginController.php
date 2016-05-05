<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    
    
    public function __construct(){
         $this->middleware('auth.user', ['only' => ['showDashboard']]);
    }
    
    //Show login form
    public function showLoginForm(){
        
        return view('login');
    }
    
    //Process login
    public function processLogin(LoginRequest $request){
        $credential = $request->only('username', 'password');
        
        if(\Auth::attempt($credential)){
            
        $user = Auth::User();
        return redirect('dashboard/'.$user->id);
            
        } else {
            
            return redirect('/')->with('message', 'Login information invalid');
        
        }
        
    }
    
    public function showDashboard($id){
        

        $user = Auth::User();
        return view('dashboard', compact('board'));
    }
    
    
    //Logout
    public function logout(){
        
        \Auth::logout();
        
        return redirect('login');
    }
}
