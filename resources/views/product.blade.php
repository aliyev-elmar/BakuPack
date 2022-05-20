@extends('layouts.master')
@section('content')
    <!-- Page Top -->
    <section id="about-top" class="top-page">
        <div class="container">
            <div class="bg"></div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="front/assets/images/p-2.jpg">
                    <img src="front/assets/images/p-1.jpg">
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
                            <input type="checkbox">
                            <span class="checkbox"></span>
                            {{$category->category_name}}
                        </label>
                        @endforeach
                    </form>
                </div>
                <div class="col-lg-9">
                    <h1 class="title">Bütün məhsullar h1</h1>
                    <p>Bütün məhsullar top text</p>
                    
                    <div class="products">
                        <div class="card">
                            <div class="card-img"><img src="front/assets/images/product.jpg"/></div>
                            <p class="card-title">Məhsulun adı</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="front/assets/images/product.jpg"/></div>
                            <p class="card-title">Məhsulun adı</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="front/assets/images/product.jpg"/></div>
                            <p class="card-title">Məhsulun adı</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="front/assets/images/product.jpg"/></div>
                            <p class="card-title">Məhsulun adı</p>
                        </div>
                        <div class="card">
                            <div class="card-img"><img src="front/assets/images/product.jpg"/></div>
                            <p class="card-title">Məhsulun adı</p>
                        </div>
                    </div>

                    <h2 class="title">Bütün məhsullar h2</h2>
                    <p>Bütün məhsullar bottom text</p>
                </div>
            </div>
        </div>
    </section>
@endsection