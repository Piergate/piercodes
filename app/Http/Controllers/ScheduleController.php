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

class ScheduleController extends Controller
{
    public function index()
    {
    	return view('schedule');
    }

    public function send_me_schedule(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'fullname'              => 'required|min:5|max:30',
            'email'                 => 'required|email',
            'companyname'           => 'required|min:5',
            'phonenumber'           => 'required|min:7|numeric',
            'projectdetalis'        => 'required|min:5',
            // 'g-recaptcha-response'  => 'required|recaptcha'
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
            SendScheduleMaill::dispatch($content);
        }
        return response()->json(['error'=>$validate->errors()->all()]);


    }
    public function send_me_call(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'fullname'              => 'required|min:5|max:30',
            'phonenumber'           => 'required|min:7|numeric',
            'day'                   => 'required',
            'time'                  => 'required',
            // 'g-recaptcha-response'  => 'required|recaptcha'
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
            SendCallMaill::dispatch($content);
            return back();
        }
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
