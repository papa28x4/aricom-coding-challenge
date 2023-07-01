<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // return User::all();
        // return Admin::all();
        // return User::whereHas('roles', function($q){
        //     $q->where('name', 'User');
        // })->get();
        $user = User::find(1);

        return auth()->user()->hasRole('Admin');

        // return $user->hasRole('Admin');
    }

    public function dashboard()
    {
        $users =  User::whereHas('roles', function($q){
                $q->where('name', 'User');
            })->paginate(5);

        return view('dashboard', compact('users'));
    }
    
    public function ToggleActivation(User $user)
    {
        // dd($user);
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
