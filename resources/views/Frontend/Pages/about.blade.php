@extends('Frontend.Layouts.main')
@section('content')

    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->
        <div class="container">
            <div class="page-header page-header-big text-center" style="background-image: url({{asset('frontend/assets/images/about-header-bg.jpg')}})">
                <h1 class="page-title text-white">về chúng tôi<span class="text-white">Chúng tôi là ai</span></h1>
            </div><!-- End .page-header -->
        </div><!-- End .container -->

        <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-3 mb-lg-0">
                        <h2 class="title">Chúng tôi là ai?</h2><!-- End .title -->
                        <p class="lead text-primary mb-3">Một nhóm học sinh đến từ trung tâm Aptech - một trung tâm đào tạo lập trình viên full stack.</p><!-- End .lead text-primary -->
                        <p class="mb-2">Đây là trang web chúng tôi tạo cho project của môn php và mong đây là một sản phẩm thành công trong việc thuyết phục được ban giám khảo.</p>

                        <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                            <span>XEM TIN TỨC CỦA CHÚNG TÔI</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div><!-- End .col-lg-5 -->

                    <div class="col-lg-6 offset-lg-1">
                        <div class="about-images">
                            <img src="{{asset('frontend/assets/images/about/img-1.jpg')}}" alt="" class="about-img-front">
                            <img src="{{asset('frontend/assets/images/about/img-2.jpg')}}" alt="" class="about-img-back">
                        </div><!-- End .about-images -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .bg-light-2 pt-6 pb-6 -->


        <div class="page-content pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="brands-text">
                            <h2 class="title">Các hãng điện thoại nổi tiếng trên thế giới tại một điểm đến.</h2><!-- End .title -->
                        </div><!-- End .brands-text -->
                    </div><!-- End .col-lg-5 -->
                    <div class="col-lg-7">
                        <div class="brands-display">
                            <div class="row justify-content-center">
                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/1.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/2.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/3.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/4.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/5.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/6.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/7.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/8.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->

                                <div class="col-6 col-sm-4">
                                    <a href="#" class="brand">
                                        <img src="{{asset('frontend/assets/images/brands/9.png')}}" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-sm-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .brands-display -->
                    </div><!-- End .col-lg-7 -->
                </div><!-- End .row -->

                <hr class="mt-4 mb-6">

                <!-- note chỗ này thêm php -->
                <h2 class="title text-center mb-4">Gặp đội của chúng tôi</h2><!-- End .title text-center mb-2 -->

                <div class="row">
                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="{{asset('frontend/assets/images/team/member-1.jpg')}}" alt="member photo">

                                <figcaption class="member-overlay">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Nguyễn Văn Chinh<span>Leader team</span></h3><!-- End .member-title -->
                                        <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Nguyễn Văn Chinh<span>Leader team</span></h3><!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="{{asset('frontend/assets/images/team/member-2.jpg')}}" alt="member photo">

                                <figcaption class="member-overlay">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Trương Đức Anh<span>Trưởng bộ phận layout</span></h3><!-- End .member-title -->
                                        <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Trương Đức Anh<span>Trưởng bộ phận layout</span></h3><!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-md-4">
                        <div class="member member-anim text-center">
                            <figure class="member-media">
                                <img src="{{asset('frontend/assets/images/team/member-3.jpg')}}" alt="member photo">

                                <figcaption class="member-overlay">
                                    <div class="member-overlay-content">
                                        <h3 class="member-title">Nguyễn Quang Thắng<span>Thanh niên tập sự</span></h3><!-- End .member-title -->
                                        <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                        <div class="social-icons social-icons-simple">
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                        </div><!-- End .soial-icons -->
                                    </div><!-- End .member-overlay-content -->
                                </figcaption><!-- End .member-overlay -->
                            </figure><!-- End .member-media -->
                            <div class="member-content">
                                <h3 class="member-title">Nguyễn Quang Thắng<span>Thanh niên tập sự</span></h3><!-- End .member-title -->
                            </div><!-- End .member-content -->
                        </div><!-- End .member -->
                    </div><!-- End .col-md-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-2"></div><!-- End .mb-2 -->

            <!-- note hỏi phần này thêm vào không -->
            <div class="about-testimonials bg-light-2 pt-6 pb-6">
                <div class="container">
                    <h2 class="title text-center mb-3">What Customer Say About Us</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                         data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                        <blockquote class="testimonial text-center">
                            <img src="{{asset('frontend/assets/images/testimonials/user-1.jpg')}}" alt="user">
                            <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque aliquet nibh nec urna. <br>In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti. ”</p>
                            <cite>
                                Jenson Gregory
                                <span>Customer</span>
                            </cite>
                        </blockquote><!-- End .testimonial -->

                        <blockquote class="testimonial text-center">
                            <img src="{{asset('frontend/assets/images/testimonials/user-2.jpg')}}" alt="user">
                            <p>“ Impedit, ratione sequi, sunt incidunt magnam et. Delectus obcaecati optio eius error libero perferendis nesciunt atque dolores magni recusandae! Doloremque quidem error eum quis similique doloribus natus qui ut ipsum.Velit quos ipsa exercitationem, vel unde obcaecati impedit eveniet non. ”</p>

                            <cite>
                                Victoria Ventura
                                <span>Customer</span>
                            </cite>
                        </blockquote><!-- End .testimonial -->
                    </div><!-- End .testimonials-slider owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .bg-light-2 pt-5 pb-6 -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

@endsection
