<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Infor;
use App\User;
use App\Models\Measure;
use App\Models\Couple;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function edit_infor(){
        $user = Auth::user();
        $infor = Infor::where('id', $user->id)->first();
        if ($infor == Null)
            return view('login.edit_infor');
        else 
            return redirect('home');
    }

    public function post_infor(Request $request){
        $this->validate($request,[
            'height'=>'numeric',
            'weight'=>'numeric',
            'phone'=>'numeric|max:9999999999'
        ],[
            'height'=>'height must be number',
            'weight'=>'weight must be number',
            'phone.numeric' => 'phone must be number',
            'phone.max' => 'phone not be more than 10 number'
        ]);

        
        $user = Auth::user();
        $infor = new Infor;
        $infor->id = $user->id;
        $infor->name = $request->fullname;
        $infor->address = $request->address;
        $infor->state = $request->State;
        $infor->sex = $request->Sex;
        $infor->height = $request->height;
        $infor->weight = $request->weight;
        $infor->date = $request->dateofbirth;
        $now = now()->year;
        $birth = new Carbon( $request->dateofbirth );
        $infor->age = $now - $birth->year;
        $infor->phonenumber = $request->phone;
        $infor->email = $user->email;
        $infor->facebook = $request->facebook;
        $infor->hobby = $request->hobby;
        if($request->hasFile('myFile'))
        {
            $request->file('myFile')->move('avatar', "$user->id.jpg");
        }
        else
        {
            Storage::copy('no_avatar.jpg', "avatar/$user->id.jpg");
        }
        $infor->save();
        if($request->Sex == "Fe_Male")
        {
            $measure = new Measure;
            $measure->id = $user->id;
            $measure->mea1 = $request->the1st;
            $measure->mea2 = $request->the2st;
            $measure->mea3 = $request->the3st;
            $measure->save();
        }
        if($request->op_user_name != null)
        {
            $op_user = User::where('name',$request->op_user_name)->first();
            if($op_user != null)
            {
                $couple = Couple::where('id',$user->id)->orWhere('id2',$user->id)->first();
                if($couple == null)
                {
                    echo $op_user->id;
                    $couple = new Couple;
                    $couple->id = $user->id;
                    $couple->id2 = $op_user->id;
                    $couple->save();
                    $couple = new Couple;
                    $couple->id = $op_user->id;
                    $couple->id2 = $user->id;
                    $couple->save();
                }
            }
        }
        $job = new Job;
        $job->id = $user->id;
        $job->jobname = $request->job;
        $job->salary = $request->salary;
        $job->position = $request->position;
        $job->company = $request->company;
        $job->save();

        return redirect('home')->with('thongbao', 'Your information has been updated!');
    }

}
