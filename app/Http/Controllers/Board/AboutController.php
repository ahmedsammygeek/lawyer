<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\Board\Settings\UpdateAboutRequest;
class AboutController extends Controller
{
    

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $about = About::first();
        return view('board.about.edit' , compact('about') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request)
    {
        $about = About::first();


        $about->setTranslation('name' , 'ar' , $request->name_ar );
        $about->setTranslation('name' , 'en' , $request->name_en );

        $about->setTranslation('job_title' , 'ar' , $request->job_title_ar );
        $about->setTranslation('job_title' , 'en' , $request->job_title_en );

        $about->setTranslation('quote' , 'ar' , $request->quote_ar );
        $about->setTranslation('quote' , 'en' , $request->quote_en );

        $about->setTranslation('left_text' , 'ar' , $request->left_text_ar );
        $about->setTranslation('left_text' , 'en' , $request->left_text_en );

        $about->setTranslation('right_text' , 'ar' , $request->right_text_ar );
        $about->setTranslation('right_text' , 'en' , $request->right_text_en );

        $about->setTranslation('bio' , 'ar' , $request->bio_ar );
        $about->setTranslation('bio' , 'en' , $request->bio_en );


        if ($request->hasFile('main_image')) {
            $about->main_image = basename($request->file('main_image')->store('about'));
        }
        if ($request->hasFile('bio_image')) {
            $about->bio_image = basename($request->file('bio_image')->store('about'));
        }
        $about->save();
        return redirect()->back()->with('success' , 'تم تعديل محتوى نبذة عني بنجاح' );
    }

   
}
