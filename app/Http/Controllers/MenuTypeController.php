<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\MenuType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class MenuTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = MenuType::select('id', 'name', 'end_time', 'start_time')->where('created_by', Auth::user()->id);

            return DataTables::of($categories)
                ->addIndexColumn()
                ->editColumn('end_time', function ($row) {
                    return Carbon::parse($row->end_time)->format('h:i A');
                })
                ->editColumn('start_time', function ($row) {
                    return Carbon::parse($row->start_time)->format('h:i A');
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('menu-types.edit', $row->id);
                    $deleteUrl = route('menu-types.destroy', $row->id);

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
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('restaurant-panel.menu-type.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurant-panel.menu-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
        $validated['created_by'] = Auth::user()->id;
        try {
            MenuType::create($validated);
            return redirect()->route('menu-types.index')->with('success', 'Menu Type created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('menu-types.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuType $menuType)
    {
        return view('restaurant-panel.menu-type.edit', compact('menuType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuType $menuType)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
        $validated['created_by'] = Auth::user()->id;
        $menuType->update($validated);

        return redirect()->route('menu-types.index')->with('success', 'Menu Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuType $menuType)
    {
        $menuType->delete();

        return redirect()->route('menu-types.index')->with('success', 'Menu Type deleted successfully.');
    }
}
