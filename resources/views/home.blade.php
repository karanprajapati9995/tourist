@extends('layout.mains')

@section('mains-containers')

<main>


        <!-- baner section-->



        <div class="swiper myUniqueSwiper" style="position: relative;">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                
                <!-- Slide 2 -->
                @foreach ($banners as $banner )
                    
                <div class="swiper-slide">
                    <div class="baner1 position-relative">
                        <img src="{{url('uploads/'.$banner->image)}}" alt="Banner" class="slide-bg" />
                        <div class="baner-heading text-center position-relative">
                            <h1>{{$banner->name}}</h1>
                            <p> {{$banner->short_content}} </p>
                            <a href="{{$banner->link}}">
                                <button class="explore-btn">Explore More <i class="fa fa-arrow-right"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->


            <!-- Navigation Buttons -->
            <div class="arrow-button">
                <button class="swiper-button-nex">
                    <i class="fas fa-arrow-left-long text-white"></i>
                </button>
                <button class="swiper-button-pre">
                    <i class="fas fa-arrow-right-long text-white"></i>
                </button>
            </div>
        </div>

        </div>

        <!-- Heding text -->

        <section>
            <div class="container heding">
                <h1>India’s Top Destination</h1>
            </div>
        </section>

        <!-- image section -->
        <section>
            <!-- Desktop/Tablet view -->
            <div class="content-desktop container btn-btn-primary">
                <div class="row gx-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="image"><img src="{{url('images/manali.webp')}}" class="img-fluid">
                            <a href="detaile.html">
                                <p>Ladakh</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="image"><img src="{{url('images/Hawa mahal.webp')}}" class="img-fluid">
                            <a href="detaile.html">
                                <p>Jaipur</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="image"><img src="{{url('images/Lotus temple.webp')}}" class="img-fluid">
                            <a href="detaile.html">
                                <p>Lotus Temple</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="image"><img src="{{url('images/Ladakh.webp')}}" class="img-fluid">
                            <a href="detaile.html">
                                <p>Ladakh</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="image"><img src="{{url('images/Khagrachair.webp')}}" class="img-fluid">
                            <a href="detaile.html">
                                <p>Ladakh</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="image"><img src="{{url('images/Taj mahal.webp')}}" class="img-fluid">
                            <a href="detaile.html">
                                <p>Taj Mahal</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile view (Swiper) -->
            <div class="content-mobile">
                <div class="swiper myMobileSwiperOnly"> <!-- CHANGED FROM myUniqueSwiper to myMobileSwiperOnly -->
                    <div class="swiper-wrapper">
                        <!-- loop through same items -->
                        <div class="swiper-slide">
                            <div class="image"><img src="{{url('images/manali.webp')}}" class="img-fluid">
                                <a href="detaile.html">
                                    <p>Ladakh</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image"><img src="{{url('images/Hawa mahal.webp')}}" class="img-fluid">
                                <a href="detaile.html">
                                    <p>Jaipur</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image"><img src="{{url('images/Lotus temple.webp')}}" class="img-fluid">
                                <a href="detaile.html">
                                    <p>Lotus Temple</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image"><img src="{{url('images/Ladakh.webp')}}" class="img-fluid">
                                <a href="detaile.html">
                                    <p>Ladakh</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image"><img src="{{url('images/Khagrachair.webp')}}" class="img-fluid">
                                <a href="detaile.html">
                                    <p>Ladakh</p>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image"><img src="{{url('images/Taj mahal.webp')}}" class="img-fluid">
                                <a href="detaile.html">
                                    <p>Taj Mahal</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section>

        <!-- body content section -->


        <section>
            <div class="container-fluid text-content px-2">
                <div class="row">
                    <div class="col-12 text-center py-5 container-text ">
                        <h1>Plan Your Dream Trip To India</h1>
                        <p>Explore Breathtaking destinations, Hidden <br> gems, Authentic Experiences</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center para">
                        <h1>Explore Our Featured Packages</h1>
                        <p>Exclusive deals, unique destinations, and carefully curated tours just for you.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <!-- slider -->

        <section>
            <div class="container">
                <div class="row">
                    <div class="swiper mySwiper " id="tourSwiper">

                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div class="card-box">
                                        <img src="{{url('images/sliders-image/Goa.webp')}}" alt="" class="img-fluid">
                                        <div class="card-hedeing mt-2">
                                            <h3>Goa</h3>
                                            <p> <i class="fa-solid  fa-indian-rupee-sign"></i><b>11,000</b></p>
                                        </div>
                                        <div class="card-hedeing">
                                            <p class="card-subtitle">Discover the Magic of Kashmir</p>
                                            <div class=" d-flex align-items-center">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-2">
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <span class="review ms-2 text-muted">1.5k Reviews</span>
                                        </div>

                                        <div>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                        </div>

                                        <div>
                                            <button class="details-btn " onclick="location.href='Detaile.html'">See
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="card-box">
                                        <img src="{{url('images/sliders-image/Varanasi.webp')}}" alt="" class="img-fluid">
                                        <div class="card-hedeing mt-2">
                                            <h3>Varanasi</h3>
                                            <p> <i class="fa-solid  fa-indian-rupee-sign"></i><b>11,000</b></p>
                                        </div>
                                        <div class="card-hedeing">
                                            <p class="card-subtitle">Discover the Magic of Kashmir</p>
                                            <div class=" d-flex align-items-center">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-2">
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <span class="review ms-2 text-muted">1.5k Reviews</span>
                                        </div>

                                        <div>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                        </div>
                                        <div>
                                            <button class="details-btn " onclick="location.href='Detaile.html'">See
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="card-box">
                                        <img src="{{url('images/sliders-image/Goa.webp')}}" alt="" class="img-fluid">
                                        <div class="card-hedeing mt-2">
                                            <h3>Goa</h3>
                                            <p> <i class="fa-solid  fa-indian-rupee-sign"></i><b>11,000</b></p>
                                        </div>
                                        <div class="card-hedeing">
                                            <p class="card-subtitle">Discover the Magic of Kashmir</p>
                                            <div class=" d-flex align-items-center">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-2">
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <span class="review ms-2 text-muted">1.5k Reviews</span>
                                        </div>

                                        <div>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                        </div>
                                        <div>
                                            <button class="details-btn " onclick="location.href='Detaile.html'">See
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="card-box">
                                        <img src="{{url('images/sliders-image/Goa.webp')}}" alt="" class="img-fluid">
                                        <div class="card-hedeing mt-2">
                                            <h3>Goa</h3>
                                            <p> <i class="fa-solid  fa-indian-rupee-sign"></i><b>11,000</b></p>
                                        </div>
                                        <div class="card-hedeing">
                                            <p class="card-subtitle">Discover the Magic of Kashmir</p>
                                            <div class=" d-flex align-items-center">
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-solid fa-star text-warning"></i>
                                                <i class="fa-regular fa-star text-warning"></i>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-2">
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <span class="review ms-2 text-muted">1.5k Reviews</span>
                                        </div>

                                        <div>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                            <li><img src="{{url('images/right.webp')}}" alt="" class="img-fluid"
                                                    style="height: 20px;width: 20px;"> 11Night/12 Days</li>
                                        </div>
                                        <div>
                                            <button class="details-btn " onclick="location.href='Detaile.html'">See
                                                More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="swiper-pagination" id="tourSwiper-pagination"></div>

                    </div>
                </div>
            </div>
        </section>


        <!-- marquee tag  -->


        <marquee behavior="scroll" direction="left" style="width: 100%;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center me-4">
                    <h1 class="me-2">incredible-india</h1>
                    <img src="{{url('images/indiaLogo.webp')}}" alt="">
                </div>
                <div class="d-flex align-items-center me-4">
                    <h1 class="me-2">incredible-india</h1>
                    <img src="{{url('images/indiaLogo.webp')}}" alt="">
                </div>
                <div class="d-flex align-items-center me-4">
                    <h1 class="me-2">incredible-india</h1>
                    <img src="{{url('images/indiaLogo.webp')}}" alt="">
                </div>
            </div>
        </marquee>



        <section>
            <div class="container-fluid">
                <div class="row discover-content" style="min-height: 100vh;">

                    <!-- Left Column (Text) -->
                    <div class="col-md-7 text-md-start">
                        <div class="content-data px-3 px-md-5">
                            <h1>Discover India like never before</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <button class="mt-3">View details</button>
                        </div>
                    </div>

                    <!-- Right Column (Image) -->
                    <div class="col-md-5 mb-md-0">
                        <div class="image-container position-relative">
                            <img src="{{url('images/Indiya-Get.webp')}}" alt="" class="img-fluid content-img">
                        </div>
                    </div>

                </div>
            </div>

        </section>










     <section class="baner-2 position-relative">
    <!-- Background image as <img>, placed behind content -->
    <img src="{{url('images/peric.webp')}}" alt="Background" class="bg-img position-absolute w-100 h-100 top-0 start-0" style="object-fit: cover; z-index: -1;" />

    <div class="container">
        <div class="baner-2-content text-center">
            <h1>Why Choose us?</h1>
        </div>

        <!-- Grid for Desktop/Tablet -->
        <div class="content-desktop row">
            <div class="col-12 col-md-4 mt-5">
                <div class="item-box baner-2-text">
                    <h2>Everything You Need,</h2>
                    <p>From booking flights and trains to finding the perfect hotel, we bring all your travel
                        needs together on one easy-to-use platform.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-5">
                <div class="item-box baner-2-text">
                    <h2>Everything You Need,</h2>
                    <p>From booking flights and trains to finding the perfect hotel, we bring all your travel
                        needs together on one easy-to-use platform.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-5">
                <div class="item-box baner-2-text">
                    <h2>Everything You Need,</h2>
                    <p>From booking flights and trains to finding the perfect hotel, we bring all your travel
                        needs together on one easy-to-use platform.</p>
                </div>
            </div>
        </div>

        <!-- Slider for Mobile -->
        <div class="content-mobile">
            <div class="swiper myMobileSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide p-2">
                        <div class="item-box baner-2-text">
                            <h2>Everything You Need,</h2>
                            <p>From booking flights and trains to finding the perfect hotel, we bring all your
                                travel needs together on one easy-to-use platform.</p>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="item-box baner-2-text">
                            <h2>Everything You Need,</h2>
                            <p>From booking flights and trains to finding the perfect hotel, we bring all your
                                travel needs together on one easy-to-use platform.</p>
                        </div>
                    </div>
                    <div class="swiper-slide p-2">
                        <div class="item-box baner-2-text">
                            <h2>Everything You Need,</h2>
                            <p>From booking flights and trains to finding the perfect hotel, we bring all your
                                travel needs together on one easy-to-use platform.</p>
                        </div>
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>







        <section>
            <div class="container experiences-data">
                <div class="row">
                    <div class="col-12">
                        <h1>Customer Experiences</h1>
                        <p>Hear the trusted feedback from customers who have put their faith in us</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- customswiper -->
        <section>
            <div class="client">
                <div class="container-fluid">
                    <div class="row">
                        <div class="swiper clientSwiper">
                            <div class="swiper-wrapper">
                                <!-- Repeatable Swiper Slide -->
                                <div class="swiper-slide ">
                                    <div class="clients  border rounded">
                                        <div class="client-data">
                                            <div class="client-img d-flex align-items-center gap-3">
                                                <div>
                                                    <img src="{{url('images/client-image/client.webp')}}" alt="" class="img-fluid"
                                                        width="60">
                                                </div>
                                                <div class="client-text">
                                                    <h5>John Walker</h5>
                                                    <p>Company</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button>CEO</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4>Top-Notch Quality</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>21.05.2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clients  border rounded">
                                        <div class="client-data">
                                            <div class="client-img d-flex align-items-center gap-3">
                                                <div>
                                                    <img src="{{url('images/client-image/client-2.webp')}}" alt="" class="img-fluid"
                                                        width="60">
                                                </div>
                                                <div class="client-text">
                                                    <h5>John Walker</h5>
                                                    <p>Company</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button>CEO</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4>Top-Notch Quality</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>21.05.2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clients  border rounded">
                                        <div class="client-data">
                                            <div class="client-img d-flex align-items-center gap-3">
                                                <div>
                                                    <img src="{{url('images/client-image/client.webp')}}" alt="" class="img-fluid"
                                                        width="60">
                                                </div>
                                                <div class="client-text">
                                                    <h5>John Walker</h5>
                                                    <p>Company</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button>CEO</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4>Top-Notch Quality</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>21.05.2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clients  border rounded">
                                        <div class="client-data">
                                            <div class="client-img d-flex align-items-center gap-3">
                                                <div>
                                                    <img src="{{url('images/client-image/client-2.webp')}}" alt="" class="img-fluid"
                                                        width="60">
                                                </div>
                                                <div class="client-text">
                                                    <h5>John Walker</h5>
                                                    <p>Company</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button>CEO</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4>Top-Notch Quality</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>21.05.2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="clients  border rounded">
                                        <div class="client-data">
                                            <div class="client-img d-flex align-items-center gap-3">
                                                <div>
                                                    <img src="{{url('images/client-image/client.webp')}}" alt="" class="img-fluid"
                                                        width="60">
                                                </div>
                                                <div class="client-text">
                                                    <h5>John Walker</h5>
                                                    <p>Company</p>
                                                </div>
                                            </div>
                                            <div class="mt-3">
                                                <button>CEO</button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>
                                            <h4>Top-Notch Quality</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <hr>
                                        <div>
                                            <p>21.05.2024</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Repeat the .swiper-slide block as needed -->
                            </div>


                            <!-- Pagination -->
                            <!-- <div class="swiper-pagination client-swiper-pagination"></div> -->
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center ">
                            <div class="clients-Buttons">
                                <button class="swiper-button-prev-custom"><i
                                        class="fas fa-arrow-left-long"></i></button>
                                <button class="swiper-button-next-custom"><i
                                        class="fas fa-arrow-right-long"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection