@extends('layouts.master')
@section('meta_title'){{$seo->getTranslatedAttribute('meta_title', App::getLocale(), 'az')}}@endsection
@section('meta_description'){{$seo->getTranslatedAttribute('meta_description', App::getLocale(), 'az')}}@endsection
@section('meta_keywords'){{$seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az')}}@endsection
@section('content')
    <!-- Page Top -->
    <section id="about-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('front/assets/images/a-1.jpg')}}">
                    <img src="{{asset('front/assets/images/a-2.jpg')}}">
                </div>
                <div class="col-lg-6">
                    <h1 class="title"><span>Baku</span> Pack</h1>
                    <p>{{__('lang.Haqqimizda_text')}}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb -->
    <section id="breadcrumb" class="main-section">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana_səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.Haqqimizda')}}</li>
            </ul>
        </div>
    </section>

    <!-- About -->
    <section id ='about-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <h2 class="about-title" data-aos="fade-up">{{__('lang.Xammal')}}</h2>
                    <p class="about-subtitle" data-aos="fade-up">{{__('lang.Xammal_text')}}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <img src="{{asset('front/assets/images/a-5.png')}}" data-aos="fade-up">
                </div>
                <div class="col-12 col-lg-5">
                    <img src="{{asset('front/assets/images/a-3.jpg')}}" data-aos="fade-up">
                </div>
                <div class="col-12 col-lg-7">
                    <span class="point"></span>
                    <span class="point-2"></span>
                    <h2 class="about-title" data-aos="fade-up">{{__('lang.Haqqimizda_peshakar')}}</h2>
                    <p class="about-subtitle" data-aos="fade-up">{{__('lang.Haqqimizda_peshakar_text')}}</p>
                </div>
                <div class="col-12 col-lg-7">
                    <h2 class="about-title" data-aos="fade-up">{{__('lang.Çatdırılma')}}</h2>
                    <p class="about-subtitle" data-aos="fade-up">{{__('lang.Çatdırılma_text')}}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <img src="{{asset('front/assets/images/a-4.jpg')}}" data-aos="fade-up">
                </div>
            </div>
        </div>
    </section>
@endsection