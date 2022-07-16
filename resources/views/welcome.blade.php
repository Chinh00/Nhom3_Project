@extends('Frontend.Layouts.main')
@section('content')
    <main class="main">
        <div class="intro-section pt-3 pb-3 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                            <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside" data-toggle="owl" data-owl-options='{
                                        "nav": false,
                                        "dots": true,
                                        "responsive": {
                                            "768": {
                                                "nav": true,
                                                "dots": false
                                            }
                                        }
                                    }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-3/slider/slide-1-480w.jpg">
                                            <img src="{{asset('./Images/Category-banner/tải xuống (1).jpg')}}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <!-- <h3 class="intro-subtitle text-primary">Daily Deals</h3>End .h3 intro-subtitle -->
                                        <!-- <h1 class="intro-title">
                                            AirPods <br>Earphones
                                        </h1>End .intro-title -->

                                        <!-- <div class="intro-price">
                                            <sup>Today:</sup>
                                            <span class="text-primary">
                                                    $247<sup>.99</sup>
                                                </span>
                                        </div>End .intro-price -->

                                        <!-- <a href="category.html" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a> -->
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-3/slider/slide-2-480w.jpg">
                                            <img src="{{asset('./Images/Category-banner/slider_3.webp')}}" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <!-- <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                        <!-- <h1 class="intro-title">
                                            Echo Dot <br>3rd Gen
                                        </h1> --> 
                                        <!-- End .intro-title -->

                                        <!-- <div class="intro-price">
                                            <sup class="intro-old-price">$49,99</sup>
                                            <span class="text-primary">
                                                    $29<sup>.99</sup>
                                                </span>
                                        </div> -->
                                        <!-- End .intro-price -->
<!-- 
                                        <a href="category.html" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a> -->
                                    <!-- </div> -->
                                    <!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->

                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-3/banners/banner-1.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Sản phẩm mới </a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Edifier <br>Stereo Bluetooth</a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Mua Ngay<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-3/banners/banner-2.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Giảm giá</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">GoPro - Fusion 360 <span>Save $70</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Mua Ngay<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner mb-0">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-3/banners/banner-3.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Đặc sắc</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Apple Watch 4 <span>Our Hottest Deals</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Mua Ngay<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .intro-section -->

        <div class="container featured">
            <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Mới nhất</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">Giảm giá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Đánh giá cao</a>
                </li>
            </ul>

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                        
                        @foreach($new as $key)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{asset('Images/Product-images/' .$key->image_link)}}" alt="Product image" class="product-image" style="height: 20rem;width:15rem">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>+ Giỏ hàng</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>Xem</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"><b>{{$key->name}}</b></a></h3><!-- End .product-title -->
                                    <div class="product-price text-danger">
                                        @if($key->offer_price != $key->price)
                                            <del>{{number_format($key->price)}} </del><sup>đ</sup>
                                            <pre></pre>
                                        @endif
                                    </div><!-- End .product-price -->
                                    <div class="product-price text-danger"><div>{{number_format($key->offer_price)}} <sup>đ</sup></div></div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                        @foreach($sale as $key)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{asset('Images/Product-images/' .$key->image_link)}}" alt="Product image" class="product-image " style="height: 20rem;width:15rem">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>+ Giỏ hàng</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>Xem</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{$key->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price text-danger">
                                        @if($key->offer_price != $key->price)
                                            <del>{{number_format($key->price)}} </del><sup>đ</sup>
                                            <pre></pre>
                                        @endif
                                    </div><!-- End .product-price -->
                                    <div class="product-price text-danger"><div>{{number_format($key->offer_price)}} <sup>đ</sup></div></div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach

                        
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "600": {
                                        "items":2
                                    },
                                    "992": {
                                        "items":3
                                    },
                                    "1200": {
                                        "items":4
                                    }
                                }
                            }'>
                        @foreach($ratings as $key)
                            <div class="product product-2">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{asset('Images/Product-images/' .$key->image_link)}}" alt="Product image" class="product-image" style="height: 20rem;width:15rem">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action product-action-dark">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>+ Giỏ hàng</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>Xem</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{$key->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        @if($key->offer_price != $key->price)
                                            <del>{{number_format($key->price)}} </del><sup>đ</sup>
                                            <pre></pre>
                                        @endif
                                    </div><!-- End .product-price -->
                                    <div class="product-price text-danger"><div>{{number_format($key->offer_price)}} <sup>đ</sup></div></div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <span class="ratings-text">( 2 Reviews )</span>
                                    </div><!-- End .rating-container -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        @endforeach

                        
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container -->

        <div class="mb-7 mb-lg-11"></div><!-- End .mb-7 -->

    

        <div class="container">
            <div class="owl-carousel mt-5 mb-5 owl-simple justify-content-center " data-toggle="owl"
                 data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>
              
                @foreach($home_categories as $key)
                @php
                $conn = DB::table('categories')->where('parent_id','=', 16)->get();
            
                    @endphp
  
                    
                    @foreach($conn as $value)
              
                        <a href="/category/{{ $value->id }}" style="font-size: 1.4rem" class="justify-content-center">
                            <img src="{{ asset('Images/Brand-images/'.$value->photo) }}" alt="Brand Name">
                           <span class="mx-0"> {{$value->title}}</span>
                        </a>
                    @endforeach
                @endforeach

               
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->



        <div class="container">
            <hr class="mt-5 mb-6">
        </div><!-- End .container -->

        <div class="container top">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Top Selling Products</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                                            
                            @foreach($childCate as $value)
                            <li class="nav-item ">
                                                               
                                    <a class="nav-link {{$value->id == 17 ? 'active' : ''}}" id="top-{{$value->title}}-link" data-toggle="tab" href="#top-{{$value->title}}-tab" role="tab" aria-controls="#top-{{$value->title}}-tab" aria-selected="false">{{$value->title}}</a>
                            </li>

                            @endforeach
                    
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->
            <div class="tab-content tab-content-carousel just-action-icons-sm">


                @foreach($childCate as $key)
                <div class="tab-pane p-0 fade show {{$value->id == 17 ? 'active' : ''}}" id="top-{{ $key->title }}-tab" role="tabpanel" aria-labelledby="top-{{ $key->title }}-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                         data-owl-options='{
                                "nav": true,
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                        @foreach ($product_info as $proInfo )
                        @if ($proInfo->category_id == $key->id)
                            
                        
                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="/product/{{ $proInfo->id }}">
                                    <img src="{{asset('Images/Product-images/' .$proInfo->image_link)}}" alt="Product image" class="product-image">
                                
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action product-action-dark">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->
        
                            <div class="product-body">
                                <div class="product-cat">
                                                                        
                                    <a href="/category/{{ $proInfo->category_id }}">{{ $proInfo->title }}</a>
                                    
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product/{{ $proInfo->id }}">{{ $proInfo->name }}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{ $proInfo->price }}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( {{ $proInfo->ratings }} )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endif
                        @endforeach
                        

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                @endforeach
            </div><!-- End .tab-content -->
            
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-5 mb-0">
        </div><!-- End .container -->

        <div class="icon-boxes-container mt-2 mb-2 bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Miễn Phí Giao Hàng</h3><!-- End .icon-box-title -->
                                <p>Orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Đổi trả miễn phí</h3><!-- End .icon-box-title -->
                                <p>Trong 30 ngày</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Giảm 20% khi mua từ 2 sản phẩm</h3><!-- End .icon-box-title -->
                                <p>khi đăng nhập tài khoản</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                                <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Hỗ trợ tận tình</h3><!-- End .icon-box-title -->
                                <p>24/7 dịch vụ nhiệt tình</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->

        <div class="container">
            <div class="cta cta-separator cta-border-image cta-half mb-0" style="background-image: url(assets/images/demos/demo-3/bg-2.jpg);">
                <div class="cta-border-wrapper bg-white">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cta-wrapper cta-text text-center">
                                <h3 class="cta-title">Tham gia cộng đồng của chúng tôi</h3><!-- End .cta-title -->
                                <p class="cta-desc">Bạn sẽ nhận được nhiều phần quà hấp dẫn và các thông tin về các chương trình đặc biệt </p><!-- End .cta-desc -->

                                <div class="social-icons social-icons-colored justify-content-center">
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="cta-wrapper text-center">
                                <h3 class="cta-title">Tham gia ngay chương trình mới nhất</h3><!-- End .cta-title -->
                                <p class="cta-desc">and <br>receive <span class="text-primary">100.000đ coupon</span> cho lần đầu mua hàng</p><!-- End .cta-desc -->

                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Điền địa chỉ Email" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-rounded" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .bg-white -->
            </div><!-- End .cta -->
        </div><!-- End .container -->
    </main><!-- End .main -->

@endsection
