<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Notifications\ResetPasswordRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
        return view('login.forgot_password');
    }

    public function getresetPassword()
    {
        if(session('token') == null)return redirect('login');
        return view('login.resetPassword');
    }
    /**
     * Create token password reset.
     *
     * @param  ResetPasswordRequest $request
     * @return JsonResponse
     */
    public function sendMail(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user == null) return redirect()->back()->with('thongbao1', 'Email not exist!');
        $passwordReset = PasswordReset::updateOrCreate([
            'email' => $user->email,
        ], [
            'token' => Str::random(60),
        ]);
        if ($passwordReset) {
            $user->notify(new ResetPasswordRequest($passwordReset->token));
        }
  
        return redirect()->back()->with('thongbao', 'We have e-mailed your password reset link!');
    }

    public function reset(Request $request, $token)
    {
        $passwordReset = PasswordReset::where('token', $token)->firstOrFail();
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return redirect('forgotPassword')->with('thongbao1', 'The link has expired, please try again!');
            

            // return response()->json([
            //     'message' => 'This password reset token is invalid.',
            // ], 422);
        }
        $user = User::where('email', $passwordReset->email)->firstOrFail();
        return redirect('resetPassword')->with('token',$token);
        return view('login.resetPassword',['token'=>$token]);
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password'=>'required|min:3|max:16',
            're_password'=>'required|same:password'
        ],[
            'password.min'=>'Password not be less than 3 characters',
            'password. max'=>'Password not be more than 16 characters',
            're_password'=>'Password nhap lai chua dung'
        ]);

        if ($validator->fails()) {
            return redirect('resetPassword')
                        ->withErrors($validator)
                        ->with('token',$request->token);
        }

    	$passwordReset = PasswordReset::where('token', $request->token)->firstOrFail();
    	$user = User::where('email', $passwordReset->email)->firstOrFail();
    	$passwordReset->delete();
        $user->update(['password' => bcrypt($request->password)]);
        return redirect('login')->with('thongbao', "Reset password successed, please login with username: $user->name");
    }
}

