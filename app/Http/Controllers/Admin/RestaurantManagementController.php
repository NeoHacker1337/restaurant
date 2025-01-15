<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cuisine;
use App\Models\RestaurantManagement;
use App\Models\RestaurantProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class RestaurantManagementController extends Controller
{
    public function index(Request $request)
    {
        $query = User::where('role', 'vendor');

        // Check if there's a search query
        if ($request->has('search') && !empty($request->search)) {
            $query->where(function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('email', 'like', '%' . $request->search . '%');
            });
        }

        // Paginate results
        $restaurants = $query->paginate(20);

        // Pass the search term to the view
        return view('admin-panel.restaurant-management.index', compact('restaurants', 'request'));
    }

    public function create()
    {
        $cuisines = Cuisine::get();
        return view('admin-panel.restaurant-management.create', compact('cuisines'));
    }


    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'restaurant_name' => 'required|string|max:255',
            'restaurant_phone' => 'required',
            'restaurant_email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'restaurant_address' => 'required|string',
            'restaurant_city' => 'required|string|max:255',
            'restaurant_state' => 'required|string|max:255',
            'restaurant_country' => 'required|string|max:255',
            'restaurant_postal_code' => 'required|string|max:10',
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i',
            'opening_days' => 'required|array',
            'cuisine_type' => 'required|array',
            'seating_capacity' => 'nullable|integer',
            'accepts_online_orders' => 'required|boolean',
            'offers_takeaway' => 'required|boolean',
            'restaurant_description' => 'nullable|string',
            'restaurant_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
            'is_vegetarian' => 'nullable|boolean',
            'has_parking' => 'nullable|boolean',
        ]);

        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Convert arrays to JSON for storage (if applicable)
        $validatedData['opening_days'] = json_encode($validatedData['opening_days']);
        $validatedData['cuisine_type'] = json_encode($validatedData['cuisine_type']);

        // Save User data
        $restaurant = new User();
        $restaurant->name = $validatedData['restaurant_name'];
        $restaurant->email = $validatedData['restaurant_email'];
        $restaurant->role = 'vendor'; // Assuming role field exists in the User model
        $restaurant->password = $validatedData['password'];
        $restaurant->save();

        if ($restaurant) {
            // Handle restaurant logo image upload if exists
            $restaurantLogoPath = null;
            if ($request->hasFile('restaurant_logo')) {
                $image = $request->file('restaurant_logo');
                $restaurantLogoPath = $image->store('restaurant_logos', 'public'); // Store in the "restaurant_logos" folder within "public" disk
            }

            // Save Restaurant Profile data
            $restaurantProfile = new RestaurantProfile();
            $restaurantProfile->user_id = $restaurant->id;
            $restaurantProfile->restaurant_name = $validatedData['restaurant_name'];
            $restaurantProfile->restaurant_logo = $restaurantLogoPath; // Save the image path
            $restaurantProfile->restaurant_description = $validatedData['restaurant_description'] ?? null;
            $restaurantProfile->restaurant_phone = $validatedData['restaurant_phone'];
            $restaurantProfile->restaurant_email = $validatedData['restaurant_email'];
            $restaurantProfile->restaurant_address = $validatedData['restaurant_address'];
            $restaurantProfile->restaurant_city = $validatedData['restaurant_city'];
            $restaurantProfile->restaurant_state = $validatedData['restaurant_state'];
            $restaurantProfile->restaurant_country = $validatedData['restaurant_country'];
            $restaurantProfile->restaurant_postal_code = $validatedData['restaurant_postal_code'];
            $restaurantProfile->opening_days = $validatedData['opening_days']; // JSON encoded data
            $restaurantProfile->opening_time = $validatedData['opening_time'];
            $restaurantProfile->closing_time = $validatedData['closing_time'];
            $restaurantProfile->cuisine_type = $validatedData['cuisine_type']; // JSON encoded data
            $restaurantProfile->is_vegetarian = $validatedData['is_vegetarian'] ?? 0;
            $restaurantProfile->seating_capacity = $validatedData['seating_capacity'] ?? null;
            $restaurantProfile->accepts_online_orders = $validatedData['accepts_online_orders'];
            $restaurantProfile->offers_takeaway = $validatedData['offers_takeaway'];
            $restaurantProfile->has_parking = $validatedData['has_parking'] ?? 0;
            $restaurantProfile->save();

            // Send the email verification
            $restaurant->sendEmailVerificationNotification();

            // Alternatively, if you want to customize the verification process, you can create a custom link:
            // $verificationUrl = URL::temporarySignedRoute(
            //     'verification.verify', now()->addMinutes(60), ['id' => $restaurant->id]
            // );
            // Mail::to($restaurant->email)->send(new CustomVerificationEmail($verificationUrl));
        }

        // Return redirect to a specific route
        return redirect()->route('admin-panel.restaurant-management.index')->with([
            'message' => 'Restaurant added successfully!',
            'restaurant' => $restaurant,
        ]);
    }

    public function show($id)
    {
        $cuisines = Cuisine::get();
        $user = User::findOrFail($id);
        $restaurantProfile = RestaurantProfile::where('user_id', $user->id)->first();
        return view('admin-panel.restaurant-management.show', compact('user', 'restaurantProfile', 'cuisines'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $restaurantProfile = RestaurantProfile::where('user_id', $user->id)->first() ?? new RestaurantProfile();
        $cuisines = Cuisine::get();

        return view('admin-panel.restaurant-management.edit', compact('user', 'restaurantProfile', 'cuisines'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'restaurant_name' => 'required|string|max:255',
            'restaurant_phone' => 'required',
            'restaurant_email' => 'required|email|unique:users,email,' . $id, // Ignore current user's email
            'password' => 'nullable|string|min:6|confirmed',
            'restaurant_address' => 'required|string',
            'restaurant_city' => 'required|string|max:255',
            'restaurant_state' => 'required|string|max:255',
            'restaurant_country' => 'required|string|max:255',
            'restaurant_postal_code' => 'required|string|max:10',
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i',
            'opening_days' => 'required|array',
            'cuisine_type' => 'required|array',
            'seating_capacity' => 'nullable|integer',
            'accepts_online_orders' => 'required|boolean',
            'offers_takeaway' => 'required|boolean',
            'restaurant_description' => 'nullable|string',
            'restaurant_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
            'is_vegetarian' => 'nullable|boolean',
            'has_parking' => 'nullable|boolean',
        ]);

        // Find the existing restaurant (user)
        $restaurant = User::findOrFail($id);

        // Update password only if provided
        if ($request->filled('password')) {
            $validatedData['password'] = Hash::make($validatedData['password']);
        } else {
            unset($validatedData['password']); // No password update if not provided
        }

        // Convert arrays to JSON for storage (if applicable)
        $validatedData['opening_days'] = json_encode($validatedData['opening_days']);
        $validatedData['cuisine_type'] = json_encode($validatedData['cuisine_type']);

        // Update User data
        $restaurant->name = $validatedData['restaurant_name'];
        $restaurant->email = $validatedData['restaurant_email'];
        $restaurant->password = $validatedData['password'] ?? $restaurant->password; // Only update password if provided
        $restaurant->save();

        // Handle restaurant logo image upload if exists
        $restaurantLogoPath = $restaurant->restaurantProfile->restaurant_logo ?? null;
        if ($request->hasFile('restaurant_logo')) {
            $image = $request->file('restaurant_logo');
            $restaurantLogoPath = $image->store('restaurant_logos', 'public'); // Store in the "restaurant_logos" folder within "public" disk
        }

        // Check if the restaurant profile exists, if not create it
        $restaurantProfile = $restaurant->restaurantProfile ?? new RestaurantProfile();

        // Update Restaurant Profile data
        $restaurantProfile->restaurant_name = $validatedData['restaurant_name'];
        $restaurantProfile->restaurant_logo = $restaurantLogoPath; // Update the image path
        $restaurantProfile->restaurant_description = $validatedData['restaurant_description'] ?? $restaurantProfile->restaurant_description;
        $restaurantProfile->restaurant_phone = $validatedData['restaurant_phone'];
        $restaurantProfile->restaurant_email = $validatedData['restaurant_email'];
        $restaurantProfile->restaurant_address = $validatedData['restaurant_address'];
        $restaurantProfile->restaurant_city = $validatedData['restaurant_city'];
        $restaurantProfile->restaurant_state = $validatedData['restaurant_state'];
        $restaurantProfile->restaurant_country = $validatedData['restaurant_country'];
        $restaurantProfile->restaurant_postal_code = $validatedData['restaurant_postal_code'];
        $restaurantProfile->opening_days = $validatedData['opening_days']; // JSON encoded data
        $restaurantProfile->opening_time = $validatedData['opening_time'];
        $restaurantProfile->closing_time = $validatedData['closing_time'];
        $restaurantProfile->cuisine_type = $validatedData['cuisine_type']; // JSON encoded data
        $restaurantProfile->is_vegetarian = $validatedData['is_vegetarian'] ?? 0;
        $restaurantProfile->seating_capacity = $validatedData['seating_capacity'] ?? $restaurantProfile->seating_capacity;
        $restaurantProfile->accepts_online_orders = $validatedData['accepts_online_orders'];
        $restaurantProfile->offers_takeaway = $validatedData['offers_takeaway'];
        $restaurantProfile->has_parking = $validatedData['has_parking'] ?? 0;
        $restaurantProfile->user_id = $restaurant->id; // Ensure profile is linked to the restaurant user

        // Save the profile data (create or update)
        $restaurantProfile->save();

        return redirect()->route('admin-panel.restaurant-management.index')->with([
            'message' => 'Restaurant updated successfully!',
            'restaurant' => $restaurant,
        ]);
    }

    public function destroy(RestaurantManagement $RestaurantManagement) {}

    public function delete(Request $request, $id)
    {
        // Ensure only admins can perform this action
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('admin-panel.restaurant-management.index')->with('error', 'You do not have permission to delete this restaurant.');
        }

        // Find the user or return a 404 error
        $user = User::findOrFail($id);

        try {
            // Perform deletion within a transaction
            DB::transaction(function () use ($user) {
                // Check and delete related restaurant profile, if any
                if ($user->restaurantProfile) {
                    $user->restaurantProfile()->delete();
                }
                // Delete the user
                $user->delete();
            });

            return redirect()->route('admin-panel.restaurant-management.index')->with('success', 'Restaurant deleted successfully.');
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Error deleting restaurant:', ['error' => $e->getMessage()]);

            return redirect()->route('admin-panel.restaurant-management.index')->with('error', 'An error occurred while deleting the restaurant. Please try again.');
        }
    }
}
