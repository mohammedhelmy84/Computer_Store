<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'category_type' => 'required|max:150',
            ],
            [
                'category_type.required' => 'حقل الصنف مطلوب',
            ]
        );

        $category = new Category();
        $category->category_type = $request->category_type;
        $category->category_notes = $request->category_notes;
        $category->user_id = auth()->user()->id;
        $category->save();
        return redirect()->route('category.create')->with('success', 'تم تسجيل الصنف بنجاح');
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
    public function edit(string $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'category_type' => 'required|max:150',
            ],
            [
                'category_type.required' => 'حقل الصنف مطلوب',
            ]
        );

        $category =  Category::findOrFail($id);
        $category->category_type = $request->input('category_type');
        $category->category_notes = $request->input('category_notes');
        $category->save();
        return redirect()->back()->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $category = Category::findOrFail($id);

        if ($category) {
            $category->delete();
            return redirect()->back()->with('success', 'تم الحذف بنجاح');
        }
    }
}
