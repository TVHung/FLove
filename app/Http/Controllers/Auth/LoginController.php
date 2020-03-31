<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Models\Infor;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function login_index(){
        return view('login.login');
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'password'=>'min:3|max:16'
        ],[
            'password.min'=>'Password không được nhỏ hơn 3 ký tự',
            'password.max'=>'Password không được lớn hơn 16 ký tự'
        ]);
        $username = $request->username;
        $password = $request->password;
        if(Auth::attempt(['name'=>$username,'password'=>$password]))
        {
            $user = Auth::user();
            $infor = Infor::where('id', $user->id)->first();
            if ($infor == null) return redirect('edit_infor')->with('thongbao','Please insert your information!');
            else
            return redirect('home');
        }
    	else
    	{
    		return redirect('login')->with('thongbao1','Login Failed!');
    	}
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
