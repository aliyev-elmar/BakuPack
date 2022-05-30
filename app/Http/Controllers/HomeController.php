<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\Message;
use App\Models\Category;
use App\Models\Product;
use App\Models\HomeSeoPage;
use App\Models\AbuotusSeoPage;
use App\Models\XammalSeoPage;
use App\Models\ProductSeoPage;
use App\Models\DeliverySeoPage;
use App\Models\ProductionSeoPage;
use App\Models\GallerySeoPage;
use App\Models\ContactSeoPage;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $home_seo       = HomeSeoPage::first();
        $carousel_items = Slider::with('translations')->limit(4)->get();
        $partners       = Partner::all();
        return view('home',compact('carousel_items','partners','home_seo'));
    }

    public function product(){
        $seo      = ProductSeoPage::first();
        $products = Product::withTranslations()->get();
        return view('product',compact('products','seo'));
    }

    public function productSingle($slug){
        $seo           = ProductSeoPage::first();
        $category_data = Category::withTranslations()->whereSlug($slug)->first();
        if($category_data !== null){
            $products      = Product::withTranslations()->whereCategory($category_data->id)->get();
            return view('product',compact('products','category_data','seo'));
        }else{
            return redirect()->route("product");
        }
    }

    public function productSinglePost(Request $request){
        $seo           = ProductSeoPage::first();
        $category_data = Category::withTranslations()->whereId($request->category_id)->first();
        $products      = Product::withTranslations()->whereCategory($request->category_id)->get();
        return  view('product',compact('products','category_data','seo'));
    } 

    public function about_us(){
        $seo = AbuotusSeoPage::first();
        return view('about_us',compact('seo'));
    }

    public function xammal(){
        $seo = XammalSeoPage::first();
        return view('xammal',compact('seo'));
    }

    public function delivery(){
        $seo = DeliverySeoPage::first();
        return view('delivery',compact('seo'));
    }

    public function production(){
        $seo = ProductionSeoPage::first();
        return view('production',compact('seo'));
    }

    public function gallery(){
         $seo = GallerySeoPage::first();
        return view('gallery',compact('seo'));
    }

    public function contact(){
        $seo = ContactSeoPage::first();
        return view('contact',compact('seo'));
    }

    public function contactPost(Request $request){
        $validated = $request->validate([
            'fullname'=> 'required|max:255',
            'email'   => 'required|max:255',
            'phone'   => 'required|max:255',
            'company' => 'required|max:255',
        ]);

        $message = new Message;
        $message->fullname = $validated['fullname'];
        $message->email    = $validated['email'];
        $message->phone    = $validated['phone'];
        $message->company  = $validated['company'];

        try {
            $email = "info@bakupack.az";
            $title = "Baku Pack Saytından mesaj var!";

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
                "data"     => "all",
            ];
            $products = Product::all();
        }
        elseif(count($categories) > 1){
            //Iki kateqoriyani eyni zamanda secerse
            $category = (object) [
               "data" => "all",
            ];
            $products = [];
            foreach($categories as $category_id){
                $product = Product::withTranslations()->whereCategory($category_id)->get();
                array_push($products, $product);
            }  
        }else{
            //Sadece tek bir kateqoriyani secerse
            foreach($categories as $category_id){
                $category = Category::withTranslations()->find($category_id);
                $products = Product::withTranslations()->whereCategory($category_id)->get();
            }  
        }

        $data = ['category' => $category, 'products' => $products];
        return $data;
    }
}