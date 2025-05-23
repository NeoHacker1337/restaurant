<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    protected function redirectTo()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Redirect based on the user's role
        if ($user->role == 'admin') {
            return '/home';
        }

        if ($user->role == 'customer') {
            return '/customer/dashboard';
        }

        if ($user->role == 'vendor') {
            return '/vendor/dashboard';
        }

        if ($user->role == 'delivery') {
            return '/delivery/dashboard';
        }

        // Default redirect if role is not matched
        return '/home';
    }
}
