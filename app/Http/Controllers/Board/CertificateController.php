<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Board\Certificates\UpdateCertificateRequest;
use App\Http\Requests\Board\Certificates\StoreCertificateRequest;
use App\Models\Certificate;
class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.certificates.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCertificateRequest $request)
    {
        $Certificate = new Certificate;
        $Certificate->is_active = $request->filled('is_active') ?  1 : 0;
        $Certificate->user_id = Auth::id();
        $Certificate->setTranslation('content' , 'ar' , $request->title_ar);
        $Certificate->setTranslation('content' , 'en' , $request->title_en);
        $Certificate->save();


        return redirect(route('board.certificates.index'))->with('success' , 'تم الاضفه بنجاح');
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
    public function edit(Certificate $certificate)
    {
        return view('board.certificates.edit' , compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificateRequest $request, Certificate $certificate)
    {

        $certificate->is_active = $request->filled('is_active') ?  1 : 0;
        $certificate->setTranslation('content' , 'ar' , $request->title_ar);
        $certificate->setTranslation('content' , 'en' , $request->title_en);
        $certificate->save();


        return redirect(route('board.certificates.index'))->with('success' , 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
