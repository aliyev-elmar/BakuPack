@extends('layouts.master')
@section('content')
    <!-- Page Top -->
    <section id="delivery-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="title"><span>Lorem</span> Ipsum</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                </div>
                <div class="col-lg-5">
                    <img src="front/assets/images/delivery.jpg">
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb -->
    <section id="breadcrumb" class="main-section">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.Çatdırılma')}}</li>
            </ul>
        </div>
    </section>

    <!-- About -->

    <section id ='delivery-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <img src="front/assets/images/a-4.jpg">
                </div>
                <div class="col-12 col-lg-7">
                    <p class="delivery-title">{{__('lang.Çatdırılma')}}</p>
                    <p class="delivery-subtitle">{{__('lang.Qayğıkeş və diqqətli kadrlarımızla məhsulunuzun yerinə çatdırılmasını öz üzərimizə götürürük. İxtisaslaşmış kadrlar müştəri məmnuniyyətini hər zaman ön planda saxlayır')}}</p>
                </div>
                
            </div>
        </div>
    </section>
@endsection