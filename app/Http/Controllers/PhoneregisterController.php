<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Ghasedak\GhasedakApi;
use Sadegh19b\LaravelPersianValidation\PersianValidators;
class PhoneregisterController extends Controller
{
    public function showphone(){
        return view('auth.showphone');
    }
    public function showphones(Request $request){
        $res = $request->toArray();
        Validator::make($res,[
            'name' => ['required', 'string', 'max:255','min:7','persian_alpha'],
            'phone' => ['required', 'string', 'unique:users','ir_mobile:zero'],
            'password' => ['required', 'confirmed', 'min:8','max:225'],
            'username'=>['required','string','min:5','max:255','unique:users','regex:/(^([a-zA-Z]+)(\d+)?$)/u'],
            ])->validate();
        $number = mt_rand(10000, 99999);
        return DB::transaction(function () use ($res,$number) {
            $api = new GhasedakApi(env('GHASEDAKAPI_KEY'));
            $api->SendSimple(
                $res['phone'],  // receptor
                "کد تایید شما در وبسایت میلیونر لایف :  .$number", // message
                "10008566"    // choose a line number from your account
            );
            User::create([
                'name' => $res['name'],
                'phone'=>$res['phone'],
                'username'=>$res['username'],
                'password' => Hash::make($res['password']),
                'verification_code'=>$number,
            ]);
            return redirect(route('login'));});
    }
}
