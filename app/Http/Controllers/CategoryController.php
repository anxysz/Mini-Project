<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $totalCategories = Category::count();
        return view('admin.category', compact('totalCategories', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create($request->all());

        return response()->json($category);
    }
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($validatedData);

        return response()->json([
            'category' => $category,
            'message' => 'Category updated successfully!'
        ]);
    }

    public function destroy(Category $category)
    {
        // Hapus kategori
        $category->delete();

        return response()->json(['success' => true]);
    }
}
