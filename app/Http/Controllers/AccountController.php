<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    //Shows register form
    public function register(){
        return view('account.register');
    }


    //This method will register users
    public function processRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:8',
            'password_confirmation' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->route('account.register')->withInput()->withErrors($validator);
        }
        
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('account.login')->with('success','You have registered successfully');
    }

    public function login(){
        return view('account.login');
    }

    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=> 'required|email',
            'password'=> 'required',
        ]);

        if($validator->fails()){
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }

        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            return redirect()->route('account.profile');
        }else{
            return redirect()->route('account.login')->with('error', 'Credentials not matched');
        }
    }

    public function profile(){
        return view('account.profile');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }

}
