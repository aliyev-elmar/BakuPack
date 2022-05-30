    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <a href="index.html" class="logo"><img src="{{asset('front/assets/images/logo.svg')}}"></a>
                </div>
                <div class="col-sm-12 col-lg-2">
                    <ul class="footer-menu">
                        <li><a href="{{route('about_us')}}"><i class="fas fa-angle-right"></i> {{__('lang.Haqqimizda')}}</a></li>
                        <li><a href="{{route('product')}}"><i class="fas fa-angle-right"></i> {{__('lang.Məhsullar')}}</a></li>
                        <li><a href="{{route('xammal')}}"><i class="fas fa-angle-right"></i> {{__('lang.Xammal')}}</a></li>
                        <li><a href="{{route('production')}}"><i class="fas fa-angle-right"></i> {{__('lang.İstehsal_prosesi')}}</a></li>
                        <li><a href="{{route('delivery')}}"><i class="fas fa-angle-right"></i> {{__('lang.Çatdırılma')}}</a></li>
                        <li><a href="{{route('gallery')}}"><i class="fas fa-angle-right"></i> {{__('lang.Qalereya')}}</a></li>
                        <li><a href="{{route('contact')}}"><i class="fas fa-angle-right"></i> {{__('lang.Əlaqə')}}</a></li>

                    </ul>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <ul class="footer-menu">
                        @foreach ($categories as $category)
                            <form action="{{ route('product-single-post' ,$category->getTranslatedAttribute('slug', App::getLocale(), 'az')) }}" method="post">
                                @csrf
                                <li><button name="category_id" type="submit" value="{{$category->id}}"><i class="fas fa-angle-right"></i> {{$category->getTranslatedAttribute('category_name', App::getLocale(), 'az')}}</button></li>
                            </form>
                        @endforeach 
                    </ul>
                </div>
                <div class="col-sm-12 col-lg-3">
                   <p>{{$contact->getTranslatedAttribute('location', App::getLocale(), 'az')}}</p>
                   <a href="mailto: info@bakupolygraphy.az" class="footer-mail">{{$contact->email}}</a>
                   <a href="tel:{{$contact->wp_number}}" class="footer-phone">{{$contact->wp_number}}</a>
                   <a href="tel:{{$contact->phone}}" class="footer-phone">{{$contact->phone}}</a>
                   <div class="social-links">
                       <a href="https://wa.me/{{$contact->wp_number}}"><i class="fab fa-whatsapp"></i></a>
                       <a href="tel:{{$contact->phone}}"><i class="fas fa-phone"></i></a>
                       <a href="{{$contact->instagram}}"><i class="fab fa-instagram"></i></a>
                       <a href="{{$contact->facebook}}"><i class="fab fa-facebook-f"></i></a>
                   </div>
                </div>
            </div>
            <div class="copyright">
                <p>© 2022 BakuPack Factory. {{__('lang.Müəllif')}}</p>
                <a href="https://jedai.az/az/saytlarin-hazirlanmasi" target="blank">Site By <img src="{{asset('front/assets/images/jedai.png')}}"></a>
            </div>
        </div>
    </footer>


    <div class="wp-btn scroll-btn"><a href="https://wa.me/+994507703323" target="blank"><i class="fab fa-whatsapp"></i></a></div>
    <div class="phone-btn scroll-btn"><a href="tel:+994505844767"><i class="fas fa-phone-alt"></i></a></div>
    <div class="back-to-top scroll-btn"><a href="javascript:void(0)"><i class="fas fa-chevron-up"></i></a></div>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="{{ asset('front/assets/aos/aos.js') }}"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    @stack('js')
</body>
</html>