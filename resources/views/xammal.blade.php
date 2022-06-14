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
                <li><i class="fas fa-slash"></i> {{__('lang.Xammal')}}</li>
            </ul>
        </div>
    </section>
    <!-- Xammal -->
    <section id ='xammal'>
        <div class="container">
        
            <div class="title-div">
<<<<<<< HEAD
                <h1 class="title" data-aos="fade-up">{{__('lang.Xammal')}}</h1>
=======
                <h2 class="title" data-aos="fade-up">{{__('lang.Xammal')}}</h2>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
            </div>

            <div class="row">
                <div class="col-12">
<<<<<<< HEAD
                    <h2 class="xammal-title" data-aos="fade-up">{{__('lang.Xammal_title')}}</h2>
=======
                    <p class="xammal-title" data-aos="fade-up">{{__('lang.Xammal_title')}}</p>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                    <p class="xammal-subtitle" data-aos="fade-up">{{__('lang.Xammal_text')}}</p>
                </div>
                @php
                    $keywords = $seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az');
                    $keys_arr = explode(",", $keywords);
                @endphp
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card" data-aos="fade-up">
                        <div class="card-img">
<<<<<<< HEAD
                            <img src="{{asset('front/assets/images/melovka.jpg')}}" alt="{{$keys_arr[0]}}">
=======
                            <img src="{{asset('front/assets/images/melovka.jpg')}}">
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{__('lang.xammal_birinci_title')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_birinci_subtitle')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_birinci_subtitle2')}}</p>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card" data-aos="fade-up">
                        <div class="card-img">
<<<<<<< HEAD
                            <img src="{{asset('front/assets/images/bristol.jpg')}}" alt="{{$keys_arr[1]}}">
=======
                            <img src="{{asset('front/assets/images/bristol.jpg')}}">
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{__('lang.xammal_ikinci_title')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_ikinci_subtitle')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_ikinci_subtitle2')}}</p>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card" data-aos="fade-up">
                        <div class="card-img">
<<<<<<< HEAD
                            <img src="{{asset('front/assets/images/karton.jpg')}}" alt="{{$keys_arr[2]}}">
=======
                            <img src="{{asset('front/assets/images/karton.jpg')}}">
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{__('lang.xammal_ucuncu_title')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_ucuncu_subtitle')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card" data-aos="fade-up">
                        <div class="card-img">
<<<<<<< HEAD
                            <img src="{{asset('front/assets/images/laminasiya.jpeg')}}" alt="{{$keys_arr[0]}}">
=======
                            <img src="{{asset('front/assets/images/laminasiya.jpg')}}">
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{__('lang.xammal_dorduncu_title')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_dorduncu_subtitle')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
<<<<<<< HEAD
                    <h2 class="xammal-title" data-aos="fade-up">{{__('lang.Xammal_title1')}}</h2>
=======
                    <p class="xammal-title" data-aos="fade-up">{{__('lang.Xammal_title1')}}</p>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                    <p class="xammal-subtitle" data-aos="fade-up">{{__('lang.Xammal_text1')}}</p>
                </div>
            </div>
        
        </div>
    </section>
@endsection