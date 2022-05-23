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
                    <p>{{__('lang.BakuPolygraphy 50 nəfərə yaxın heyətdən ibarət olan və yeni avadlıqlarla təmin olunan şirkətdir və bütün növ karton qutu və qablaşdırma məhsullarını hazırlamaq gücünə malikdir. Biz qısa müddət ərzində müştərilərimizn çox yüksək rəyinə nail olmağı bacarmışıq. Şirkət tələb olunan istehsalat prosesinin hər mərhələsinə qüsursuz və keyfiyyətlə yanaşır, imic və reputasyasını qoruyur')}}</p>
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
                    <p class="about-subtitle">{{__('lang.Dünyanın ən qabaqcıl istehsalçılarından (Çin, Rusiya, Türkiyə və s.) birbaşa xammal idxal edirik. Xammalın birbaşa sifarişi rəqabətdə üstünlüyümüzü təmin edir')}}</p>
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
                    <p class="about-title">{{__('lang.PEŞƏKAR DİZAYN İŞLƏRİ')}}</p>
                    <p class="about-subtitle">{{__('lang.Müştərilərilərimizin istəyinə və zövqünə uyğun dizaynları hazırlamaqla birlikdə öz təkliflərimizi də təqdim edirik')}}</p>
                </div>
                <div class="col-12 col-lg-7">
                    <p class="about-title">{{__('lang.Çatdırılma')}}</p>
                    <p class="about-subtitle">{{__('lang.Qayğıkeş və diqqətli kadrlarımızla məhsulunuzun yerinə çatdırılmasını öz üzərimizə götürürük. İxtisaslaşmış kadrlar müştəri məmnuniyyətini hər zaman ön planda saxlayır')}}</p>
                </div>
                <div class="col-12 col-lg-5">
                    <img src="front/assets/images/a-4.jpg">
                </div>
            </div>
        </div>
    </section>
@endsection