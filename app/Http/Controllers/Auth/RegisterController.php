<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{

    use RegistersUsers;

    public function register(){
        return view('login.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'username'=>'required|unique:account,name|max:32',
            'password'=>'required|min:3|max:16',
            'email'=>'required|unique:account',
            're_password'=>'required|same:password'
        ],[
            'username.unique'=>'The Username already exists',
            'username.max'=>'Username not be more than 32 characters',
            'password.min'=>'Password not be less than 3 characters',
            'password. max'=>'Password not be more than 16 characters',
            'email.unique'=>'The Email already exists',
            're_password'=>'Password nhap lai chua dung'
        ]);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('login')->with('thongbao', 'Register successed, please login!');
    }

}
