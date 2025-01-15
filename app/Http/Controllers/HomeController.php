<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_restaurant = User::where('role', 'vendor')->count();
        $total_customer = User::where('role', 'customer')->count();
        return view('home', compact('total_restaurant', 'total_customer'));
    }


    // Handle the password change request
    public function changePassword(Request $request)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->withErrors(['message' => 'You must be logged in to change your password.']);
        }

        // Validate the input
        $validated = $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();

        // Check if the old password is correct
        if (!Hash::check($validated['old_password'], $user->password)) {
            return back()->withErrors(['old_password' => 'The current password does not match our records.']);
        }

        // Update the password
        $user->update([
            'password' => Hash::make($validated['new_password']),
        ]);

        // Redirect with a success message
        return redirect()->route('dashboard')->with('status', 'Password changed successfully!');
    }
}
