@extends('layouts.master')
@section('meta_title'){{$home_seo->getTranslatedAttribute('meta_title', App::getLocale(), 'az')}}@endsection
@section('meta_description'){{$home_seo->getTranslatedAttribute('meta_description', App::getLocale(), 'az')}}@endsection
@section('meta_keywords'){{$home_seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az')}}@endsection
@section('content')
    <!-- Home -->
    <section id="home" class="top-page">
        <div class="container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-touch="true" >
                <div class="carousel-inner" >
                    @foreach ($carousel_items as $carousel_item)
                        <div class="carousel-item @if($loop->iteration == 1) active @endif" >
                            <div class="carousel-img">
                                <img src="{{ Voyager::image($carousel_item->image) }}"/>
                            </div>
                            <div class="slide-content">
                                <p class="home-title">{{$carousel_item->getTranslatedAttribute('title', App::getLocale(), 'az')}}</p> <!-- <span class="home-yellow"></span> -->
                                <p class="home-subtitle">{{$carousel_item->getTranslatedAttribute('description', App::getLocale(), 'az')}}</p>
                                <div class="home-button"><a href="{{route('product')}}">{{__('lang.Hamısı')}}</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <ol class="carousel-indicators">
                @foreach ($carousel_items as $key=> $carousel_item)
                    <li data-target="#carouselExampleFade" data-slide-to="{{$key}}" @if($key== 0) class="active" @endif></li>
                @endforeach
                </ol>
            </div>
        </div>
    </div>
    </section> 
   
   <main class="main-section">
 
        <!-- Partners -->
        <section id="partners" >
            <div class="container">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide"><img src="{{ asset('storage/'.$partner->image) }}"/></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- About -->
        <section id="about">
            <div class="container">
                <div class="bg"></div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <span class="point"></span>
<<<<<<< HEAD
                        <h2 class="title" data-aos="fade-up">Baku Pack</h2>
                        <p data-aos="fade-up">{{__('lang.Haqqimizda_text')}}</p>
                        <a href="{{route('about_us')}}" class="button" data-aos="fade-up">{{__('lang.Haqqimizda')}}</a>
=======
                        <h2 class="title">Baku Polygraphy</h2>
                        <p>{{__('lang.Haqqimizda_text')}}</p>
                        <a href="{{route('about_us')}}" class="button">{{__('lang.Haqqimizda')}}</a>
>>>>>>> 910980f8453219d6dafef311a72ad1d978b49902
                    </div>
                    <div class="col-12 col-lg-6">
                        <img class="about-img-1" src="front/assets/images/about-2.jpg" data-aos="fade-up"/>
                        <img class="about-img-2" src="front/assets/images/about-3.jpg" data-aos="fade-up"/>
                        <img class="about-img-3" src="front/assets/images/about-1.jpg" data-aos="fade-up"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefit -->
        <section id="benefit">
            <div class="container">
                <h2 class="title">{{__('lang.Niyə_seçməlisiniz')}}</h2>
                <p class="subtitle">{{__('lang.uch_addimda')}}</p>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card card-1" data-aos="fade-up">
                            <div class="card-icon"><img src="front/assets/images/b-1.svg"/></div>
                            <div class="card-text">
                                <p class="card-title">{{__('lang.Peşəkar_dizaynlar')}}</p>
                                <p class="card-subtitle">{{__('lang.Haqqimizda_peshakar_text')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card card-2" data-aos="fade-up">
                            <div class="card-icon"><img src="front/assets/images/b-2.svg"/></div>
                            <div class="card-text">
                                <p class="card-title">{{__('lang.Peşəkar_dizaynlar')}}</p>
                                <p class="card-subtitle">{{__('lang.Böyük_həcmli')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card card-3" data-aos="fade-up">
                            <div class="card-icon"><img src="front/assets/images/b-3.svg"/></div>
                            <div class="card-text">
                                <p class="card-title">{{__('lang.Çatdırılma')}}</p>
                                <p class="card-subtitle">{{__('lang.Çatdırılma_text')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category -->
        <section id="category">
            <div class="bg"></div>
            <div class="bg-2"></div>
            <div class="container">
                <h2 class="title" data-aos="fade-up">{{__('lang.Qablaşdırma')}}</h2>
                <p class="subtitle" data-aos="fade-up">{{__('lang.Qablaşdırma_ana_sehife_text')}}</p>
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-12 col-sm-6 col-lg-3"  data-aos="fade-up">
                        <div class="card category-card">
                            <a href="{{ route('product-single',$category->slug) }}"></a>
                            <div class="card-title"><h3>{{$category->getTranslatedAttribute('category_name', App::getLocale(), 'az')}}</h3></div>
                            <div class="card-img"><img src="{{ Voyager::image($category->image) }}"/></div>
                            <div class="card-subtitle"><p>{{$category->getTranslatedAttribute('category_text', App::getLocale(), 'az')}}</p></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Contact -->
        <section id="contact-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="front/assets/images/2.jpg" class="form-img-1" data-aos="fade-up"/>
                    </div>
                    <div class="col-lg-5">
<<<<<<< HEAD
                        <h2 class="title" data-aos="fade-up">{{__('lang.Bizimlə_əlaqə')}}</h2>
=======
                        <h2 class="title">{{__('lang.Bizimlə_əlaqə')}}</h2>
>>>>>>> 910980f8453219d6dafef311a72ad1d978b49902
                        <form class="row" action="{{route('contact-post')}}" method="post">
                            @csrf
                            <div class="col-12">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success')}}</div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12" data-aos="fade-up">
                                <input class="form-control" type="text" placeholder="{{__('lang.Ad_Soyad')}}*" name="fullname" value="{{old('fullname')}}">
                            </div>
                            <div class="col-12" data-aos="fade-up">
                                <input class="form-control" type="email" placeholder="{{__('lang.Email')}}*" name="email" value="{{old('email')}}">
                            </div>
                            <div class="col-12 col-sm-6" data-aos="fade-up">
                                <input class="form-control" type="text" placeholder="{{__('lang.Telefon')}}*" name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="col-12 col-sm-6" data-aos="fade-up">
                                <input class="form-control" type="text" placeholder="{{__('lang.Şirkət')}}" name="company" value="{{old('company')}}">
                            </div>
                            <div class="col-12" data-aos="fade-up">
                                <button class="button" type="submit">{{__('lang.Göndər')}}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <img src="front/assets/images/1.jpg" class="form-img-2" data-aos="fade-up"/>
                    </div>
                </div>
            </div>
        </section>
        
    </main> 
    
@endsection