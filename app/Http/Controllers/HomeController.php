<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\Message;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $carousel_items = Slider::with('translations')->limit(4)->get();
        $partners       = Partner::all();
        return view('home',compact('carousel_items','partners'));
    }

    public function about_us(){
        return view('about_us');
    }

    public function xammal(){
        return view('xammal');
    }

    public function product(){
        $products = Product::all();
        return view('product',compact('products'));
    }

    public function category($slug){
        $category_data = Category::whereSlug($slug)->first();
        $products      = Product::whereCategory($category_data->id)->get();
        return view('product-single', compact('category_data','products'));
    }

    public function delivery(){
        return view('delivery');
    }

    public function production(){
        return view('production');
    }

    public function gallery(){
        return view('gallery');
    }

    public function contact(){
        return view('contact');
    }

    public function contactPost(Request $request){
        $message = new Message;
        $message->fullname = $request->fullname;
        $message->email    = $request->email;
        $message->phone    = $request->phone;
        $message->company  = $request->company;

        try {
            $email = "info@bakupack.az";
            $title = "Baku Pack Saytindan mesaj var!";

            Mail::send('send_mail', ['fullname'=>$request->fullname,'email'   =>$request->email,'phone'   =>$request->phone,'company' =>$request->company ], 
            function($message) use ($email,$title){
                $message->to($email)->subject($title);
            });
            $message->save();
            return redirect()->back()->with('success','Mesajınız uğurla göndərildi');
          } catch (\Exception $e) {
            return $e->getMessage();
          }
    }
}