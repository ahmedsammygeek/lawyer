<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\Board\Settings\UpdateSettingsRequest;
class SettingsController extends Controller
{
   
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $settings = Setting::first();
        return view('board.settings.edit' , compact('settings') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSettingsRequest $request)
    {
        $settings = Setting::first();

        $settings->setTranslation('address' , 'ar' , $request->address_ar );
        $settings->setTranslation('address' , 'en' , $request->address_ar );
        $settings->setTranslation('working_hours' , 'ar' , $request->working_hours_ar );
        $settings->setTranslation('working_hours' , 'en' , $request->working_hours_ar );

        $settings->email = $request->email;
        $settings->mobile = $request->mobile;

        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->instagram = $request->instagram;
        $settings->snap_chat = $request->snap_chat;
        $settings->tiktok = $request->tiktok;


        $settings->save();
        return back()->with('success' , 'تم تعديل الاعدادات بنجاح' );
    }

    
}
