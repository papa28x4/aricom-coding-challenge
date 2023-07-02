<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $users =  User::whereHas('roles', function($q){
                $q->where('name', 'User');
            })->paginate(5);

        return view('dashboard', compact('users'));
    }
    
    public function ToggleActivation(User $user)
    {
        $status = !$user->active;

        $user->forcefill([
            'active' => $status
        ]);

        $user->save();

        $user->AccountActivationNotification();

        $message = $status ? "{$user->name} has been activated" : "{$user->name} has been deactivated";
        
        return redirect()->route('users.dashboard')->with('status', $message);
    }
}
