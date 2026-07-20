<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Setting , Slide , PageSeo , Category , About , Topic , CaseStep , Goal , Service};
use App\Http\Resources\{SettingResource , SlideResource , PageSeoResource  , AboutResource , GoalResource , CategoryResource  , CaseStepResource, TopicResource , ServiceResource , HomeTopicResource };

use App\Http\Requests\Api\SendEmailRequest;

use App\Mail\ContactUsMail;
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

        $page_seo = PageSeo::where('id', 1 )->first();

        return response()->json([
            'services' => ServiceResource::collection($services) , 
            'case_steps' => CaseStepResource::collection($steps) , 
            'case_steps' => CaseStepResource::collection($steps) , 
            'goals' => GoalResource::collection($goals) , 
            'topics' => HomeTopicResource::collection($topics) , 
            'slide' => new SlideResource($slide) , 
            'informations' =>  new SettingResource($information) , 
            'seo_details' => PageSeoResource::make($page_seo)
        ], 200);
    }  

    public function about(Request $request)
    {
        $goals = Goal::where('is_active' , 1)->get();
        $about = About::first();
        $information = Setting::first();

        $page_seo = PageSeo::where('id', 2 )->first();

        return response()->json([
            'about' => new AboutResource($about),
            'goals' => GoalResource::collection($goals) , 
            'informations' =>  new SettingResource($information) , 
            'seo_details' => PageSeoResource::make($page_seo) , 
        ], 200);
    }


    public function topics(Request $request)
    {
        $categories = Category::get();
        $topics = Topic::get();
        $information = Setting::first();

        $page_seo = PageSeo::where('id', 3 )->first();

        return response()->json([
            'topics' =>  HomeTopicResource::collection($topics) , 
            'categories' =>  CategoryResource::collection($categories) , 
            'informations' =>  new SettingResource($information) , 
            'seo_details' => PageSeoResource::make($page_seo),

        ], 200);

    }


    public function show_topic(Request $request , Topic $topic )
    {
        $categories = Category::get();
        $topics = Topic::where('id' , '!=' , $topic->id )->inRandomOrder()->limit(5)->get();
        $information = Setting::first();


        $topic->views_count = $topic->views_count + 1;
        $topic->save();

        $page_seo = PageSeo::where('id', 3 )->first();

        return response()->json([
            'topic' =>  new TopicResource($topic) , 
            'related_topics' =>  HomeTopicResource::collection($topics) , 
            'categories' =>  CategoryResource::collection($categories) , 
            'informations' =>  new SettingResource($information) , 
            'seo_details' => PageSeoResource::make($page_seo),
        ], 200);

    }


    public function contact_us(Request $request )
    {
        $information = Setting::first();
        $page_seo = PageSeo::where('id', 4 )->first();
        return response()->json([
            'informations' =>  new SettingResource($information) , 
            'seo_details' => PageSeoResource::make($page_seo),
        ], 200);
    }

    public function send_email(SendEmailRequest $request )
    {
        Mail::to('alishamsi309@gmail.com')->send(new ContactUsMail());
        return response()->json( ['message' => 'تم استقبال رسالتك بنجاح'] ,  200);
    }


}
