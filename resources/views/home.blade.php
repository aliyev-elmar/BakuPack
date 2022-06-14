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
                    @php
                        $keywords = $home_seo->getTranslatedAttribute('meta_keywords', App::getLocale(), 'az');
                        $keys_arr = explode(",", $keywords);
                        $keys     = [];
                        foreach($keys_arr as $key => $value){
                            array_push($keys, $key);
                        }
                    @endphp
                    @foreach ($carousel_items as $carousel_item)
                        <div class="carousel-item @if($loop->iteration == 1) active @endif" >
                            <div class="carousel-img">
                                <img src="{{ Voyager::image($carousel_item->image) }}" @if(in_array($loop->index, $keys)) alt="{{$keys_arr[$loop->index]}}" @else alt="{{$keys_arr[0]}}" @endif />
                            </div>
                            <div class="slide-content">
                                @php 
                                    $slider_title = $carousel_item->getTranslatedAttribute('title', App::getLocale(), 'az');
                                    $title_words  = explode(" ", $slider_title);
                                    $word_count   = count($title_words);
                                @endphp
                                <p class="home-title">@for($i=0;$i<$word_count;$i++) @if($i==3) <span class="home-yellow">{{$title_words[$i]}}</span> @else {{$title_words[$i]}}  @endif @endfor</p>
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
                        <h1 class="title" data-aos="fade-up">BakuPack Factory</h1>
=======
                        <h2 class="title" data-aos="fade-up">Baku Pack</h2>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                        <p data-aos="fade-up">{{__('lang.Haqqimizda_text')}}</p>
                        <a href="{{route('about_us')}}" class="button" data-aos="fade-up">{{__('lang.Haqqimizda')}}</a>
                    </div>
                    <div class="col-12 col-lg-6">
<<<<<<< HEAD
                        <img class="about-img-1" src="front/assets/images/about-2.jpg" data-aos="fade-up" @if(in_array(0, $keys)) alt="{{$keys_arr[0]}}" @endif />
                        <img class="about-img-2" src="front/assets/images/about-3.jpg" data-aos="fade-up" @if(in_array(1, $keys)) alt="{{$keys_arr[1]}}" @endif />
                        <img class="about-img-3" src="front/assets/images/about-1.jpg" data-aos="fade-up" @if(in_array(2, $keys)) alt="{{$keys_arr[2]}}" @else alt="{{$keys_arr[0]}}" @endif/>
=======
                        <img class="about-img-1" src="front/assets/images/about-2.jpg" data-aos="fade-up"/>
                        <img class="about-img-2" src="front/assets/images/about-3.jpg" data-aos="fade-up"/>
                        <img class="about-img-3" src="front/assets/images/about-1.jpg" data-aos="fade-up"/>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
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
<<<<<<< HEAD
                                <p class="card-title">{{__('lang.Haqqimizda_peshakar')}}</p>
=======
                                <p class="card-title">{{__('lang.Peşəkar_dizaynlar')}}</p>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
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
<<<<<<< HEAD
                            <a href="{{ route('product-single',$category->getTranslatedAttribute('slug', App::getLocale(), 'az')) }}"></a>
=======
                            <a href="{{ route('product-single',$category->slug) }}"></a>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
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
<<<<<<< HEAD
                        <img src="front/assets/images/2.jpg" class="form-img-1" data-aos="fade-up" @if(in_array(0, $keys)) alt="{{$keys_arr[0]}}" @endif />
=======
                        <img src="front/assets/images/2.jpg" class="form-img-1" data-aos="fade-up"/>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                    </div>
                    <div class="col-lg-5">
                        <h2 class="title" data-aos="fade-up">{{__('lang.Bizimlə_əlaqə')}}</h2>
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
<<<<<<< HEAD
                                                @if($error == 'fullname_required')
                                                    <li>{{__('lang.fullname_required')}}</li>
                                                @elseif($error == 'fullname_max')
                                                    <li>{{__('lang.fullname_max')}}</li>
                                                @elseif($error == 'email_required')
                                                    <li>{{__('lang.email_required')}}</li>
                                                @elseif($error == 'email_email')
                                                    <li>{{__('lang.email_email')}}</li>
                                                @elseif($error == 'email_max')
                                                    <li>{{__('lang.email_max')}}</li>
                                                @elseif($error == 'phone_required')
                                                    <li>{{__('lang.phone_required')}}</li>
                                                @elseif($error == 'phone_max')
                                                    <li>{{__('lang.phone_max')}}</li>
                                                @elseif($error == 'company_required')
                                                    <li>{{__('lang.company_required')}}</li>
                                                @elseif($error == 'company_max')
                                                    <li>{{__('lang.company_max')}}</li>
                                                @endif
=======
                                                <li>{{ $error }}</li>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
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
<<<<<<< HEAD
                        <img src="front/assets/images/1.jpg" class="form-img-2" data-aos="fade-up" @if(in_array(1, $keys)) alt="{{$keys_arr[1]}}" @endif />
=======
                        <img src="front/assets/images/1.jpg" class="form-img-2" data-aos="fade-up"/>
>>>>>>> aef6e7df249e22e856f0fd51488779ef5bc00d1b
                    </div>
                </div>
            </div>
        </section>
        
    </main> 
    
@endsection