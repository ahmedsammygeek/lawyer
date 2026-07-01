<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Board\Products\StoreProductRequest;
use App\Http\Requests\Board\Products\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Auth;
class ProductController extends Controller
{

    public function index()
    {
        return view('board.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('board.products.create'  , compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product;
        $product->setTranslation('name' , 'ar' , $request->name_ar );
        $product->setTranslation('name' , 'en' , $request->name_en );
        $product->setTranslation('content' , 'ar' , $request->content_ar );
        $product->setTranslation('content' , 'en' , $request->content_en );
        $product->user_id = Auth::id();
        $product->is_active = $request->filled('is_active') ? 1 : 0;
        $product->is_offer = $request->filled('is_offer') ? 1 : 0;
        $product->price = $request->price;
        $product->rate = $request->rate;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        $product->image = basename($request->file('image')->store('products'));
        if ($request->hasFile('banner')) {
            $product->banner = basename($request->file('banner')->store('products'));
        }
        $product->save();
            return redirect(route('board.products.index'))->with('success' , 'تم إضافه المنتج بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load(['user' ]);
        return view('board.products.show' , compact('product') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::get();
        return view('board.products.edit' , compact('product' , 'categories') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request,Product $product)
    {
        $product->setTranslation('name' , 'ar' , $request->name_ar );
        $product->setTranslation('name' , 'en' , $request->name_en );
        $product->setTranslation('content' , 'ar' , $request->content_ar );
        $product->setTranslation('content' , 'en' , $request->content_en );
        $product->is_active = $request->filled('is_active') ? 1 : 0;
        $product->is_offer = $request->filled('is_offer') ? 1 : 0;
        $product->price = $request->price;
        $product->rate = $request->rate;
        $product->discount = $request->discount;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $product->image = basename($request->file('image')->store('products'));
        }
        if ($request->hasFile('banner')) {
            $product->banner = basename($request->file('banner')->store('products'));
        }
        $product->save();

        return redirect(route('board.products.index'))->with('success' , 'تم تعديل المنتج بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
