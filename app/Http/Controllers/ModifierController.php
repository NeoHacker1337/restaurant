<?php

namespace App\Http\Controllers;

use App\Models\Modifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ModifierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $categories = Modifier::select('id', 'name', 'price')->where('created_by',Auth::user()->id);
            return DataTables::of($categories)
                ->addIndexColumn()  // Add automatic row numbers                 
                ->addColumn('actions', function ($row) {
                    $editUrl = route('modifiers.edit', $row->id);
                    $deleteUrl = route('modifiers.destroy', $row->id);

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

        return view('restaurant-panel.modifiers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurant-panel.modifiers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        ]);
        $validated['created_by'] = Auth::user()->id;
        Modifier::create($validated);

        return redirect()->route('modifiers.index')->with('success', 'Modifiers created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modifier $Modifier)
    {
        return view('restaurant-panel.modifiers.edit', compact('Modifier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modifier $Modifier)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|regex:/^\d+(\.\d{1,2})?$/',
        ]);

        $validated['created_by'] = Auth::user()->id;
        $Modifier->update($validated);

        return redirect()->route('modifiers.index')->with('success', 'Modifiers updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modifier $Modifier)
    {
        $Modifier->delete();

        return redirect()->route('modifiers.index')->with('success', 'Modifiers deleted successfully.');
    }
}
