@extends('layouts.master')
@section('meta_title'){{$seo->getTranslatedAttribute('meta_title', App::getLocale(), 'az')}}@endsection
@section('meta_description'){{$seo->getTranslatedAttribute('meta_description', App::getLocale(), 'az')}}@endsection
@section('meta_keywords'){{$seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az')}}@endsection
@section('content')
    <!-- Breadcrumb -->
    <section id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana_səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.İstehsal_prosesi')}}</li>
            </ul>
        </div>
    </section>
    <!--Production-->

    <section id="production">
        <div class="container">

            <div class="title-div">
                <h1 class="title" data-aos="fade-up">{{__('lang.İstehsal_prosesi')}}</h1>
            </div>
           
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="production-title" data-aos="fade-up">{{__('lang.İstehsal_prosesi_top_title')}}</h2>
                    <p class="production-subtitle" data-aos="fade-up">{{__('lang.İstehsal_prosesi_top_text')}}</p>
                </div>
                @php
                    $keywords = $seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az');
                    $keys_arr = explode(",", $keywords);
                @endphp
                <div class="col-lg-6"><img src="{{asset('front/assets/images/istehsal-1.jpg')}}" data-aos="fade-up" alt="{{$keys_arr[0]}}"></div>
                <div class="col-lg-6"><img src="{{asset('front/assets/images/istehsal-2.jpg')}}" data-aos="fade-up"></div>
                <div class="col-lg-6">
                    <span class="point"></span>
                    <h2 class="production-title" data-aos="fade-up">{{__('lang.İstehsal_prosesi_bottom_title')}}</h2>
                    <p class="production-subtitle" data-aos="fade-up">{{__('lang.İstehsal_prosesi_bottom_text')}}</p>
                </div>
                
            </div>
        </div>
    </section>
@endsection