<?php

namespace App\Traits;
use illuminate\Support\Facades\Auth;

trait CustomRedirect {

    public function redirectTo(){
        if(Auth::user()->hasRole('Admin')){
            return route('users.dashboard');
        }
        else if(Auth::user()->hasRole('User')){
            return route('home');
        }
    }
}