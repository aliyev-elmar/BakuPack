@extends('layouts.master')
@section('content')
    <!-- Breadcrumb -->
    <section id="breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">{{__('lang.Ana səhifə')}}</a></li>
                <li><i class="fas fa-slash"></i> {{__('lang.Xammal')}}</li>
            </ul>
        </div>
    </section>
    <!-- Xammal -->
    <section id ='xammal'>
        <div class="container">
        
            <div class="title-div">
                <h2 class="title">{{__('lang.Xammal')}}</h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="xammal-title">{{__('lang.Qablaşdırma məhsulları')}}</p>
                    <p class="xammal-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="front/assets/images/product.jpg">
                        </div>
                        <div class="card-body">
                            <p class="card-title">Melovka</p>
                            <p class="card-subtitle">C2S Parlag 170,200,250</p>
                            <p class="card-subtitle">C2S Matt 170,200,250</p>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="front/assets/images/product.jpg">
                        </div>
                        <div class="card-body">
                            <p class="card-title">Bristol</p>
                            <p class="card-subtitle">C2S Parlag 170,200,250</p>
                            <p class="card-subtitle">C2S Matt 170,200,250</p>    
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="front/assets/images/product.jpg">
                        </div>
                        <div class="card-body">
                            <p class="card-title">Karton ( kitab kartonu)</p>
                            <p class="card-subtitle">1mm, 1.2mm. 1.5mm. 2mm. 2.5mm</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-img">
                            <img src="front/assets/images/product.jpg">
                        </div>
                        <div class="card-body">
                            <p class="card-title">Laminaciya</p>
                            <p class="card-subtitle">Matt, gızılı, parlag, sədəf</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="xammal-title">Qablaşdırma məhsulları</p>
                    <p class="xammal-subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                </div>
            </div>
        
        </div>
    </section>
@endsection