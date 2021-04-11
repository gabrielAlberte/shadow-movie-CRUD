<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create($request->all());
        
        return redirect()->route('category.index')
            ->with('success', 'Category created successfully');

    }

    public function edit(Category $category)
    {
        return view('category.edit',compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')
            ->with('success', 'Category delete successfully');
    }

}
