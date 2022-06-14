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
                <li><i class="fas fa-slash"></i> {{__('lang.Qalereya')}}</li>
            </ul>
        </div>
    </section>

    <!-- Gallery -->
    <section id ='gallery'>
        <div class="container">
           
            <div class="title-div">
                <h2 class="title" data-aos="fade-up">{{__('lang.Qalereya')}}</h2>
            </div>

            <div class="img-gallery">
                <div class="item-1">
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/13.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/13.jpg')}}" class="img-1" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/12.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/12.jpg')}}" class="img-2" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                </div>
                <div class="item-2">
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/17.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/17.jpg')}}" class="img-3" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                </div>

                <div class="item-3">
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/11.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/11.jpg')}}" class="img-4" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                  
                    <div class="item-box">
                        <div class="img-item">
                            <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/15.jpg')}}"></a>
                            <img src="{{asset('front/assets/images/gallery/15.jpg')}}" class="img-5" data-aos="fade-up"/>
                            <div class="overlay"><i class="fas fa-search"></i></div>
                        </div>
                        <div class="img-item">
                            <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/18.jpg')}}"></a>
                            <img src="{{asset('front/assets/images/gallery/18.jpg')}}" class="img-6" data-aos="fade-up"/>
                            <div class="overlay"><i class="fas fa-search"></i></div>
                        </div>
                    </div>

                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/20.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/20.jpg')}}" class="img-7" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                </div>

                <div class="item-4">
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/16.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/16.jpg')}}" class="img-8" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                </div>
               
                <div class="item-5">
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/19.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/19.jpg')}}" class="img-9" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                    <div class="img-item">
                        <a class="image-gallery fancybox" href="{{asset('front/assets/images/gallery/14.jpg')}}"></a>
                        <img src="{{asset('front/assets/images/gallery/14.jpg')}}" class="img-10" data-aos="fade-up"/>
                        <div class="overlay"><i class="fas fa-search"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection