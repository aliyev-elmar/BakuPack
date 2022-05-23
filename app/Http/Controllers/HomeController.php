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

    public function product(){
        $products = Product::all();
        return view('product',compact('products'));
    }

    public function productSingle($slug){
        $category_data = Category::whereSlug($slug)->first();
        $products      = Product::whereCategory($category_data->id)->get();
        return view('product',compact('products','category_data'));
    }

    public function about_us(){
        return view('about_us');
    }

    public function xammal(){
        return view('xammal');
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

    public function productPost(Request $request){
        $categories = json_decode(json_encode($request->categories), true);
        if($categories[0] == "all-data"){
            //Butun kateqoriyalari secerse
            $category = (object) [
                'top_h1'     => 'Butun kateqoriyalarin h1i',
                'top_text'   => 'Butun kateqoriyalarin top texti',
                'bottom_h2'  => 'Butun kateqoriyalarin h2si',
                'bottom_text'=> 'Butun kateqoriyalarin bottom texti',
            ];
            $products = Product::all();
        }
        elseif(count($categories) > 1){
            //Iki kateqoriyani eyni zamanda secerse
            $category = (object) [
                'top_h1'     => 'Butun kateqoriyalarin h1i',
                'top_text'   => 'Butun kateqoriyalarin top texti',
                'bottom_h2'  => 'Butun kateqoriyalarin h2si',
                'bottom_text'=> 'Butun kateqoriyalarin bottom texti',
            ];
            $products = [];
            foreach($categories as $category_id){
                $product = Product::whereCategory($category_id)->get();
                array_push($products, $product);
            }  
        }else{
            //Sadece tek bir kateqoriyani secerse
            foreach($categories as $category_id){
                $category = Category::find($category_id);
                $products = Product::whereCategory($category_id)->get();
            }  
        }

        $data = ['category' => $category, 'products' => $products];
        return $data;
    }
}