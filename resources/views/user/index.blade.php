@extends('user.layout.index')
@section('content')

<!--BANNER-->
<section class="banner">
    <div class="container">
        <div class="row justify-content-center align-items-center pad-tab" data-aos="fade-up">
            <div class="banner-text col-sm-12 col-md-6">
            <p class="text-second">Hijabef Shop</p>
                <h2 class="text-main secondary-col">Keanggunan dalam setiap cerita kita
                </h2>
                <p class="text-second">Hijabeef menjadi pilihan setiap muslimah, untuk tampil anggun dan percaya diri </p>
                <a href="#" class="btn-rounded text-main">SHOP NOW</a>
            </div>
            <div class="banner-image col-sm-12 col-md-6 d-none d-sm-block">
                <img src="{{ asset('images/hijabb.JPG') }}" alt="image-banner" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!--NEW ARRIVALS-->
<section class="new-arrivals">
    <div class="container">
        <div class="text-arrivals row align-items-center">
            <div class="title col-7 col-sm-6 col-md-9 text-left">
                <h3 class="text-main"><span>NEW</span> ARRIVALS</h3>
            </div>
            <div class="text-show-all col-5 col-sm-6 col-md-3 text-right text-main pr-md-0">
                <a href="#">
                    <p>SHOW ALL <img src="{{ asset('user/assets/icons/arrow.png') }}" alt="icon-arrow"></p>
                </a>
            </div>
        </div>

        <div class="arrival-images row justify-content-center align-items-center text-center">
            <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="{{ asset('user/assets/images/prod1.jpg') }}">
                    <img src="{{ asset('user/assets/images/prod1.jpg') }}" alt="prod1" class="img-fluid">
                </a>
            </div>
            <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="{{ asset('user/assets/images/prod1.jpg') }}">
                    <img src="{{ asset('user/assets/images/prod1.jpg') }}" alt="prod1" class="img-fluid">
                </a>
            </div>
            <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="{{ asset('user/assets/images/prod1.jpg') }}">
                    <img src="{{ asset('user/assets/images/prod1.jpg') }}" alt="prod1" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>

<!--PRODUCTS-->
<section class="products-section">
    <div class="container">
        <div class="text-products row align-items-center">
            <div class="title-product col-7 col-sm-6 col-md-9">
                <h2 class="text-main">TREND COLLECTION</h2>
            </div>
            <div class="text-show-all text-right text-main col-5 col-sm-6 col-md-3 pr-md-0">
                <a href="#">
                    <p>SHOW ALL <img src="{{ asset('user/assets/icons/arrow-2.png') }}" alt="icon-arrow"></p>
                </a>
            </div>
        </div>

        <div class="products row justify-content-center">
            <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up">
                <div class="bg-white">
                    <div class="product-image text-center">
                        <img src="{{ asset('user/assets/images/prod2.jpg') }}" alt="product" class="img-fluid">
                    </div>
                    <div class="desc-product">
                        <a href="#">
                            <p class="text-second">Hijab Pasmina</p>
                            <p class="text-second">RP 70.000</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up"
            data-aos-delay="100">
                <div class="bg-white">
                    <div class="product-image text-center">
                        <img src="{{ asset('user/assets/images/prod2.jpg') }}" alt="product" class="img-fluid">
                    </div>
                    <div class="desc-product">
                        <a href="#">
                            <p class="text-second">Hijab Sport</p>
                            <p class="text-second">RP 70.000</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up"
            data-aos-delay="200">
                <div class="bg-white">
                    <div class="product-image text-center">
                        <img src="{{ asset('user/assets/images/prod2.jpg') }}" alt="product" class="img-fluid">
                    </div>
                    <div class="desc-product">
                        <a href="#">
                            <p class="text-second">Hijab Sport</p>
                            <p class="text-second">RP 70.000</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="product col-12 col-sm-12 col-md-6 col-lg-3 mb-md-4 md-lg-0" data-aos="fade-up"
            data-aos-delay="300">
                <div class="bg-white">
                    <div class="product-image text-center">
                        <img src="{{ asset('user/assets/images/prod2.jpg') }}" alt="product" class="img-fluid">
                    </div>
                    <div class="desc-product">
                        <a href="#">
                            <p class="text-second">Hijab Clean</p>
                            <p class="text-second">RP 70.000</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
