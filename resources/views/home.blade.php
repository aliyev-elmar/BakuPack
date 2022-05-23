@extends('layouts.master')
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
                                <div class="home-button"><a href="{{route('product')}}">Hamısı</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="3"></li>
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
                        <h2 class="title">Baku Polygraphy</h2>
                        <p>{{__('lang.BakuPolygraphy 50 nəfərə yaxın heyətdən ibarət olan və yeni avadlıqlarla təmin olunan şirkətdir və bütün növ karton qutu və qablaşdırma məhsullarını hazırlamaq gücünə malikdir. Biz qısa müddət ərzində müştərilərimizn çox yüksək rəyinə nail olmağı bacarmışıq. Şirkət tələb olunan istehsalat prosesinin hər mərhələsinə qüsursuz və keyfiyyətlə yanaşır, imic və reputasyasını qoruyur')}}</p>
                        <a href="{{route('about_us')}}" class="button">{{__('lang.Haqqımızda')}}</a>
                    </div>
                    <div class="col-12 col-lg-6">
                        <img class="about-img-1" src="front/assets/images/about-2.jpg"/>
                        <img class="about-img-2" src="front/assets/images/about-3.jpg"/>
                        <img class="about-img-3" src="front/assets/images/about-1.jpg"/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Benefit -->
        <section id="benefit">
            <div class="container">
                <h2 class="title">Niyə bizi seçməlisiniz?</h2>
                <p class="subtitle">3 addımda</p>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card card-1">
                            <div class="card-icon"><img src="front/assets/images/b-1.svg"/></div>
                            <div class="card-text">
                                <p class="card-title">Peşəkar dizaynlar</p>
                                <p class="card-subtitle">Müştərilərimizin istəyinə və zövqünə uyğun dizaynları hazırlamaqla birlikdə öz təkliflərimizi də təqdim edirik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card card-2">
                            <div class="card-icon"><img src="front/assets/images/b-2.svg"/></div>
                            <div class="card-text">
                                <p class="card-title">Böyük həcmli sifarişlər</p>
                                <p class="card-subtitle">Böyük həcimli sifarişlərin qısa müddətdə istehsalına zəmanət veririk. Keyfiyyət və sürət təsadüfün nəticəs deyil!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card card-3">
                            <div class="card-icon"><img src="front/assets/images/b-3.svg"/></div>
                            <div class="card-text">
                                <p class="card-title">Çatdırılma</p>
                                <p class="card-subtitle">Qayğıkeş və diqqətli kadrlarımızla məhsulunuzun yerinə çatdırılmasını öz üzərimizə götürürük. Müştəri məmnuniyyəti həmişə ön planda! </p>
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
                <h2 class="title">{{__('lang.Qablaşdırma')}}</h2>
                <p class="subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta deserunt consequuntur obcaecati id illo fuga unde dolore, dolorum magnam voluptate! Dignissimos accusantium explicabo recusandae corporis in dolorum placeat quia iste.</p>
                <div class="row">
                    @foreach ($categories as $category)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="card category-card">
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
                        <img src="front/assets/images/2.jpg" class="form-img-1"/>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="title">{{__('lang.Bizimlə əlaqə saxlayın')}}</h2>
                        <form class="row" action="{{route('contact-post')}}" method="post">
                            @csrf
                            <div class="col-12">
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success')}}</div>
                                @endif
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="text" placeholder="Ad, Soyad*" name="fullname" value="{{old('fullname')}}">
                            </div>
                            <div class="col-12">
                                <input class="form-control" type="email" placeholder="E-mail*" name="email" value="{{old('email')}}">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="form-control" type="text" placeholder="Telefon*" name="phone" value="{{old('phone')}}">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input class="form-control" type="text" placeholder="Şirkət" name="company" value="{{old('company')}}">
                            </div>
                            <div class="col-12">
                                <button class="button" type="submit">{{__('lang.Göndər')}}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <img src="front/assets/images/1.jpg" class="form-img-2"/>
                    </div>
                </div>
            </div>
        </section>
        
    </main> 
    
@endsection