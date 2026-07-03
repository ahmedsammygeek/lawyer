<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Slide;
use App\Http\Requests\Board\Slides\{StoreSlideRequest , UpdateSlideRequest};
class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.slides.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSlideRequest $request)
    {
        $Slide = new Slide;
        $Slide->setTranslation('title' , 'ar' , $request->title_ar);
        $Slide->setTranslation('title' , 'en' , $request->title_en);
        $Slide->setTranslation('subtitle' , 'ar' , $request->subtitle_ar);
        $Slide->setTranslation('subtitle' , 'en' , $request->subtitle_en);
        $Slide->setTranslation('content' , 'ar' , $request->content_ar);
        $Slide->setTranslation('content' , 'en' , $request->content_en);
        $Slide->setTranslation('head_title' , 'ar' , $request->head_title_ar);
        $Slide->setTranslation('head_title' , 'en' , $request->head_title_en);
        $Slide->is_active = $request->filled('is_active') ? 1 : 0;
        $Slide->user_id = Auth::id();
        $Slide->image = basename($request->file('image')->store('slides'));
        $Slide->save();

        return redirect()->back()->with('success' , 'تم الاضافه بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slide $slide)
    {
        return view('board.slides.show' , compact('slide'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slide $slide)
    {
        return view('board.slides.edit' , compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSlideRequest $request, Slide $slide)
    {
        $slide->setTranslation('title' , 'ar' , $request->title_ar);
        $slide->setTranslation('title' , 'en' , $request->title_en);
        $slide->setTranslation('subtitle' , 'ar' , $request->subtitle_ar);
        $slide->setTranslation('subtitle' , 'en' , $request->subtitle_en);
        $slide->setTranslation('content' , 'ar' , $request->content_ar);
        $slide->setTranslation('content' , 'en' , $request->content_en);
        $slide->setTranslation('head_title' , 'ar' , $request->head_title_ar);
        $slide->setTranslation('head_title' , 'en' , $request->head_title_en);
        $slide->is_active = $request->filled('is_active') ? 1 : 0;
        if ($request->hasFile('image')) {
            $slide->image = basename($request->file('image')->store('slides'));
        }
        $slide->save();

        return redirect()->back()->with('success' , 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
