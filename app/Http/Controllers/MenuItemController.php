<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuItem;
use App\Models\MenuType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the menu items.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $menuItems = MenuItem::with(['category', 'menuType']) // Load relationships
                ->select('id', 'name', 'price', 'image', 'category_id', 'menu_type_id', 'veg_non_veg', 'created_at', 'description', 'availability_status',);

            return DataTables::of($menuItems)
                ->addIndexColumn()  // Add automatic row numbers
                ->editColumn('image', function ($row) {
                    return $row->image
                        ? '<img src="' . asset('storage/app/public/' . $row->image) . '" class="h-10 w-10 rounded-full">'
                        : 'No Image';
                })

                ->editColumn('category', function ($row) {
                    return $row->category ? $row->category->name : 'N/A';
                })
                ->editColumn('menu_type', function ($row) {
                    return $row->menuType ? $row->menuType->name : 'N/A';
                })
                ->editColumn('veg_non_veg', function ($row) {
                    return $row->veg_non_veg;
                })
                ->editColumn('description', function ($row) {
                    return $row->description ?? 'No Description'; // Handle null values
                })
                ->editColumn('availability_status', function ($row) {
                    return $row->availability_status;
                })

                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('d M Y, h:i A');
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('menu-items.edit', $row->id);
                    $deleteUrl = route('menu-items.destroy', $row->id);

                    return '<div class="flex gap-2">' .
                        '<a href="' . $editUrl . '" class="px-3 py-2 bg-blue-500 rounded hover:bg-blue-600">' .
                        '<i class="fas fa-edit"></i> Edit' .
                        '</a>' .
                        '<form action="' . $deleteUrl . '" method="POST" class="delete-form">' .
                        csrf_field() .
                        method_field('DELETE') .
                        '<button type="submit" class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600 delete-btn" data-id="' . $row->id . '">' .
                        '<i class="fas fa-trash"></i> Delete' .
                        '</button>' .
                        '</form>' .
                        '</div>';
                })
                ->rawColumns(['image', 'veg_non_veg', 'actions'])
                ->make(true);
        }

        return view('restaurant-panel.menu_items.index');
    }


    /**
     * Show the form for creating a new menu item.
     */
    public function create()
    {
        $categories = Category::all();
        $menuTypes = MenuType::all();
        return view('restaurant-panel.menu_items.create', compact('categories', 'menuTypes'));
    }


    /**
     * Store a newly created menu item in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'menu_type_id' => 'required|exists:menu_types,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'availability_status' => 'nullable|boolean',  // Made nullable for flexibility
            'veg_non_veg' => 'required|in:veg,non-veg',  // Added validation for veg_non_veg
        ]);

        // Initialize data to store
        $data = $validated;

        // Handle image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('menu_images', 'public');
        }

        // Wrap the process in a try-catch block to handle exceptions
        try {

            $data['created_by'] = Auth::user()->id;
            // Create the menu item with the validated data
            MenuItem::create($data);

            // Return success response
            return redirect()->route('menu-items.index')->with('success', 'Menu item created successfully.');
        } catch (\Exception $e) {
            // Log the error (optional)
            Log::error('Error creating menu item: ' . $e->getMessage());

            // Return failure response with error message
            return back()->with('error', 'Failed to create menu item. Please try again later.');
        }
    }

    /**
     * Show the form for editing the specified menu item.
     */
    public function edit(MenuItem $menuItem)
    {
        $categories = Category::all();
        $menuTypes = MenuType::all();

        return view('restaurant-panel.menu_items.edit', compact('menuTypes', 'categories', 'menuItem'));
    }

    /**
     * Update the specified menu item in storage.
     */
    public function update(Request $request, MenuItem $menuItem)
    {

        // Validate the incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'menu_type_id' => 'required|exists:menu_types,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
            'availability_status' => 'nullable|boolean',  // Made nullable for flexibility
            'veg_non_veg' => 'required|in:veg,non-veg',  // Added validation for veg_non_veg
        ]);

        // Initialize data to store
        $data = $validated;
        $data['created_by'] = Auth::user()->id;
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if a new one is uploaded
            if ($menuItem->image) {
                Storage::disk('public')->delete($menuItem->image);
            }
            // Store the new image
            $data['image'] = $request->file('image')->store('menu_images', 'public');
        }

        // Wrap the update process in a try-catch block
        try {
            // Update the menu item with the validated data
            $menuItem->update($data);

            // Return success response
            return redirect()->route('menu-items.index')->with('success', 'Menu item updated successfully.');
        } catch (\Exception $e) {
            // Log the error (optional)
            Log::error('Error updating menu item: ' . $e->getMessage());

            // Return failure response with error message
            return back()->with('error', 'Failed to update menu item. Please try again later.');
        }
    }


    /**
     * Remove the specified menu item from storage.
     */
    public function destroy(MenuItem $menuItem)
    {
        $menuItem->delete();

        return redirect()->route('menu-items.index')->with('success', 'Menu item deleted successfully.');
    }
}
