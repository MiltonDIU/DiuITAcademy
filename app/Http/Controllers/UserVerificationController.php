<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserVerificationController extends Controller
{
    public function approve($token)
    {
        $user = User::where('verification_token', $token)->first();
        abort_if(!$user, 404);
        if (Setting::config()->admin_approval=='1'){
            $user->approved           = 1;
        }else{
            $user->approved           = 0;
        }
        $user->verified           = 1;
        $user->verified_at        = Carbon::now()->format(config('panel.date_format') . ' ' . config('panel.time_format'));
        $user->verification_token = null;
        $user->save();
        return redirect()->route('login')->with('message', trans('global.emailVerificationSuccess'));
    }
}
