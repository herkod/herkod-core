<?php

namespace Herkod\Core\Users;

use Illuminate\Support\ServiceProvider;
use Event;
use Request;

class UsersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Auth Login Eventi
        |--------------------------------------------------------------------------
        |
        | Kullanıcı giriş yaptığında giriş yaptığı ip adresi ve
        | son giriş yaptığı tarih kayıt ediliyor.
        |
        */
        Event::listen('auth.login', function($user)
        {
            $user->last_login_time = new \DateTime;
            $user->last_login_ip = Request::ip();

            $user->save();
        });
    }

    public function register()
    {

    }
}
