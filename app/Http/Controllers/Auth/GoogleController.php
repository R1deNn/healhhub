<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function googleCallback()
    {
        try {

            $user = Socialite::driver('vkontakte')->user();

            $current_user = User::where('google_id', $user->id)->first();

            if($current_user){

                Auth::login($current_user);

                return redirect()->intended('dashboard');

            }else{
                $fullName = $user->name;
                list($firstName, $lastName) = explode(' ', $fullName);

                $newUser = User::updateOrCreate(['email' => $user->email],[
                    'name' => $firstName,
                    'surname' => $lastName,
                    'email' => $user->email,
                    'img' => $user->avatar,
                    'cab' => 0,
                    'tel' => 'Авторизован через ВКонтакте',
                    'email_verified_at' => '2024-05-08 04:08:07',
                    'google_id'=> $user->id,
                    'password' => encrypt('random_password')
                ]);

                Auth::login($newUser);

                return redirect()->intended('/');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
