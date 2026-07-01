<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\Board\Tags\StoreTagRequest;
use App\Http\Requests\Board\Tags\UpdateTagRequest;
use Auth;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.tags.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->setTranslation('name' , 'ar' , $request->name );
        $tag->user_id = Auth::id();
        $tag->is_active = $request->filled('is_active') ? 1 : 0;
        $tag->save();

        return redirect(route('board.tags.index'))->with('success' , 'تم الاضافه بنجاح' );
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        $tag->load('user');
        return view('board.tags.show' , compact('tag') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return view('board.tags.edit' , compact('tag') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Tag $tag)
    {
        $tag->setTranslation('name' , 'ar' , $request->name );
        $tag->is_active = $request->filled('is_active') ? 1 : 0;
        $tag->save();

        return redirect(route('board.tags.index'))->with('success' , 'تم التعديل بنجاح' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
