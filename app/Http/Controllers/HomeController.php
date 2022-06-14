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
<<<<<<< HEAD
use App\Http\Requests\ContactRequest;
=======
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

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
<<<<<<< HEAD
        $categories = Category::withTranslations()->get();
        foreach($categories as $category){
            if($slug == $category->getTranslatedAttribute('slug', \App::getLocale(), 'az')){
                $seo           = ProductSeoPage::first();
                $category_data = Category::withTranslations()->whereSlug($category->slug)->first();
                if($category_data !== null){
                    $products      = Product::withTranslations()->whereCategory($category_data->id)->get();
                    return view('product',compact('products','category_data','seo'));
                }
            }
=======
        $seo           = ProductSeoPage::first();
        $category_data = Category::withTranslations()->whereSlug($slug)->first();
        if($category_data !== null){
            $products      = Product::withTranslations()->whereCategory($category_data->id)->get();
            return view('product',compact('products','category_data','seo'));
        }else{
            return redirect()->route("product");
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
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
<<<<<<< HEAD
        $seo = GallerySeoPage::first();
=======
         $seo = GallerySeoPage::first();
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
        return view('gallery',compact('seo'));
    }

    public function contact(){
        $seo = ContactSeoPage::first();
        return view('contact',compact('seo'));
    }

<<<<<<< HEAD
    public function contactPost(ContactRequest $request){
=======
    public function contactPost(Request $request){
        $validated = $request->validate([
            'fullname'=> 'required|max:255',
            'email'   => 'required|max:255',
            'phone'   => 'required|max:255',
            'company' => 'required|max:255',
        ]);
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b

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
        $seo        = ProductSeoPage::withTranslations()->first();
        $categories = json_decode(json_encode($request->categories), true);
        //data[]
        $slug          = "";
        $category_name = "";
        $top_h1        = "";
        $bottom_h2     = "";
        $bottom_text   = "";  
        $product_data  = array();

        if($categories[0] == "all-data"){
            //Butun kateqoriyalari secerse
<<<<<<< HEAD
            $meta_title       = $seo->getTranslatedAttribute("meta_title", \App::getLocale(), 'az');
            $meta_description = $seo->getTranslatedAttribute("meta_description", \App::getLocale(), 'az');
            $meta_keywords    = $seo->getTranslatedAttribute("meta_keywords", \App::getLocale(), 'az');
            $category         = (object) [ "data" => "all"];
            $products         = Product::withTranslations()->get();
            
            foreach($products as $product){ 
                array_push($product_data, [
                    'name' => $product->getTranslatedAttribute("name", \App::getLocale(), 'az'),
                    'image'=> $product->image,
                ]);
            }
        }
        elseif(count($categories) > 1){
            //Iki kateqoriyani eyni zamanda secerse
            $meta_title       = $seo->getTranslatedAttribute("meta_title", \App::getLocale(), 'az');
            $meta_description = $seo->getTranslatedAttribute("meta_description", \App::getLocale(), 'az');
            $meta_keywords    = $seo->getTranslatedAttribute("meta_keywords", \App::getLocale(), 'az');
            $category         = (object) [ "data" => "all"];
            $products         = [];

=======
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
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
            foreach($categories as $category_id){
                $product = Product::whereCategory($category_id)->withTranslations()->get();
                array_push($products,  $product);
            }
            
            foreach($products as $key => $value){
                foreach($value as $product){
                    array_push($product_data,  [
                        'name' => $product->getTranslatedAttribute("name", \App::getLocale(), 'az'),
                        'image'=> $product->image
                    ]);
                }
            }
        }else{
            //Sadece tek bir kateqoriyani secerse            
            foreach($categories as $category_id){
                $category = Category::withTranslations()->find($category_id);
                $products = Product::withTranslations()->whereCategory($category_id)->get();
                foreach($products as $product){
                    array_push($product_data,  [
                        'name' => $product->getTranslatedAttribute("name", \App::getLocale(), 'az'),
                        'image'=> $product->image
                    ]);
                }
            }
            $slug             = $category->getTranslatedAttribute("slug", \App::getLocale(), 'az');
            $category_name    = $category->getTranslatedAttribute("category_name", \App::getLocale(), 'az');
            $top_h1           = $category->getTranslatedAttribute("top_h1", \App::getLocale(), 'az');
            $bottom_h2        = $category->getTranslatedAttribute("bottom_h2", \App::getLocale(), 'az');
            $bottom_text      = $category->getTranslatedAttribute("bottom_text", \App::getLocale(), 'az');
            $meta_title       = $category->getTranslatedAttribute("meta_title", \App::getLocale(), 'az');
            $meta_description = $category->getTranslatedAttribute("meta_description", \App::getLocale(), 'az');
            $meta_keywords    = $category->getTranslatedAttribute("meta_keywords", \App::getLocale(), 'az');
        }

        $data = [
            'category'         => $category,
            'products'         => $products,
            'slug'             => $slug,
            'category_name'    => $category_name,
            'top_h1'           => $top_h1,
            'bottom_h2'        => $bottom_h2,
            'bottom_text'      => $bottom_text,
            'product_data'     => $product_data,
            'meta_title'       => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords'    => $meta_keywords
        ];
        return $data;
    }
}