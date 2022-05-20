@extends('layouts.master')
@section('content')
    <!-- Page Top -->
    <section id="about-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('front/assets/images/p-2.jpg')}}">
                    <img src="{{asset('front/assets/images/p-1.jpg')}}">
                </div>
                <div class="col-lg-6">
                    <h2 class="title"><span>Baku</span> Pack</h2>
                    <p>BakuPolygraphy 50 nəfərə yaxın heyətdən ibarət olan və yeni avadlıqlarla təmin olunan şirkətdir və bütün növ karton qutu və qablaşdırma məhsullarını hazırlamaq gücünə malikdir. Biz qısa müddət ərzində müştərilərimizn çox yüksək rəyinə nail olmağı bacarmışıq. Şirkət tələb olunan istehsalat prosesinin hər mərhələsinə qüsursuz və keyfiyyətlə yanaşır, imic və reputasyasını qoruyur</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb -->
    <section id="breadcrumb" class="main-section">
        <div class="container">
            <ul>
                <li><a href="{{route('home')}}">Ana səhifə</a></li>
                <li><i class="fas fa-slash"></i> Məhsullar</li>
                <li><i class="fas fa-slash"></i> {{$category_data->category_name}}</li>
            </ul>
        </div>
    </section>

    <!-- Product -->
    <section id ='product-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form class="category-name">
                        <h5>Kateqoriyalar</h5>
                        <label>
                            <input type="checkbox">
                            <span class="checkbox"></span>
                            Bütün məhsullar
                        </label>
                        @foreach ($categories as $category)
                        <label>
                            <input type="checkbox"  {{$category->category_name == $category_data->category_name ? 'checked' : null}}>
                            <span class="checkbox"></span>
                            {{$category->category_name}}
                        </label>
                        @endforeach
                    </form>
                </div>
                <div class="col-lg-9">
                    <h1 class="title">{{$category_data->top_h1}}</h1>
                    <p>{{$category_data->top_text}}</p>
                    
                    <div class="products">
                        @foreach ($products as $product)
                        <div class="card">
                            <div class="card-img"><img src="{{asset('storage/'.$product->image)}}"/></div>
                            <p class="card-title">{{$product->name}}</p>
                        </div>
                        @endforeach
                    </div>

                    <h2 class="title">{{$category_data->bottom_h2}}</h2>
                    <p>{{$category_data->bottom_text}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection