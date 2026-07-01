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
        $settings->setTranslation('site_name' , 'ar' , $request->site_name_ar );
        $settings->setTranslation('site_name' , 'en' , $request->site_name_en );
        $settings->setTranslation('address' , 'ar' , $request->address_ar );
        $settings->setTranslation('address' , 'en' , $request->address_ar );
        $settings->setTranslation('working_hours' , 'ar' , $request->working_hours_ar );
        $settings->setTranslation('working_hours' , 'en' , $request->working_hours_ar );
        $settings->email = $request->email;
        $settings->mobile = $request->mobile;
        $settings->youtube = $request->youtube;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->instagram = $request->instagram;
        $settings->whatsapp = $request->whatsapp;
        $settings->another_whatsapp = $request->another_whatsapp;
        $settings->snap_chat = $request->snap_chat;
        if ($request->hasFile('logo')) {
            $settings->logo = basename($request->file('logo')->store('settings'));
        }
        if ($request->hasFile('contact_banner')) {
            $settings->contact_banner = basename($request->file('contact_banner')->store('settings'));
        }
        if ($request->hasFile('shop_banner')) {
            $settings->shop_banner = basename($request->file('shop_banner')->store('settings'));
        }
        if ($request->hasFile('covering_banner')) {
            $settings->covering_banner = basename($request->file('covering_banner')->store('settings'));
        }
        $settings->save();
        return back()->with('success' , 'تم تعديل الاعدادات بنجاح' );
    }

    
}
