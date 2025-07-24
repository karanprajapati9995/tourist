@extends('layout.mains')
@section('main-containers')


    <main>

        <section>
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="baner position-relative p-0">
                        <img src="{{ url('uploads/' . $packageData->banner_image) }}" alt="Goa Beach" class="banner-img" />
                        <div class="baner-heading text-center position-absolute top-50 start-50 translate-middle text-white">
                            <h1>{{ $packageData->title }}</h1>
                            <p>
                                {{ $packageData->short_description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--images -->

        <section class="my-5">
            <div class="container">


                @php
                    $galleryImages = json_decode($packageData->gallery, true); // decode as array
                @endphp

                <div class="row g-4 d-none d-md-flex">
                    @if (is_array($galleryImages))
                        @foreach ($galleryImages as $indexs => $images)
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                <div class="image-card">
                                    @if ($loop->last)
                                        {{-- <a href="{{ url('gallery.html') }}"> --}}
                                        <img src="{{ url('uploads/' . $images) }}" alt="Image {{ $indexs + 1 }}">
                                        <div class="overlay-text"><span type="button" class="" data-bs-toggle="modal"
                                                data-bs-target="#carouselModal">
                                                View All
                                            </span></div>
                                        {{-- </a> --}}
                                    @else
                                        <img src="{{ url('uploads/' . $images) }}" alt="Image {{ $indexs + 1 }}">
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>


                <div class="modal fade" id="carouselModal" tabindex="-1" aria-labelledby="carouselModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl"> <!-- Large Modal -->
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <!-- Carousel -->
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($galleryImages as $indexss => $imagess)
                                            <div class="carousel-item {{ $indexss === 0 ? 'active' : '' }}">
                                                <img src="{{ url('uploads/' . $imagess) }}" class="d-block w-100 "
                                                    alt="Image {{ $indexss + 1 }}">
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Controls -->
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Swiper for mobile only -->
                <div class="swiper mobile-gallery-slider d-md-none">
                    <div class="swiper-wrapper">
                        @if (is_array($galleryImages))
                            @foreach ($galleryImages as $index => $image)
                                <div class="swiper-slide">
                                    <div class="image-card">
                                        @if ($loop->last)
                                            {{-- <a href="{{ url('gallery.html') }}"> --}}
                                            <img src="{{ url('uploads/' . $image) }}" alt="Image {{ $index + 1 }}">
                                            <div class="overlay-text"><span type="button" class=""
                                                    data-bs-toggle="modal" data-bs-target="#carouselModal">
                                                    View All
                                                </span></div>
                                            {{-- </a> --}}
                                        @else
                                            <img src="{{ url('uploads/' . $image) }}" alt="Image {{ $index + 1 }}">
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- Optional Dots -->
                    <div class="swiper-pagination"></div>
                </div>



                <script>
                    const swiper = new Swiper('.mobile-gallery-slider', {
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        slidesPerView: 1,
                        spaceBetween: 10,
                    });
                </script>

            </div>
        </section>

        <!-- tour form -->



        <section>

            <div class="container my-5 ">
                <div class="row g-5 align-items-start">

                    <!-- Left Side: Tour Content -->
                    <div class="col-lg-7">

                        <!-- Icons -->
                        <div class="tour-icons">
                            <div class="icon-box">
                                <i class="fa-solid fa-clock"></i>
                                <span>{{ $packageData->tour_days }}</span>
                            </div>
                            <div class="icon-box">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>{{ $packageData->tour_location }}</span>
                            </div>
                        </div>
                        @php
                            $fullDescription = strip_tags($packageData->description); // remove HTML tags
                            $shortDescription = Str::limit($fullDescription, 1555); // show only first 1555 characters
                        @endphp

                        <div class="ture-description">
                            <h2>{{ $packageData->title }}</h2>

                            <!-- Visible Short Description -->
                            <p class="short-description">
                                {{ $shortDescription }}<span class="dots">...</span>
                            </p>

                            <!-- Hidden Full Description -->
                            <div class="extra-content" style="display: none;">
                                <p>{{ $fullDescription }}</p>
                            </div>

                            <button class="read-more-btn mt-2">Read More</button>
                        </div>

                    </div>

                    <!-- Right Side: Booking Form -->
                    <div class="col-lg-5">
                        <div class="booking-form">

                            <form action="{{url('/book-tour')}}" method="POST">
                                @csrf

                                 @if(session('success'))
                                 <p style="color: green;">{{ session('success') }}</p>
                                  @endif
                                <h4>Book this tour</h4>
                                <div class="mb-3">
                                    <label class="form-label">Tour Name</label>
                                    <input type="text" class="form-control @error('tour_name') is-invalid @enderror" placeholder="Tour Name" name="tour_name" value="{{ old('tour_name') }}">
                                       @error('tour_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" name="name" value="{{ old('name') }}" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                                       @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter your Phone number" name="phone_number" value="{{ old('phone_number') }}"  oninput="this.value = this.value.replace(/[^0-9]/g, '')" maxlength="10">
                                       @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email id</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your Email id" name="email" value="{{ old('email') }}">
                                       @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Number of Persons</label>
                                    <input type="number" class="form-control @error('persons') is-invalid @enderror" placeholder="Persons*" name="persons" value="{{ old('persons') }}">
                                       @error('persons')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Number of Children</label>
                                    <input type="number" class="form-control @error('children') is-invalid @enderror" placeholder="Persons*" name="children" value="{{ old('children') }}">
                                       @error('children')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" rows="4" placeholder="Enter the message" name="message" value="{{ old('message') }}"></textarea>
                                       @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                                </div>

                                <button type="submit" id="bookingformbtn" >Book Now</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="fs-1"><b>Tour Itinerary</b> </h2>
                        <p>Recommended Options</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- accordions -->

        <section>
            <div class="container">
                <div class="row">

                    <div class="itinerary-section">
                        <div class="accordion">


                            @foreach ($destinationsdetails as $packageData_key => $destinations_value)
                                <div class="accordion-item">
                                    <div class="accordion-header" onclick="toggleAccordion(this)">
                                      


                                        <h5 class="title"><span class="plusicon">+</span>{{$destinations_value->name}}</h5>
                                    </div>
                                    <div class="accordion-body">
                                        <p>{!! $destinations_value->description !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>


                </div>
            </div>
        </section>

        <!-- hotels-->


        <section>
            <div class="container">
                <div class="row">
                    <h1>Our Tours </h1>
                    <p>Recommendations Curated tours for every kind of traveler.</p>
                    <div class="swiper mySwiper " id="tourSwiper">

                        <div class="swiper-wrapper">


                            {{-- start --}}
                            @foreach ($alltour as $all)
                                <div class="swiper-slide">
                                    <div>
                                        <div class="card-box">
                                            <img src="{{ url('uploads/' . $all->thumnail_image) }}" alt=""
                                                class="img-fluid">
                                            <div class="card-hedeing mt-2">
                                                <h3>{{ $all->destination_name }}</h3>
                                                <p> <i
                                                        class="fa-solid  fa-indian-rupee-sign"></i><b>{{ $all->price }}</b>
                                                </p>
                                            </div>
                                            @php
                                                $rating = $all->stars; // e.g. 3.5, 4, etc.
                                                $fullStars = floor($rating); // Full stars
                                                $halfStar = $rating - $fullStars >= 0.5 ? true : false;
                                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                            @endphp
                                            <div class="card-hedeing">
                                                <p class="card-subtitle">{{ $all->title }}</p>
                                                <div class=" d-flex align-items-center">
                                                    {{-- Full Stars --}}
                                                    @for ($i = 0; $i < $fullStars; $i++)
                                                        <i class="fa-solid fa-star text-warning"></i>
                                                    @endfor

                                                    {{-- Half Star --}}
                                                    @if ($halfStar)
                                                        <i class="fa-solid fa-star-half-stroke text-warning"></i>
                                                    @endif

                                                    {{-- Empty Stars --}}
                                                    @for ($i = 0; $i < $emptyStars; $i++)
                                                        <i class="fa-regular fa-star text-warning"></i>
                                                    @endfor
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-between mt-2">
                                               
                                                <span class="review ms-2 text-muted">{{$all->reviews}} Reviews</span>
                                            </div>

                                            <div>
                                                @foreach ($all->attractions as $attraction)
                                    <div class="feature-item">
                                        <img src="{{ url('project/images/right.webp') }}" alt=""
                                            style="height: 20px; width: 20px;">
                                        {{ $attraction }}
                                    </div>
                                @endforeach
                                            </div>

                                            <div>
                                                <button class="btn-see-more " onclick="location.href='{{ url('package/'.$all->slug) }}'">See More</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- end --}}





                        </div>



                        <div class="swiper-pagination" id="tourSwiper-pagination"></div>

                    </div>
                </div>
            </div>
        </section>




    </main>
    <!--swiper slider scripat-->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper("#tourSwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000, // Slide change delay in ms (3 seconds)
                    disableOnInteraction: false // Autoplay continues even after user interaction
                },
                pagination: {
                    el: "#tourSwiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    576: {
                        slidesPerView: 1,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    992: {
                        slidesPerView: 3,
                    },
                    1200: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>


    <!-- only for mobile phone  swiper scripat for images -->

    <script>
        const gallerySwiper = new Swiper(".mobile-gallery-slider", {
            slidesPerView: 1, // Default for mobile: only one image visible
            spaceBetween: 10,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                // 576px and up — small tablets
                576: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                // 768px and up — tablets
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },

            },
        });
    </script>


    <!-- read button scripat -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const readMoreBtn = document.querySelector('.read-more-btn');
            const extraContent = document.querySelector('.extra-content');
            const shortDescription = document.querySelector('.short-description');

            readMoreBtn.addEventListener('click', function() {
                const isHidden = extraContent.style.display === 'none' || extraContent.style.display === '';

                extraContent.style.display = isHidden ? 'block' : 'none';
                shortDescription.style.display = isHidden ? 'none' : 'block';
                this.textContent = isHidden ? 'Read Less' : 'Read More';
            });
        });
    </script>
    <script>
        function toggleAccordion(header) {
            const item = header.parentElement;
            item.classList.toggle('active');
        }
    </script>



@endsection
