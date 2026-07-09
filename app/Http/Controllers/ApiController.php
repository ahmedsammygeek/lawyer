<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Setting , Slide , Category , About , Topic , CaseStep , Goal , Service};
use App\Http\Resources\{SettingResource , SlideResource  , AboutResource , GoalResource , CategoryResource  , CaseStepResource, TopicResource , ServiceResource , HomeTopicResource};

use App\Http\Requests\Api\SendEmailRequest;
class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home(Request $request)
    {
        $services = Service::where('is_active' , 1)->get();
        $steps = CaseStep::get();
        $goals = Goal::where('is_active' , 1)->get();
        $topics = Topic::inRandomOrder()->limit(3)->get();
        $information = Setting::first();
        $slide = Slide::first();

        return response()->json([
            'services' => ServiceResource::collection($services) , 
            'case_steps' => CaseStepResource::collection($steps) , 
            'case_steps' => CaseStepResource::collection($steps) , 
            'goals' => GoalResource::collection($goals) , 
            'topics' => HomeTopicResource::collection($topics) , 
            'slide' => new SlideResource($slide) , 
            'informations' =>  new SettingResource($information) , 
        ], 200);
    }  

    public function about(Request $request)
    {
        $goals = Goal::where('is_active' , 1)->get();
        $about = About::first();
        $information = Setting::first();

        return response()->json([
            'about' => new AboutResource($about),
            'goals' => GoalResource::collection($goals) , 
            'informations' =>  new SettingResource($information) , 
        ], 200);
    }


    public function topics(Request $request)
    {
        $categories = Category::get();
        $topics = Topic::get();
        $information = Setting::first();

        return response()->json([
            'topics' =>  TopicResource::collection($topics) , 
            'categories' =>  CategoryResource::collection($categories) , 
            'informations' =>  new SettingResource($information) , 
        ], 200);

    }


    public function show_topic(Request $request , Topic $topic )
    {
        $categories = Category::get();
        $topics = Topic::where('id' , '!=' , $topic->id )->inRandomOrder()->limit(5)->get();
        $information = Setting::first();

        return response()->json([
            'topic' =>  new TopicResource($topic) , 
            'related_topics' =>  TopicResource::collection($topics) , 
            'categories' =>  CategoryResource::collection($categories) , 
            'informations' =>  new SettingResource($information) , 
        ], 200);

    }


    public function contact_us(Request $request )
    {
        $information = Setting::first();
        return response()->json([
            'informations' =>  new SettingResource($information) , 
        ], 200);
    }

    public function send_email(SendEmailRequest $request )
    {
        return response()->json( ['message' => 'تم استقبال رسالتك بنجاح'] ,  200);
    }

   
}
