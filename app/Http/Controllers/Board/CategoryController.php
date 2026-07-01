<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Board\Categories\StoreCategoryRequest;
use App\Http\Requests\Board\Categories\UpdateCategoryRequest;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category;
        $category->setTranslation('title' ,'ar' , $request->title_ar );
        $category->setTranslation('title' ,'en' , $request->title_en );
        $category->setTranslation('subtitle' ,'ar' , $request->subtitle_ar );
        $category->setTranslation('subtitle' ,'en' , $request->subtitle_en );
        $category->icon = basename($request->file('icon')->store('categories'));
        $category->image = basename($request->file('image')->store('categories'));
        $category->user_id = Auth::id();
        $category->is_active = $request->filled('is_active') ? 1 : 0;
        $category->save();


        return redirect(route('board.categories.index'))->with('success' ,'تم الاضافه بنجاح' );

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('board.categories.show' , compact('category') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('board.categories.edit' , compact('category') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request,Category $category)
    {

        $category->setTranslation('title' ,'ar' , $request->title_ar );
        $category->setTranslation('title' ,'en' , $request->title_en );
        $category->setTranslation('subtitle' ,'ar' , $request->subtitle_ar );
        $category->setTranslation('subtitle' ,'en' , $request->subtitle_en );
        if ($request->hasFile('icon')) {
            $category->icon = basename($request->file('icon')->store('categories'));
        }
        
        if ($request->hasFile('image')) {
            $category->image = basename($request->file('image')->store('categories'));
        }

        $category->is_active = $request->filled('is_active') ? 1 : 0;
        $category->save();


        return redirect(route('board.categories.index'))->with('success' ,'تم الاضافه بنجاح' );

        return redirect(route('board.categories.index'))->with('success' ,'تم التعديل بنجاح' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
