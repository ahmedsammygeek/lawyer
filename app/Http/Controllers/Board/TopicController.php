<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Topic , Category};
use App\Http\Requests\Board\Topics\StoreTopicRequest;
use App\Http\Requests\Board\Topics\UpdateTopicRequest;

use Auth;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('board.topics.index' );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('board.topics.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic;
        $topic->setTranslation('title' , 'ar' , $request->title_ar );
        $topic->setTranslation('title' , 'en' , $request->title_en );
        $topic->setTranslation('content' , 'ar' , $request->content_ar );
        $topic->setTranslation('content' , 'en' , $request->content_en );



        $topic->is_active = $request->filled('is_active') ? 1 : 0;
        if ($request->hasFile('image')) {
            $topic->image = basename($request->file('image')->store('topics'));
        }
        $topic->user_id = Auth::id();
        $topic->category_id = $request->category_id;
        $topic->save();




        return redirect(route('board.topics.index'))->with('success'  , 'تم الاضفاه بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        $topic->load(['user' , 'category' ]);
        return view('board.topics.show' , compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        $categories = Category::all();
        return view('board.topics.edit' , compact('topic' , 'categories' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {

        $topic->setTranslation('title' , 'ar' , $request->title_ar );
        $topic->setTranslation('title' , 'en' , $request->title_en );
        $topic->setTranslation('content' , 'ar' , $request->content_ar );
        $topic->setTranslation('content' , 'en' , $request->content_en );
        $topic->category_id = $request->category_id;
        $topic->is_active = $request->filled('is_active') ? 1 : 0;
        if ($request->filled('image')) {
            $topic->image = basename($request->file('image')->store('topics'));
        }
        $topic->save();
        return redirect(route('board.topics.index'))->with('success'  , 'تم التعديل بنجاح');
    }

}
