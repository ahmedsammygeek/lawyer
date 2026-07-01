<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\Board\Settings\UpdateAboutRequest;
class AboutController extends Controller
{
    

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $settings = Setting::first();
        return view('board.about.edit' , compact('settings') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request)
    {
        $settings = Setting::first();
        $settings->setTranslation('about' , 'ar' , $request->about_ar );
        $settings->setTranslation('about' , 'en' , $request->about_en );
        if ($request->hasFile('about_banner')) {
            $settings->about_banner = basename($request->file('about_banner')->store('settings'));
        }
        if ($request->hasFile('about_image')) {
            $settings->about_image = basename($request->file('about_image')->store('settings'));
        }
        $settings->save();
        return redirect()->back()->with('success' , 'تم تعديل محتوى من نحن بنجاح' );
    }

   
}
