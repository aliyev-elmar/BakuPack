@extends('layouts.master')
@section('meta_title'){{$seo->getTranslatedAttribute('meta_title', App::getLocale(), 'az')}}@endsection
@section('meta_description'){{$seo->getTranslatedAttribute('meta_description', App::getLocale(), 'az')}}@endsection
@section('meta_keywords'){{$seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az')}}@endsection
@section('content')
    <!-- Page Top -->
    <section id="delivery-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title">{{__('lang.Çatdırılma_single_title')}}</h2> <!--- <span> </span> --->
                    <p>{{__('lang.Çatdırılma_single_text')}}</p>
                </div>
                <div class="col-lg-5">
                    <img src="{{asset('front/assets/images/delivery.jpg')}}">
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb -->
    <section id="breadcrumb" class="main-section">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana_səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.Çatdırılma')}}</li>
            </ul>
        </div>
    </section>

    <!-- About -->

    <section id ='delivery-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <img src="{{asset('front/assets/images/a-4.jpg')}}" data-aos="fade-up">
                </div>
                <div class="col-12 col-lg-7">
                    <p class="delivery-title" data-aos="fade-up">{{__('lang.Çatdırılma')}}</p>
                    <p class="delivery-subtitle" data-aos="fade-up">{{__('lang.Çatdırılma_text')}}</p>
                </div>
                
            </div>
        </div>
    </section>
@endsection