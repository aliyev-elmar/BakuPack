@php 
    if(isset($category_data)){
        $page_meta_title       = $category_data->getTranslatedAttribute('meta_title', App::getLocale(), 'az');
        $page_meta_description = $category_data->getTranslatedAttribute('meta_description', App::getLocale(), 'az');
        $page_meta_keywords    = $category_data->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az');
        $bottom_text           = $category_data->getTranslatedAttribute('bottom_text', App::getLocale(), 'az');
    }else{
        $page_meta_title       = $seo->getTranslatedAttribute('meta_title', App::getLocale(), 'az');
        $page_meta_description = $seo->getTranslatedAttribute('meta_description', App::getLocale(), 'az');
        $page_meta_keywords    = $seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az');
        $bottom_text           = __('lang.Butun_kateqoriyalarin_bottom_texti');
    }

    $meta_keywords = explode("," , $page_meta_keywords);
    $keys_count    = count($meta_keywords);
@endphp
@extends('layouts.master')
<<<<<<< HEAD
@section('meta_title'){{$page_meta_title}}@endsection
@section('meta_description'){{$page_meta_description}}@endsection
@section('meta_keywords'){{$page_meta_keywords}}@endsection
=======
@section('meta_title'){{$seo->getTranslatedAttribute('meta_title', App::getLocale(), 'az')}}@endsection
@section('meta_description'){{$seo->getTranslatedAttribute('meta_description', App::getLocale(), 'az')}}@endsection
@section('meta_keywords'){{$seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az')}}@endsection
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
@section('content')
    <!-- Page Top -->
    <section id="about-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('front/assets/images/p-2.jpg')}}">
                    <img src="{{asset('front/assets/images/p-1.jpg')}}">
                </div>
                @php 
                    $title       = __('lang.Kataloq_title');
                    $title_words = explode(' ', $title);
                    $word_count  = count($title_words);
                @endphp
                <div class="col-lg-6">
<<<<<<< HEAD
                    <h2 class="title">
                        @for($i=0;$i<$word_count;$i++) @if($i==0) <span class="home-yellow">{{$title_words[$i]}}</span> @else {{$title_words[$i]}}  @endif @endfor
                    </h2>
                    <p>{{__('lang.Kataloq_text')}}</p>
=======
                    <h2 class="title"><span>Baku</span> Pack</h2>
                    <p>{{__('lang.Haqqimizda_text')}}</p>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb -->
    <section id="breadcrumb" class="main-section">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana_səhifə')}}</a></li>
<<<<<<< HEAD
                <li><i class="fas fa-slash"></i> <a href="{{route('product')}}">{{__('lang.Məhsullar')}}</a> <i class="fas fa-slash"></i></li>
=======
                <li><i class="fas fa-slash"></i> {{__('lang.Məhsullar')}} <i class="fas fa-slash"></i></li>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                <li class="cat_name">@if(@isset($category_data)) {{$category_data->getTranslatedAttribute('category_name', App::getLocale(), 'az')}} @endif</li>
            </ul>
        </div>
    </section>

    <!-- Product -->
    <section id ='product-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form class="category-name" method="POST">
                        @csrf
                        <h5>{{__('lang.Kateqoriyalar')}}</h5>
                        <label>
                            <input type="checkbox"  class="categories" name="categories[]" value="all-data" @if(!Request::segment(2)) checked @endif>
                            <span class="checkbox"></span>
                            {{__('lang.Bütün_məhsullar')}}
                        </label>
                        @foreach ($categories as $category)
                        <label>
                            <input type="checkbox" class="categories" name="categories[]" value="{{$category->id}}" @if(@isset($category_data) && ($category_data->category_name == $category->category_name) ) checked @endif>
                            <span class="checkbox"></span>
                            {{$category->getTranslatedAttribute('category_name', App::getLocale(), 'az')}}
                        </label>
                        @endforeach
                    </form>
                </div>
                <div class="col-lg-9">
                    <h1 class="title" id="top_h1" data-aos="fade-up">@if(@isset($category_data)) {!! $category_data->getTranslatedAttribute('top_h1', App::getLocale(), 'az') !!} @else {{__('lang.Butun_kateqoriyalarin_h1')}}  @endif</h1>
<<<<<<< HEAD
=======
                    <p id="top_text" data-aos="fade-up">@if(@isset($category_data)) {!! $category_data->getTranslatedAttribute('top_text', App::getLocale(), 'az') !!} @else {{__('lang.Butun_kateqoriyalarin_top_texti')}} @endif</p>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                    
                    <div class="products">
                        {{-- Data from ajax --}}
                        @foreach ($products as $product)
                        <div class='card' data-aos="fade-up">
                            <div class='card-img'>
                                <img src="{{asset('storage/'.$product->image)}}" 
                                @for($i=0;$i <$keys_count; $i++) 
                                    @if($i >= $loop->index) 
                                        alt="{{@trim($meta_keywords[$loop->index])}}" 
                                    @endif 
                                @endfor />
                            </div>
                            <p class='card-title'>{{$product->getTranslatedAttribute('name', App::getLocale(), 'az')}}</p>
                        </div>
                        @endforeach
                    </div>

                    <h2 class="title" id="bottom_h2" data-aos="fade-up">@if(@isset($category_data)) {!! $category_data->getTranslatedAttribute('bottom_h2', App::getLocale(), 'az') !!} @else {{__('lang.Butun_kateqoriyalarin_h2')}} @endif</h2>
<<<<<<< HEAD
                    <div id="bottom_text" data-aos="fade-up">{!! $bottom_text !!}</div>
=======
                    <p id="bottom_text" data-aos="fade-up">@if(@isset($category_data)) {!! $category_data->getTranslatedAttribute('bottom_text', App::getLocale(), 'az') !!} @else {{__('lang.Butun_kateqoriyalarin_bottom_texti')}} @endif</p>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

<script>
$('.categories').change(function() {

    if( $('.categories:checked').length){
        var categories = [];
        $('.categories:checked').each(function(i,v) {
            categories.push($(v).val());
        });
        $.ajax({
            url         :   '{{ route('product-post') }}',
            type        :   'POST',
            dataType    :   'json',
            data        :   { categories  :  categories, 
                _token :'{{ csrf_token() }}'
            },
            success     :   function ( data ) {
                
                let category = data.category;
                let products = data.products;
                let nextURL  = "{{route('product')}}";
                
                if (typeof data.slug !== 'undefined') {
                    nextURL   = "{{route('product')}}/"+data.slug;
                    $('.cat_name').text(data.category_name);
                }else{
                    $('.cat_name').text("{{__('lang.Qarışıq')}}");
                }  

                const nextTitle = data.category_name;
                const nextState = { additionalInformation: 'Updated the URL with JS' };
                window.history.pushState(nextState, nextTitle, nextURL);
                window.history.replaceState(nextState, nextTitle, nextURL);

                $('#top_h1').html('');
<<<<<<< HEAD
=======
                $('#top_text').html('');
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                $('#bottom_h2').html('');
                $('#bottom_text').html('');
                
                if(category.data === 'all'){
                    let top_h1      = "{{__('lang.Butun_kateqoriyalarin_h1')}}";
<<<<<<< HEAD
                    let bottom_h2   = "{{__('lang.Butun_kateqoriyalarin_h2')}}";
                    let bottom_text = "{{__('lang.Butun_kateqoriyalarin_bottom_texti')}}";
                    
                    $('title').html(data.meta_title);
                    $('meta[name=description]').attr('content',data.meta_description);
                    $('meta[name=keyword]').attr('content',data.meta_keywords);
                    $('#top_h1').html(top_h1);
                    $('#bottom_h2').html(bottom_h2);
                    $('#bottom_text').html(bottom_text);
                }else{
                    $('title').html(data.meta_title);
                    $('meta[name=description]').attr('content',data.meta_description);
                    $('meta[name=keyword]').attr('content',data.meta_keywords);
                    $('#top_h1').html(data.top_h1);
                    $('#bottom_h2').html(data.bottom_h2);
                    $('#bottom_text').html(data.bottom_text);
=======
                    let top_text    = "{{__('lang.Butun_kateqoriyalarin_top_texti')}}";
                    let bottom_h2   = "{{__('lang.Butun_kateqoriyalarin_h2')}}";
                    let bottom_text = "{{__('lang.Butun_kateqoriyalarin_bottom_texti')}}";

                    $('#top_h1').html(top_h1);
                    $('#top_text').html(top_text);
                    $('#bottom_h2').html(bottom_h2);
                    $('#bottom_text').html(bottom_text);
                }else{    
                console.log(category);
                    $('#top_h1').html(category.top_h1);
                    $('#top_text').html(category.top_text);
                    $('#bottom_h2').html(category.bottom_h2);
                    $('#bottom_text').html(category.bottom_text);
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                }

                let products_html = new Array();
                if(data.product_data.length > 0){
                    data.product_data.forEach((product) => {
                        if(Array.isArray(product)){
                            product.forEach((p) => {
                                let product_html = `<div class='card'><div class='card-img'><img src="{{asset('storage/${p.image}')}}" /></div><p class='card-title'>${p.name}</p></div>`;
                                products_html.push(product_html);
                                $('.products').empty();
                            })
                            if ($('.products').is(':empty')){
                                $('.products').append(products_html);
                            }
                        }else{
                            if(product.name){
                                let product_html = `<div class='card'><div class='card-img'><img src="{{asset('storage/${product.image}')}}" /></div><p class='card-title'>${product.name}</p></div>`;
                                products_html.push(product_html);
                                $('.products').empty();
                            }
                            $('.products').append(products_html);
                        }
                    })
                }
                else{
                    $('.products').empty();
                    $('.products').text("{{__('lang.Məhsul_yoxdur')}}");
                }
            }
        });
    }else{
        $('.products').empty();
        $('#top_h1').html('');
        $('#bottom_h2').html('');
        $('#bottom_text').html('');
        $('.products').text("{{__('lang.Məhsul_yoxdur')}}");
    }
});
</script>

@endpush