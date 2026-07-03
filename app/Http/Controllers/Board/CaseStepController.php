<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Board\{StoreCaseStepRequest , UpdateCaseStepRequest};
use Auth;
use App\Models\CaseStep;
class CaseStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.case_steps.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.case_steps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCaseStepRequest $request)
    {
        $step = new CaseStep;
        $step->setTranslation('step_rank' , 'ar' , $request->step_rank_ar );
        $step->setTranslation('step_rank' , 'en' , $request->step_rank_en );
        $step->setTranslation('title' , 'ar' , $request->title_ar );
        $step->setTranslation('title' , 'en' , $request->title_en );
        $step->setTranslation('content' , 'ar' , $request->content_ar );
        $step->setTranslation('content' , 'en' , $request->content_en );
        $step->user_id = Auth::id();
        $step->save();

        return redirect(route('board.case_steps.index'))->with('success' , 'تم الاضافه بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseStep $case_step)
    {
        return view('board.case_steps.show' , compact('case_step'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseStep $case_step)
    {
        return view('board.case_steps.edit' , compact('case_step'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCaseStepRequest $request, CaseStep $case_step)
    {
        $case_step->setTranslation('step_rank' , 'ar' , $request->step_rank_ar );
        $case_step->setTranslation('step_rank' , 'en' , $request->step_rank_en );
        $case_step->setTranslation('title' , 'ar' , $request->title_ar );
        $case_step->setTranslation('title' , 'en' , $request->title_en );
        $case_step->setTranslation('content' , 'ar' , $request->content_ar );
        $case_step->setTranslation('content' , 'en' , $request->content_en );
        $case_step->save();

        return redirect(route('board.case_steps.index'))->with('success' , 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
