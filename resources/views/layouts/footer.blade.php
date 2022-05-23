    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <a href="index.html" class="logo"><img src="{{asset('front/assets/images/logo.svg')}}"></a>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <ul class="footer-menu">
                        <li><a href="{{route('about_us')}}">Haqqımızda</a></li>
                        {{-- <li><a href="">Xidmət</a></li> --}}
                        <li><a href="{{route('delivery')}}">Çatdırılma</a></li>
                        <li><a href="{{route('contact')}}">Əlaqə</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <ul class="footer-menu">
                        @foreach ($categories as $category)
                            <li><a href="{{ route("product-single", $category->slug) }}">{{$category->category_name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3">
                   <p>{{$contact->location}}</p>
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
                <p>© 2022 BakuPolygraphy.az. Müəllif hüquqları qorunur.</p>
                <a href="https://jedai.az/az/saytlarin-hazirlanmasi" target="blank">Site By <img src="{{asset('front/assets/images/jedai.png')}}"></a>
            </div>
        </div>
    </footer>


    <!-- <div class="whatsapp"><a href="https://wa.me/" target="blank"><i class="fab fa-whatsapp"></i></a></div>
    <div class="phone-btn"><a href="tel:"><i class="fas fa-phone-alt"></i></a></div>
    <div class="back-to-top"><i class="fas fa-chevron-up"></i></div> -->

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>
    <script src="{{asset('front/assets/js/main.js')}}"></script>
    @stack('js')
</body>
</html>