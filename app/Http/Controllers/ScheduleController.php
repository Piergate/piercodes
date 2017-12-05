<?php

namespace App\Http\Controllers;

use Mail;
use Alert;
use App\Call;
use Validator;
use App\Schedule;
use App\Jobs\SendCallMaill;
use Illuminate\Http\Request;
use App\Jobs\SendScheduleMaill;
use Illuminate\Support\Facades\Input;
// use App\Mail\SendMessage;
// use App\Mail\Schedule;
// use App\Mail\Call;

class ScheduleController extends Controller
{
    public function index()
    {
    	return view('schedule');
    }

    public function send_me_schedule(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'fullname'           => 'required|min:10|max:30',
            'email'              => 'required|email',
            'companyname'        => 'required|min:10',
            'phonenumber'        => 'required|min:11|numeric',
            'projectdetalis'     => 'required|min:20', 
        ]);
        if ($validate->passes()) {
            $schedules = Schedule::create([
                'fullname'       => Input::get('fullname'),
                'email'          => Input::get('email'),
                'companyname'    => Input::get('companyname'),
                'phonenumber'    => Input::get('phonenumber'),
                'projectdetalis' => Input::get('projectdetalis')
            ]);
            $content = [
                'fullname'       => Input::get('fullname'),
                'email'          => Input::get('email'),
                'companyname'    => Input::get('companyname'),
                'phonenumber'    => Input::get('phonenumber'),
                'projectdetalis' => Input::get('projectdetalis')
            ];
            dispatch(new SendScheduleMaill($content));
            // $receiverAddress = 'info@piercodes.com';
            // $send =  Mail::to($receiverAddress)->send(new Schedule($content));
        }
        return response()->json(['error'=>$validate->errors()->all()]);


    }
    public function send_me_call(Request $request)
    {
        // return $request->all();
        $validate = Validator::make($request->all(), [
            'fullname'      => 'required|min:10|max:30',
            'phonenumber'   => 'required|min:11|numeric',
            'day'           => 'required',
            'time'          => 'required'
        ]);
        if ($validate->passes()) {
            $calls = Call::create([
                'fullname'      => Input::get('fullname'),
                'phonenumber'   => Input::get('phonenumber'),
                'day'           => Input::get('day'),
                'time'          => Input::get('time')

            ]);
            $content = [
                'fullname'      => Input::get('fullname'),
                'phonenumber'   => Input::get('phonenumber'),
                'day'           => Input::get('day'),
                'time'          => Input::get('time')
            ];
            dispatch(new SendCallMaill($content));
            dispatch(new SendCallMaill($content));
            // $receiverAddress = 'info@piercodes.com';
            // Mail::to($receiverAddress)->send(new Call($content));
        }
            return back();
        return response()->json(['error'=>$validate->errors()->all()]);

    }
    public function schedule()
    {
        $schedules = Schedule::all();
        return view('admin.schedule', compact('schedules'));
    }

    public function call()
    {
        $calls = Call::all();
        return view('admin.call', compact('calls'));
    }

}
