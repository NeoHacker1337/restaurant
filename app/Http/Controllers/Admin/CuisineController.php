<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cuisine;
use Illuminate\Http\Request;

class CuisineController extends Controller
{
    public function index()
    {
        $cuisines = Cuisine::all();
        return view('admin-panel.cuisines.index', compact('cuisines'));
    }

    public function create()
    {
        return view('admin-panel.cuisines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cuisines_name' => 'required|string|max:255',
        ]);

        Cuisine::create($request->all());

        return redirect()->route('admin-panel.cuisines.index')->with('success', 'Cuisine created successfully.');
    }

    public function show(Cuisine $cuisine)
    {
        return view('admin-panel.cuisines.show', compact('cuisine'));
    }

    public function edit(Cuisine $cuisine)
    {
        return view('admin-panel.cuisines.edit', compact('cuisine'));
    }

    public function update(Request $request, Cuisine $cuisine)
    {
        $request->validate([
            'cuisines_name' => 'required|string|max:255',
        ]);

        $cuisine->update($request->all());

        return redirect()->route('admin-panel.cuisines.index')->with('success', 'Cuisine updated successfully.');
    }

    public function destroy(Cuisine $cuisine)
    {
        $cuisine->delete();

        return redirect()->route('admin-panel.cuisines.index')->with('success', 'Cuisine deleted successfully.');
    }
}
