<?php

namespace App\Http\Controllers\Board;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Topic;
use App\Models\TopicTag;
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
        $tags = Tag::all();
        return view('board.topics.create' , compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic;
        $topic->title = $request->title;
        $topic->content = $request->content;
        $topic->is_active = $request->filled('is_active') ? 1 : 0;
        $topic->image = basename($request->file('image')->store('topics'));
        $topic->user_id = Auth::id();
        $topic->save();

        if ($request->filled('tags')) {
            $topic_tags = [];
            for ($i=0; $i <count($request->tags) ; $i++) { 
                $topic_tags[] = new TopicTag([
                    'tag_id' => $request->tags[$i] , 
                    'user_id' => Auth::id() , 
                ]);
            }
            $topic->tags()->saveMany($topic_tags);
        }


        return redirect(route('board.topics.index'))->with('success'  , 'تم الاضفاه بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Topic $topic)
    {
        $topic->load(['user' , 'tags.tag' ]);
        return view('board.topics.show' , compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Topic $topic)
    {
        $tags = Tag::all();
        $topic_tags = $topic->tags()->pluck('tag_id')->toArray();
        return view('board.topics.edit' , compact('tags'  , 'topic' , 'topic_tags' ) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTopicRequest $request, Topic $topic)
    {
        $topic->title = $request->title;
        $topic->content = $request->content;
        $topic->is_active = $request->filled('is_active') ? 1 : 0;
        if ($request->filled('image')) {
            $topic->image = basename($request->file('image')->store('topics'));
        }
        $topic->save();

        if ($request->filled('tags')) {
            $topic->tags()->delete();
            $topic_tags = [];
            for ($i=0; $i <count($request->tags) ; $i++) { 
                $topic_tags[] = new TopicTag([
                    'tag_id' => $request->tags[$i] , 
                    'user_id' => Auth::id() , 
                ]);
            }
            $topic->tags()->saveMany($topic_tags);
        }

        return redirect(route('board.topics.index'))->with('success'  , 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
