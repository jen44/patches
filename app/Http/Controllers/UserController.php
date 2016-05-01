<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    
    public function __construct(){
         $this->middleware('auth', ['except' => ['showRegisterForm', 'createUser']]);
         $this->middleware('auth.user', ['except' => ['showRegisterForm', 'createUser']]);
    }
    
    
    //Show Register form
    public function showRegisterForm(){
       
        return view('register');
    
    }
    
    //process register
    public function createUser(CreateUserRequest $request){
        $user = User::create($request->all());
        
        $user->password = bcrypt($user->password);
        $user->avatar = 'default_avatar.png';
        $user->save();
        
        Auth::loginUsingId($user->id);
        return redirect('success');
        
    }
    
    //Show user detail
    public function showUserDetail($id){
        
        $user = User::find($id);
        return view('userdetail', compact('user'));
    
    }

    //Show user edit
    public function showUserEditForm($id){
        
        return view('user/'.$user->id.'/edit', compact('user'));
    
    }
    
    //Process Edit user
    public function editUser(EditUserRequest $request, $id){
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect('dashboard/'.$user->$id);
    }
    

    
    
    
    
}
