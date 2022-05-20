<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\Throw_;
use Ghasedak\GhasedakApi;
class IndexController extends Controller
{
    public function ww(){
        /* $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
        $api->SendSimple(
            "09115366236",  // receptor
            "کد تایید شما در وبسایت میلیونر لایف : 684575", // message
            "10008566"    // choose a line number from your account
        );*/
        return view('ww');
    }
    public function show(Request $request)
    {
        $u = Auth::user()->toArray();
        $phon_v = $u['phone_verified_at'];
        if (($phon_v) == null){
            $phone = Auth::user()['phone'];
            if (!empty($phone)) {
                return view('verifyphone', ['phone' => $phone]);
            }else{
                abort(404);
            }
        }else{
            abort(404);
        }
    }

    public function verify(Request $request)
    {
       /* dd($request->toArray());*/
        /*$user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();*/
        $u = Auth::user()->toArray();
        $phon_v = $u['phone_verified_at'];
        $phones = $u['phone'];
        if (!empty($phones)) {
            if (($phon_v) == null) {
                $res = $request->toArray()['username'];
                $bb = User::check($res)->toArray();
                if (empty($bb)) {
                    return redirect()->back()->with('errs', 'کد تایید اشتباه است لطفا مجددا تلاش کنید');
                } else {
                    if (isset($bb)) {
                        $au = Auth::id();
                        $date = Carbon::now()->toArray()['formatted'];
                        User::getid($au, $date);
                        return redirect(route('dashboard'));
                    }
                }
            } else {
                abort(404);
            }
        }else{
            abort(404);
        }
    }
    public function resend()
    {
        $u = Auth::user()->toArray();
        $phon_v = $u['phone_verified_at'];
        $phones = $u['phone'];
        if (!empty($phones)) {
            if (($phon_v) == null) {
                $number = mt_rand(10000, 99999);
                $auth = Auth::user()->toArray();
                $id = $auth['id'];
                $phone = $auth['phone'];
                User::resend($id, $number);
                $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
                $api->SendSimple(
                    $phone,  // receptor
                    "کد تایید شما در وبسایت میلیونر لایف :  .$number", // message
                    "10008566"    // choose a line number from your account
                );
                return redirect()->back()->with('err', 'کد تایید برای شما ارسال شد');
            } else {
                abort(404);
            }
        }else{
            abort(404);
        }
    }
    public function changephone(){
        $u = Auth::user()->toArray();
        $phon_v = $u['phone_verified_at'];
        $phones = $u['phone'];
        if (!empty($phones)) {
            if (($phon_v) == null) {
                return view('changephone');
            } else {
                abort(404);
            }
        }else{
            abort(404);
        }
    }
    public function changesphone(Request $request){
        $u = Auth::user()->toArray();
        $phon_v = $u['phone_verified_at'];
        $phones = $u['phone'];
        if (!empty($phones)) {
            if (($phon_v) == null) {
                $res = $request->toArray()['phone'];
                $bb = Auth::user()->toArray();
                $userid = $bb['id'];
                User::changephone($userid, $res);

                $number = mt_rand(10000, 99999);
                $auth = Auth::user()->toArray();
                $id = $auth['id'];
                User::resend($id, $number);
                $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
                $api->SendSimple(
                    $res,  // receptor
                    "کد تایید شما در وبسایت میلیونر لایف :  .$number", // message
                    "10008566"    // choose a line number from your account
                );

                return redirect(route('phoneverification.notice'))->with('err', 'تغییر شماره تلفن شما با موفقیت انجام شد');
            } else {
                abort(404);
            }
        }else{
            abort(404);
        }
    }
}
