<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goal;
use Auth;
use App\Http\Requests\Board\Goals\StoreGoalRequest;
use App\Http\Requests\Board\Goals\UpdateGoalRequest;
class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.goals.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('board.goals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGoalRequest $request)
    {
        $goal = new Goal;
        $goal->setTranslation('title' , 'ar' , $request->title_ar );
        $goal->setTranslation('content' , 'ar' , $request->content_ar );
        $goal->setTranslation('title' , 'en' , $request->title_en );
        $goal->setTranslation('content' , 'en' , $request->content_en );
        $goal->user_id = Auth::id();
        $goal->is_active = $request->filled('is_active') ? 1 : 0;
        $goal->image = basename($request->file('image')->store('goals'));
        $goal->save();

        return redirect(route('board.goals.index'))->with('success' , 'تم الاضافه بنجاح' );
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        return view('board.goals.show' ,compact('goal') );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        return view('board.goals.edit' , compact('goal') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Goal $goal)
    {
        $goal->setTranslation('title' , 'ar' , $request->title_ar );
        $goal->setTranslation('content' , 'ar' , $request->content_ar );
        $goal->setTranslation('title' , 'en' , $request->title_en );
        $goal->setTranslation('content' , 'en' , $request->content_en );

        $goal->is_active = $request->filled('is_active') ? 1 : 0;
        if ($request->hasFile('image')) {
            $goal->image = basename($request->file('image')->store('goals'));
        }
        $goal->save();

        return redirect(route('board.goals.index'))->with('success' , 'تم التعديل بنجاح' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
