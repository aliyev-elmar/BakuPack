@extends('layouts.master')
@section('content')
    <!-- Breadcrumb -->
    <section id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.Əlaqə')}}</li>
            </ul>
        </div>
    </section>

    <!-- Contact -->
    <section id ='contact'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3033.8361759863333!2d49.850965915707974!3d40.50100555843304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40308ea4f9e8c603%3A0x834d4c5a4cb0a328!2zQ8mZbGlsIE3JmW1tyZlkcXVsdXphZMmZLCBNZWhkaWFiYWQsIEF6yZlyYmF5Y2Fu!5e0!3m2!1saz!2s!4v1652348534883!5m2!1saz!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 contact-box">
                    <div class="contact-info">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>{{$contact->getTranslatedAttribute('location', App::getLocale(), 'az')}}</p>
                        </div>
                        
                        <a href="mailto:info@bakupack.az"><i class="fas fa-envelope"></i>{{$contact->email}}</a>
                        <div class="phone-div">
                            <i class="fas fa-phone"></i>
                            <div>
                                <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a>
                                <a href="tel:{{$contact->wp_number}}">{{$contact->wp_number}}</a>
                            </div>
                        </div>
                        
                        
                        <div class="social-media">
                            <a href="https://wa.me/+994505844767" target="blank"><i class="fab fa-whatsapp"></i></a>
                            <a href="{{$contact->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{$contact->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                    <form class="row" action="{{route('contact-post')}}" method="post">
                        @csrf
                        <div class="col-12">
                        <h2 class="title">{{__('lang.Bizimlə_əlaqə')}}</h2>
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
            </div>
        </div>
    </section>
@endsection