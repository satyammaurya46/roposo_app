<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.Auth.login');
    }

    public function recoverpw()
    {
        return view('admin.Auth.recoverpw');
    }

    public function register()
    {
        return view('admin.Auth.register');
    }


    public function storeLogin(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required', 'string'],
        ]);

        $login_by = 'email';

        // Determine login method (Email or Phone)
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL)) {
            $login_by = 'email';
            $user = User::where('email', $request->username)->first();
        } elseif (is_numeric($request->username)) {
            $login_by = 'phone';
            $user = User::where('contact_no', $request->username)->first();
        } else {
            return redirect()->route('auth.login')->with([
                'messege' => 'Please provide a valid email or phone number',
                'alert-type' => 'error'
            ]);
        }

        // If user exists
        if ($user) {
            if (!Hash::check($request->password, $user->password)) {
                return redirect()->route('auth.login')->with([
                    'messege' => 'Incorrect password!',
                    'alert-type' => 'error'
                ]);
            }

            if ($user->is_active != 1) {
                return redirect()->route('auth.login')->with([
                    'messege' => 'Your Account is blocked. Please contact the Administrator.',
                    'alert-type' => 'error'
                ]);
            }

            // Authenticate User
            Auth::login($user);

            // Store user details in session
            Session::put([
                'userid' => $user->id,
                'username' => $user->user_name,
                'login-name' => $user->name,
                'rolename' => $user->role,
            ]);

            return redirect()->route('admin.dashboard')->with([
                'messege' => 'Welcome Back!',
                'alert-type' => 'success'
            ]);
        }

        // If user does not exist
        return redirect()->route('auth.login')->with([
            'messege' => 'Credentials do not exist.',
            'alert-type' => 'error'
        ]);
    }
}
