<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Setting , Category , Topic};
use App\Http\Resources\{SettingResource , CategoryResource , TopicResource};
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(Request $request)
    {
        return response()->json([
            'informations' =>  new SettingResource('d') , 
        ], 200);
    }


    public function topics(Request $request)
    {
        $categories = Category::get();
        $topics = Topic::get();

        return response()->json([
            'topics' =>  TopicResource::collection($topics) , 
            'categories' =>  CategoryResource::collection($categories) , 
            'informations' =>  new SettingResource('d') , 
        ], 200);

    }


    public function show_topic(Request $request , Topic $topic )
    {
        $categories = Category::get();
        $topics = Topic::where('id' , '!=' , $topic->id )->inRandomOrder()->limit(5)->get();


        return response()->json([
            'topic' =>  new TopicResource($topic) , 
            'related_topics' =>  TopicResource::collection($topics) , 
            'categories' =>  CategoryResource::collection($categories) , 
            'informations' =>  new SettingResource('d') , 
        ], 200);

    }

   
}
