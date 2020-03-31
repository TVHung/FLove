<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Infor;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateController extends Controller
{
    public function update(){
        return view('alert.alert_infor');
    }

    public function postUpdate(Request $request)
    {
        $user = Auth::user();
        $infor = Infor::where('id', $user->id)->first();
        $job = Job::where('id', $user->id)->first();
        if($request->address != null) $infor->update(['address' => $request->address]);
        if($request->height != null) $infor->update(['height' => $request->height]);
        if($request->weight != null) $infor->update(['weight' => $request->weight]);
        if($request->phone != null) $infor->update(['phonenumber' => $request->phone]);
        if($request->email != null) $infor->update(['email' => $request->email]);
        if($request->facebook != null) $infor->update(['facebook' => $request->facebook]);
        if($request->hobby != null) $infor->update(['hobby' => $request->hobby]);
        if($request->weekness != null) $infor->update(['weekness' => $request->weekness]);
        if($request->hasFile('myFile'))
        {
            $request->file('myFile')->move('avatar', "$user->id.jpg");
        }
        
        if($request->job != null) $job->update(['jobname' => $request->job]);
        if($request->company != null) $job->update(['company' => $request->company]);
        if($request->salary != null) $job->update(['salary' => $request->salary]);
        if($request->position != null) $job->update(['position' => $request->position]);
        return redirect('home')->with('thongbao','Your information has been updated!');
    }
}


