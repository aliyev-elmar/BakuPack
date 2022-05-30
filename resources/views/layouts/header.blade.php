<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Baku Pack')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keywords')">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon.svg')}}">
    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" />
    <!-- AOS -->
    <link rel="stylesheet" href="{{asset('front/assets/aos/aos.css')}}" />
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <a href="{{route('home')}}" class="logo">
                <img src="{{asset('front/assets/images/logo.svg')}}"/>
            </a>
            <div class="menu-btn"></div>
            <div class="header-menu">
                <nav>
                    <ul class="menu">
                        <li><a href="{{route('about_us')}}" @if(Route::is('about_us')) class="active" @endif)>{{__('lang.Haqqimizda')}}</a></li>
                        <li><a href="{{route('xammal')}}"   @if(Route::is('xammal')) class="active" @endif>{{__('lang.Xammal')}}</a></li>
                        <li class="dropdown"><a href="{{route('product')}}" @if(Route::is('product')) class="active" @endif>{{__('lang.Məhsullar')}}</a> <i class="fas fa-angle-down"></i>
                            <ul class="submenu">
                                <li class="categroy_li">
                                <a href="{{route('product')}}" @if(Route::is('product')) class="active" @endif>{{__('lang.Bütün_məhsullar')}}</a>
                                </li>
                                @foreach ($categories as $category)
                                    <form class="post_cat" action="{{ route('product-single-post' ,$category->getTranslatedAttribute('slug', App::getLocale(), 'az')) }}" method="post">
                                        @csrf
                                        <li><a><button name="category_id" type="submit" value="{{$category->id}}">{{$category->getTranslatedAttribute('category_name', App::getLocale(), 'az')}}</button></a></li>
                                    </form>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('delivery')}}"  @if(Route::is('delivery')) class="active" @endif>{{__('lang.Çatdırılma')}}</a></li>
                        <li><a href="{{route('production')}}"@if(Route::is('production')) class="active" @endif>{{__('lang.İstehsal_prosesi')}}</a></li>
                        <li><a href="{{route('gallery')}}"   @if(Route::is('gallery')) class="active" @endif>{{__('lang.Qalereya')}}</a></li>
                        <li><a href="{{route('contact')}}"   @if(Route::is('contact')) class="active" @endif>{{__('lang.Əlaqə')}}</a></li>
                    </ul>
                </nav>
                <div class="lang">
                    <span>{{strtoupper(App::getLocale())}} <i class="fas fa-angle-down"></i></span>
                    <ul>
                        <li><a href="/"   class="lang">AZ</a></li>
                        <li><a href="/en" class="lang">EN</a></li>
                        <li><a href="/ru" class="lang">RU</a></li>

                    </ul>
                </div>
            </div>
            
        </div>
    </header>