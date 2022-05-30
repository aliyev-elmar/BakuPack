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
                <h2 class="title" data-aos="fade-up">{{__('lang.Xammal')}}</h2>
            </div>

            <div class="row">
                <div class="col-12">
<<<<<<< HEAD
                    <p class="xammal-title" data-aos="fade-up">{{__('lang.Xammal_title')}}</p>
                    <p class="xammal-subtitle" data-aos="fade-up">{{__('lang.Xammal_text')}}</p>
=======
                    <p class="xammal-title">{{__('lang.Qablaşdırma_məhsulları')}}</p>
                    <p class="xammal-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
>>>>>>> 910980f8453219d6dafef311a72ad1d978b49902
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card" data-aos="fade-up">
                        <div class="card-img">
                            <img src="{{asset('front/assets/images/melovka.jpg')}}">
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
                            <img src="{{asset('front/assets/images/bristol.jpg')}}">
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
                            <img src="{{asset('front/assets/images/karton.jpg')}}">
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
                            <img src="{{asset('front/assets/images/laminasiya.jpg')}}">
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{__('lang.xammal_dorduncu_title')}}</p>
                            <p class="card-subtitle">{{__('lang.xammal_dorduncu_subtitle')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="xammal-title" data-aos="fade-up">{{__('lang.Xammal_title1')}}</p>
                    <p class="xammal-subtitle" data-aos="fade-up">{{__('lang.Xammal_text1')}}</p>
                </div>
            </div>
        
        </div>
    </section>
@endsection