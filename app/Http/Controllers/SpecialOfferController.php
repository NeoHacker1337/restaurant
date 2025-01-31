<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialOffer;
use App\Models\MenuItem;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class SpecialOfferController extends Controller
{
    // Show all special offers

    public function index(Request $request)
    {
        if ($request->ajax()) {
            // Query the SpecialOffer model with related menuItem, and select the necessary fields
            $specialOffers = SpecialOffer::with('menuItem')
                ->select(['id', 'offer_name', 'discount_percentage', 'valid_from', 'valid_to', 'menu_item_id', 'price_in_type', 'coupon_code', 'limit'])
                ->get();
    
            // Format dates and add the formatted values to the response
            $formattedOffers = $specialOffers->map(function ($offer) {
                // Check if the dates are already Carbon instances (due to the casts)
                if ($offer->valid_from instanceof \Carbon\Carbon) {
                    $offer->valid_from = $offer->valid_from->format('Y-m-d H:i:s');
                }
                if ($offer->valid_to instanceof \Carbon\Carbon) {
                    $offer->valid_to = $offer->valid_to->format('Y-m-d H:i:s');
                }
                return $offer;
            });
    
            return DataTables::of($formattedOffers)
                ->addIndexColumn()  // Add automatic row numbers
                ->addColumn('menu_item_name', function ($row) {
                    return $row->menuItem ? $row->menuItem->name : 'N/A'; // Display the menu item's name
                })
                ->addColumn('coupon_code', function ($row) {
                    return $row->coupon_code ?? 'N/A';
                })
                ->addColumn('limit', function ($row) {
                    return $row->limit ?? '0';
                })
                ->addColumn('actions', function ($row) {
                    // Construct the edit and delete URLs
                    $editUrl = route('special-offers.edit', $row->id);
                    $deleteUrl = route('special-offers.destroy', $row->id);
    
                    return '<div class="flex gap-2">' .
                        '<a href="' . $editUrl . '" class="px-3 py-2 bg-blue-500 inline-block rounded hover:bg-blue-600">' .
                        '<i class="fas fa-edit"></i> Edit' .
                        '</a>' .
                        '<form action="' . $deleteUrl . '" method="POST" class="delete-form">' .
                        csrf_field() .
                        method_field('DELETE') .
                        '<button type="submit" class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600">' .
                        '<i class="fas fa-trash"></i> Delete' .
                        '</button>' .
                        '</form>' .
                        '</div>';
                })
                ->rawColumns(['actions']) // Make sure actions column is rendered as raw HTML
                ->make(true);
        }
    
        // Return the view if it's not an AJAX request
        return view('restaurant-panel.special-offers.index');
    }
    


    // Show the form to create a new special offer
    public function create()
    {
        $menuItems = MenuItem::all();
        return view('restaurant-panel.special-offers.create', compact('menuItems'));
    }

    // Store a new special offer
    public function store(Request $request)
    {
        $validated = $request->validate([
            'menu_item_id' => 'required|exists:menu_items,id',
            'offer_name' => 'required|string|max:255',
            'price_in_type' => 'required|in:number,percentage',  // New validation rule for price_in_type           
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'valid_from' => 'required|date|after_or_equal:today',
            'valid_to' => 'required|date|after:valid_from',
            'coupon_code' => 'nullable|string|max:255',  // Validation for the coupon_code field
            'limit' => 'nullable|integer|min:1',  // Validation for the limit field
        ]);

        // Create new SpecialOffer with the validated data
        SpecialOffer::create([
            'menu_item_id' => $validated['menu_item_id'],
            'offer_name' => $validated['offer_name'],
            'price_in_type' => $validated['price_in_type'],  // Save price_in_type            
            'discount_percentage' => $validated['discount_percentage'],
            'valid_from' => $validated['valid_from'],
            'valid_to' => $validated['valid_to'],
            'coupon_code' => $validated['coupon_code'],  // Save coupon_code if present
            'limit' => $validated['limit'],  // Save limit if present
            
        ]);

        return redirect()->route('special-offers.index')->with('success', 'Special offer created successfully.');
    }


    // Show the form to edit a special offer
    public function edit(SpecialOffer $specialOffer)
    {
        $menuItems = MenuItem::all();
        return view('restaurant-panel.special-offers.edit', compact('specialOffer', 'menuItems'));
    }

    // Update an existing special offer
    public function update(Request $request, SpecialOffer $specialOffer)
    {
        $validated = $request->validate([
            'menu_item_id' => 'required|exists:menu_items,id',
            'offer_name' => 'required|string|max:255',
            'price_in_type' => 'required|in:number,percentage',  // New validation rule for price_in_type           
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'valid_from' => 'required|date|after_or_equal:today',
            'valid_to' => 'required|date|after:valid_from',
            'coupon_code' => 'nullable|string|max:255',  // Validation for the coupon_code field
            'limit' => 'nullable|integer|min:1',
        ]);

        $specialOffer->update($validated);

        return redirect()->route('special-offers.index')->with('success', 'Special offer updated successfully.');
    }

    // Delete a special offer
    public function destroy(SpecialOffer $specialOffer)
    {
        $specialOffer->delete();
        return redirect()->route('special-offers.index')->with('success', 'Special offer deleted successfully.');
    }
}
