<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class CustomerManagement extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = User::where('role', 'customer')->select(['id', 'name', 'email', 'created_at']);
            return DataTables::of($users)
                ->editColumn('created_at', function ($row) {
                    // Format the date using Carbon
                    return $row->created_at->format('d M Y, h:i A'); // Example: 24 Dec 2024, 07:22 PM
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('customer-management.edit', $row->id);
                    $deleteUrl = route('customer-management.destroy', $row->id);

                    return '
                        <a href="' . $editUrl . '" class="px-3 py-2 bg-blue-500 text-dark rounded">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <form action="' . $deleteUrl . '" method="POST" class="inline-block" id="delete-form-' . $row->id . '" onsubmit="return confirmDelete(event, ' . $row->id . ')">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="px-3 py-2 bg-red-500 text-white rounded">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>';
                })



                ->rawColumns(['actions'])
                ->make(true);
        }

        // Return the view
        return view('admin-panel.customer-management.index');
    }

    public function create()
    {
        return view('admin-panel.customer-management.create');
    }

    public function store(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email', // Ensure email is unique
            'password' => 'required|string|min:8|confirmed', // Confirm password
            'phone' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'postal_code' => 'required|string|max:10',
            'date_of_birth' => 'required|date|before:today', // Ensure date is not in the future
            'bio' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate the profile image
        ]);

        // Storing the profile data
        try {
            // Create a new user
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = bcrypt($validatedData['password']);
            $user->role = 'customer';
            $user->save();

            if ($user) {
                // Prepare profile data
                $profile = new Profile();
                $profile->user_id = $user->id;
                $profile->phone = $validatedData['phone'];
                $profile->address = $validatedData['address'];
                $profile->city = $validatedData['city'];
                $profile->state = $validatedData['state'];
                $profile->country = $validatedData['country'];
                $profile->postal_code = $validatedData['postal_code'];
                $profile->date_of_birth = $validatedData['date_of_birth'];
                $profile->bio = $validatedData['bio'];

                // Handle profile image upload if exists
                if ($request->hasFile('profile_image')) {
                    $image = $request->file('profile_image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/profile_images', $imageName); // Store the image in the 'public/profile_images' directory
                    $profile->profile_image = 'storage/profile_images/' . $imageName; // Save image path
                }

                // Save the profile data
                $profile->save();
            }

            // Redirect with success message
            return redirect()->route('customer-management.index')->with('success', 'Profile created successfully.');
        } catch (\Exception $e) {
            // In case of error, redirect back with error message
            return back()->withErrors(['error' => 'There was an error while saving your profile.']);
        }
    }


    public function edit($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        $profile = Profile::where('user_id', $user->id)->first();
        return view('admin-panel.customer-management.edit', compact('user', 'profile'));
    }
    public function update(Request $request, $id)
    {
        // Validate input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'postal_code' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the customer profile
        $customer = User::findOrFail($id);

        // Update the basic details
        $customer->name = $validated['name'];
        $customer->email = $validated['email'];

        if ($request->password) {
            // If password is provided, hash it and update
            $customer->password = Hash::make($validated['password']);
        }

        if ($customer) {

            $customerProfile = Profile::where('user_id', $customer->id)->first();
            if (!empty($customerProfile)) {
                $customerProfile->phone = $validated['phone'];
                $customerProfile->address = $validated['address'];
                $customerProfile->city = $validated['city'];
                $customerProfile->state = $validated['state'];
                $customerProfile->country = $validated['country'];
                $customerProfile->postal_code = $validated['postal_code'];
                $customerProfile->date_of_birth = $validated['date_of_birth'];

                // Handle profile image upload if provided
                if ($request->hasFile('profile_image')) {
                    $imagePath = $request->file('profile_image')->store('public/profile_images');
                    $customerProfile->profile_image = basename($imagePath);
                }
                // Save the updated customer profile
                $customerProfile->save();
            } else {
                $customerProfile = new Profile();
                $customerProfile->user_id = $customer->id;
                $customerProfile->phone = $validated['phone'];
                $customerProfile->address = $validated['address'];
                $customerProfile->city = $validated['city'];
                $customerProfile->state = $validated['state'];
                $customerProfile->country = $validated['country'];
                $customerProfile->postal_code = $validated['postal_code'];
                $customerProfile->date_of_birth = $validated['date_of_birth'];

                // Handle profile image upload if provided
                if ($request->hasFile('profile_image')) {
                    $imagePath = $request->file('profile_image')->store('public/profile_images');
                    $customerProfile->profile_image = basename($imagePath);
                }
                // Save the updated customer profile
                $customerProfile->save();
            }
        }
        // Redirect with a success message
        return redirect()->route('customer-management.index')
            ->with('success', 'Customer profile updated successfully!');
    }

    public function show() {}
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Find the user by ID
        $user->delete(); // Soft delete or hard delete based on your requirements

        return redirect()->route('customer-management.index')->with('status', 'User deleted successfully!');
    }
}
