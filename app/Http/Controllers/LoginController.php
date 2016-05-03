<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    //Show login form
    public function showLoginForm(){
        
        return view('login');
    }
    
    //Process login
    public function processLogin(LoginRequest $request){
        $credential = $request->only('username', 'password');
        
        if(\Auth::attempt($credential)){
            
            return redirect('board');
            
        } else {
            
            return redirect('login')->with('message', 'Login information invalid');
        
        }
        
    }
    
    
    //Logout
    public function logout(){
        
        \Auth::logout();
        
        return redirect('login');
    }
}
