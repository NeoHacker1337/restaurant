<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Traits\commonFunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    use commonFunction;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::select('id', 'name', 'description', 'created_at')->where('created_by', Auth::user()->id);;

            return DataTables::of($categories)
                ->addIndexColumn()  // Add automatic row numbers
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('d M Y, h:i A');
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('categories.edit', $row->id);
                    $deleteUrl = route('categories.destroy', $row->id);

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

        return view('restaurant-panel.categories.index');
    }

    public function create()
    {
        return view('restaurant-panel.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $validated['created_by'] = Auth::user()->id;  // This gets the logged-in user's ID

        Category::create($validated);

        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    public function edit(Category $category)
    {
        return view('restaurant-panel.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $validated['created_by'] = Auth::user()->id;
        $category->update($validated);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
