<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Infor;
use App\Models\Job;
use App\Models\Measure;
use App\Models\Couple;
use App\Models\Couple_Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class PageController extends Controller
{
    public function homePage(){
        return view('layout.master');
    }

    public function homePage_after_login(){
        $user = Auth::user();
        $rq = Couple_Request::where('id',$user->id)->get();
        $total = $rq->count();
        $array=null;
        foreach ($rq as $var)
        {
            $infor = Infor::where('id',$var->id2)->first();
            $array[$var->id2] = $infor->name;
        }
        return view('home.index',['user'=>$user, 'total'=>$total, 'rq'=>$rq,'array'=>$array]);
    }

    public function expeter_list(){
        $infor = Infor::all();
        return view('expeter.list',['infor'=>$infor]);
    }

    public function postExpecter()
    {
        $name = $_GET['check_select'];
        $i=0;
        foreach ($name as $id){ 
            $infor = Infor::where('id', $id)->first();
            $array[$i++]=$infor;
        }
        return view('expeter.couple_show',['infor'=>$array]);
    }

    public function expeter_result(){
        return view('expeter.couple_show');
    }

    public function information()
    {
        $user = Auth::user();
        $infor = Infor::where('id', $user->id)->first();
        $job = Job::where('id', $user->id)->first();
        $measure = Measure::where('id', $user->id)->first();
        $couple = Couple::where('id', $user->id)->first();
        if ($couple != null)
            $infor_couple = Infor::where('id', $couple->id2)->first();
        else 
            $infor_couple = null;
        return view('home.infor', ['user'=>$user, 'infor'=>$infor, 'job'=>$job, 'measure'=>$measure, 'infor_couple'=>$infor_couple, 'rq'=>null]);
    }

    public function changePassword()
    {
        return view('login.changePassword');
    }

    public function postchangePassword(Request $request)
    {
        $this->validate($request,[
            'oldpassword'=>'required|min:3|max:16',
            'newpassword'=>'required|min:3|max:16',
            're_password'=>'required|same:newpassword'
        ],[
            'newpassword.min'=>'Password not be less than 3 characters',
            'newpassword. max'=>'Password not be more than 16 characters',
            're_password'=>'Password nhap lai chua dung'
        ]);

        $user = Auth::user();
        
        if(Auth::attempt(['name'=>$user->name,'password'=>$request->oldpassword]))
        {
            $user->update(['password' => bcrypt($request->newpassword)]);
            return redirect('home')->with('thongbao', "Your password has been changed");
        }
        else 
            return redirect('changePassword')->with('thongbao1', "Old password not correct!");        
    }
    
    public function heart_choice_list(Request $request){
        if($request->all() == null) {
            $info = Infor::paginate(6); // Lấy data theo request
        }else{
            $name = $request->input('name');
            $address = $request->input('address');
            $job = $request->input('job');
            $hobby = $request->input('hobby');
            $height = $request->input('height');
            $weight = $request->input('weight');
            $year = $request->input('year');
            $state = $request->input('state');
            $sex = $request->input('sex');

            $info  = Infor::query();
            if ($name) {
                $info = $info->where('name', 'LIKE', "%$name%");
            }
            if ($address) {
                $info->where('address', 'LIKE', "%$address%");
            }
            if($height){
                $info->whereBetween('height',[$height+0.01, $height+0.1]);
            }
            if($weight){
                $info->whereBetween('weight', [$weight, $weight + 10.1]);
            }
            if($year){
                $info->whereYear('date', $year);
            }
            if($state){
                $info->where('state',$state);
            }
            if($sex){
                $info->where('sex',$sex);
            }
            $info = $info->paginate(6);

        }

        return view('heart_choices.hc_index', ['info'=>$info]);
    }

    public function heart_choice_detail($id){
        $user = Auth::user();
        $user_if = Infor::find($user->id);
        $info_personal = Infor::find($id);
        $job_personal = Job::where('id', $id)->first();//nếu dùng get nó trả về bộ sưu tập cần dùng vòng lặp còn first trả về 1 cái cần thôi
        return view('heart_choices.hc_detail', ['info_personal'=>$info_personal, 'job_personal'=>$job_personal, 'user'=>$user, 'user_if'=>$user_if]);
    }

    public function sendMessage(Request $request)
    {
        $user = Auth::user();
        $message = Couple_Request::where('id',$request->id)->where('id2', $user->id)->first();
        if($message == null)
        {
            $message = new Couple_Request;
            $message->id= $request->id;
            $message->id2 = $user->id;
            $message->message= $request->message;
            $message->save();
            return redirect('home')->with('thongbao', 'Your message has been sent!');
        }
        else
        {
            $message->message = $request->message;
            $message->save();
            return redirect('home')->with('thongbao', 'Your message has been updated!');
        }
    }

    public function accept($id)
    {
        $user = Auth::user();
        $couple = Couple::where('id',$user->id)->first();
        if($couple == null)
        {
            $message = DB::table('couple_request')->where('id',$user->id)->where('id2',$id)->delete();
            $couple = new Couple;
            $couple->id=$user->id;
            $couple->id2=$id;
            $couple->save();
            $couple = new Couple;
            $couple->id=$id;
            $couple->id2=$user->id;
            $couple->save();
            $infor = Infor::where('id',$id)->first();
            $infor->state = "Dating";
            $infor->save();
            $infor = Infor::where('id',$user->id)->first();
            $infor->state = "Dating";
            $infor->save();
            return redirect('home')->with('thongbao', 'You are in dating!');
        }
        else 
        {
            $infor= Infor::where('id', $couple->id2)->first();
            return redirect('home')->with('thongbao', "You are dating with {$infor->name}, can not accept this person");
        }
    }

    public function denine($id)
    {
        $user = Auth::user();
        $message = DB::table('couple_request')->where('id',$user->id)->where('id2',$id)->delete();
        return redirect('home');
    }

    public function seeInfor($id)
    {   
        $user = Auth::user();
        $message = Couple_Request::where('id',$user->id)->where('id2', $id)->first();
        if ($message)
        {
            $user = User::where('id',$message->id2)->first();
            $infor = Infor::where('id',$message->id2)->first();
            $job = Job::where('id',$message->id2)->first();
            $measure = Measure::where('id',$message->id2)->first();
            return view('request.seeInfor',['user'=>$user, 'infor'=>$infor, 'job'=>$job, 'measure'=>$measure,'rq'=>null, 'message'=>$message]);
        }
    }

    public function couple()
    {
        $user = Auth::user();
        $couple = Couple::where('id', $user->id)->first();
        if ($couple)
        {
            $users = User::where('id', $couple->id2)->first();
            $infor = Infor::where('id', $couple->id2)->first();
            $job = Job::where('id', $couple->id2)->first();
            $measure = Measure::where('id', $couple->id2)->first();
            return view('request.couple',['user'=>$users, 'infor'=>$infor, 'job'=>$job,'infor_couple'=>$user, 'measure'=>$measure,'rq'=>null]);
        }
    }

    public function break()
    {
        $user = Auth::user();
        $couple = Couple::where('id', $user->id)->orWhere('id2',$user->id)->first();
        $infor = Infor::where('id',$couple->id)->first();
        $infor->state = "Single";
        $infor->save();
        $infor = Infor::where('id',$couple->id2)->first();
        $infor->state = "Single";
        $infor->save();
        Couple::destroy([$couple->id, $couple->id2]);
        return redirect('home')->with('thongbao', 'You are in Single!');
    }

}