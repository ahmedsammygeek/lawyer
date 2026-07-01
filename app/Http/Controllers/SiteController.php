<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category , Certificate , Product , Goal , Service };
use App\Http\Requests\Site\ContactUsRequest;
use Mail;
use App\Mail\ContactUsMail;
use App\Mail\SendOrderMail;
use App\Http\Requests\Site\StoreOrderRequest;

class SiteController extends Controller
{

    public function index()
    {
        $categories = Category::where('is_active' , 1)->get();
        $certificates = Certificate::where('is_active' , 1)->get();
        $products = Product::where('is_active' , 1)->latest()->take(6)->get();
        $offers = Product::where('is_active' , 1)->where('is_offer' , 1 )->latest()->take(6)->get();
        $goals = Goal::where('is_active' , 1)->latest()->get();
        return view('site.index' , compact('categories' , 'certificates' , 'products'  , 'offers'  , 'goals' ) );
    }


    public function shop(Request $request)
    {
        $categories = Category::withCount('products')->where('is_active' , 1)->get();
        $products = Product::where('is_active' , 1)
        ->when($request->category , function($query) use($request) {
            $query->where('category_id' , $request->category );
        })
        ->when($request->search , function($query) use($request) {
            $query->where('name->ar' , 'LIKE'  , '%'. $request->search.'%' )
            ->orWhere('name->en' , 'LIKE'  , '%'. $request->search.'%' );
        })
        ->when($request->sort , function($query) use($request) {
            switch ($request->sort) {
                case 'date':
                $query->orderBy('created_at' , 'DESC' );
                break;
                case 'low':
                $query->orderBy('price' , 'ASC' );
                break;
                case 'high':
                $query->orderBy('price' , 'DESC' );
                break;
            }
        })
        ->latest()
        ->get();

        $popular_products = Product::where('is_active' , 1)
        ->orderBy('views_count' , 'DESC' )
        ->take(4)
        ->get();

        $total = Product::count();
        return view('site.shop' , compact('products' , 'categories' , 'total' , 'popular_products'));
    }


    public function show_product(Product $product)
    {
        $related_products = Product::where('is_active' , 1)
        ->where('category_id' , $product->category_id )
        ->orderBy('views_count' , 'DESC' )
        ->take(4)
        ->get();

        $product->increment('views_count');

        return view('site.product', compact('product' , 'related_products') );
    }


    public function order(Product $product)
    {
        return view('site.order' , compact('product')); 
    }

    public function store_order(StoreOrderRequest $request ,  Product $product)
    {


        Mail::to('oliveelfairous@yahoo.com')->send(new SendOrderMail($request->all() , $product ));
        return back()->with('success' , 'تم الارسال بنجاح' );
    }

    public function about()
    {
        $certificates = Certificate::where('is_active' , 1)->get();
        $goals = Goal::where('is_active' , 1)->get();
        return view('site.about', compact('certificates' , 'goals'));
    }

    public function covering()
    {
        $services = Service::get();
        return view('site.covering', compact('services'));
    }

    public function offers()
    {
        return view('site.offers');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function privacy()
    {
        return view('site.privacy');
    }

    public function send(ContactUsRequest $request)
    {
        Mail::to('oliveelfairous@yahoo.com')->send(new ContactUsMail($request->all()));
        return back()->with('success' , 'تم الارسال بنجاح' );
    }
}
