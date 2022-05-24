@extends('layouts.master')
@section('content')
    <!-- Page Top -->
    <section id="about-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="front/assets/images/a-1.jpg">
                    <img src="front/assets/images/a-2.jpg">
                </div>
                <div class="col-lg-6">
                    <h2 class="title"><span>Baku</span> Pack</h2>
                    <p>{{__('lang.Haqqimizda_text')}}</p>
                </div>
            </div>
            
            
        </div>
    </section>
    <!-- Breadcrumb -->
    <section id="breadcrumb" class="main-section">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.Haqqimizda')}}</li>
            </ul>
        </div>
    </section>

    <!-- About -->
    <section id ='about-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7">
                    <p class="about-title">{{__('lang.Xammal')}}</p>
                    <p class="about-subtitle">{{__('lang.Xammal_text')}}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <img src="front/assets/images/a-5.png">
                </div>
                <div class="col-12 col-lg-5">
                    <img src="front/assets/images/a-3.jpg">
                </div>
                <div class="col-12 col-lg-7">
                    <span class="point"></span>
                    <span class="point-2"></span>
                    <p class="about-title">{{__('lang.Haqqimizda_peshakar')}}</p>
                    <p class="about-subtitle">{{__('lang.Haqqimizda_peshakar_text')}}</p>
                </div>
                <div class="col-12 col-lg-7">
                    <p class="about-title">{{__('lang.Çatdırılma')}}</p>
                    <p class="about-subtitle">{{__('lang.Çatdırılma_text')}}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <img src="front/assets/images/a-4.jpg">
                </div>
            </div>
        </div>
    </section>
@endsection