<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <title>Baku Pack</title>
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
                        <li><a href="{{route('about_us')}}">Haqqımızda</a></li>
                        <li><a href="{{route('xammal')}}">Xammal</a></li>
                        <li class="dropdown"><a href="{{route('product')}}">Məhsullar</a> <i class="fas fa-angle-down"></i>
                            <ul class="submenu">
                                <li><a href="{{route('product')}}">Bütün məhsullar</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route("product-single", $category->slug) }}">{{$category->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('delivery')}}">Çatdırılma</a></li>
                        <li><a href="{{route('production')}}">İstehsal prosesi</a></li>
                        <li><a href="{{route('gallery')}}">Qalereya</a></li>
                        <li><a href="{{route('contact')}}">Əlaqə</a></li>
                    </ul>
                </nav>
                <div class="lang">
                    <span>AZ <i class="fas fa-angle-down"></i></span>
                    <ul>
                        <li><a href="">AZ</a></li>
                        <li><a href="">EN</a></li>
                        <li><a href="">RU</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </header>