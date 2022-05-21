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
                <li><i class="fas fa-slash"></i> Məhsullar <i class="fas fa-slash"></i> </li>
                <li class="cat_name"></li>
            </ul>
        </div>
    </section>

    <!-- Product -->
    <section id ='product-bottom'>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <form class="category-name" method="POST">
                        @csrf
                        <h5>Kateqoriyalar</h5>
                        <label>
                            <input type="checkbox"  class="categories" name="categories[]" value="all-data">
                            <span class="checkbox"></span>
                            Bütün məhsullar
                        </label>
                        @foreach ($categories as $category)
                        <label>
                            <input type="checkbox" class="categories" name="categories[]" value="{{$category->id}}">
                            <span class="checkbox"></span>
                            {{$category->category_name}}
                           
                        </label>
                        @endforeach
                    </form>
                </div>
                <div class="col-lg-9">
                    <h1 class="title" id="top_h1">Bütün məhsullar h1</h1>
                    <p id="top_text">Bütün məhsullar top text</p>
                    
                    <div class="products">
                        @foreach ($products as $product)
                        <div class="card">
                            {{-- <div class="card-img"><img src="{{asset('storage/'.$product->image)}}"/></div>
                            <p class="card-title">{{$product->name}}</p> --}}
                        </div>
                        @endforeach
                    </div>

                    <h2 class="title" id="bottom_h2">Bütün məhsullar h2</h2>
                    <p id="bottom_text">Bütün məhsullar bottom text</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('js')

<script>
$('.categories').change(function() {

    if( $('.categories:checked').length){
    var categories = [];
    $('.categories:checked').each(function(i,v) {
        categories.push($(v).val());
    });
        $.ajax({
            url         :   '{{ route('product-post') }}',
            type        :   'POST',
            dataType    :   'json',
            data        :   { categories  :  categories, 
                _token :'{{ csrf_token() }}'
            },
            success     :   function ( data ) {
                let category = data.category;
                let products = data.products;
                let nextURL = "{{route('product')}}";

                if (typeof category.category_name !== 'undefined') {
                    nextURL   = "{{route('product')}}/"+category.slug;
                    $('.cat_name').text(category.category_name);
                }else{
                    $('.cat_name').text('Qarışıq');
                }  

                const nextTitle = category.category_name;
                const nextState = { additionalInformation: 'Updated the URL with JS' };
                window.history.pushState(nextState, nextTitle, nextURL);
                window.history.replaceState(nextState, nextTitle, nextURL);
                
                $('#top_h1').text(category.top_h1);
                $('#top_text').text(category.top_text);
                $('#bottom_h2').text(category.bottom_h2);
                $('#bottom_text').text(category.bottom_text);
            }
        });
    }
});
    
</script>
@endpush