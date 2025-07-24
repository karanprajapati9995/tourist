@extends('layout.mains')

@section('mains-containers')

 <main>

        <!--baner data -->

        <div class="swiper myUniqueSwiper" style="position: relative;">
            <div class="swiper-wrapper">

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


        <!-- buttons -->

        <form action="{{ url()->current() }}" method="GET">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex gap-3 mt-4">

                        <div class="dropdown">
                            <button class=" dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Filter
                            </button>

                            <div class="dropdown-menu custom-filter p-3" aria-labelledby="dropdownMenuButton1">
                                <!-- By Destination / Region -->
                                <div class="filter-group">
                                    <h6>By Destination / Region</h6>
                                    @foreach ($region as $regions)
                                    <div>
                                        <input type="radio" name="region" value="{{$regions->id}}"
                                        {{ request('region') == $regions->id ? 'checked' : ''}}> {{ $regions->name}}
                                    </div>

                                    @endforeach
                                    
                                </div>

                                <!-- By Budget -->
                                <div class="filter-group mt-3">

                                    <h6>By Budget</h6>
                                    @foreach ($budget as $budgets )
                                    <div>
                                        <input type="radio" name="budget" value="{{$budgets->id}}"
                                        {{ request('budget') == $budgets->id ? 'checked' : ''}}> 
                                        {{$budgets->name}}
                                    </div>
                                    @endforeach
                                    
                                </div>

                                <!-- By Duration -->
                                <div class="filter-group mt-3">
                                    <h6>By Duration</h6>
                                    @foreach ($duration as $durations)
                                           
                                    <div><input type="radio" name="duration" value="{{ $durations->id}}"
                                        {{ request('duration') == $durations->id ? 'checked' : ''}}> 
                                        {{$durations->name}}
                                    </div>
                                    @endforeach
                                    
                                </div>

                                <!-- By Type of Traveler -->
                                <div class="filter-group mt-3">
                                    <h6>By Type of Traveler</h6>
                                    @foreach ($traveler as $travelers)
                                           
                                    <div><input type="radio" name="duration" value="{{ $travelers->id}}"
                                        {{ request('traveler') == $travelers->id ? 'checked' : ''}}> 
                                        {{$travelers->name}}
                                    </div>
                                    @endforeach
                                </div>

                                <!-- By Experience Type -->
                                <div class="filter-group mt-3">
                                    <h6>By Experience Type</h6>
                                    @foreach ($experience as $experience)
                                           
                                    <div><input type="radio" name="duration" value="{{ $experiences->id}}"
                                        {{ request('experience') == $experiences->id ? 'checked' : ''}}> 
                                        {{$experiences->name}}
                                    </div>
                                    @endforeach
                                </div>
                                <button class="apply-btn" type="button">
                                    Apply Now
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </form>


        <div class="container mt-4">
            <div class="row ">


          @foreach ($packageList as $packageLists)
                    <div class="col-12 col-sm-6 col-lg-4 my-2">
                        <div class="card-box">
                            <img src="{{ url('uploads/' . $packageLists->thumnail_image) }}"
                                alt="{{ $packageLists->destination_name }}" class="img-fluid">

                            <!-- Title and Price -->
                            <btn-see-more class="card-heading mt-3">
                                <h5 class="mb-0">{{ $packageLists->destination_name }}</h5>
                                <p class="mb-0"><i class="fa-solid fa-indian-rupee-sign"></i>
                                    <b>{{ $packageLists->price }}</b>
                                </p>
                            </btn-see-more

                            <!-- Subtitle and Rating -->
                            @php
                                $rating = $packageLists->stars; // e.g. 3.5, 4, etc.
                                $fullStars = floor($rating); // Full stars
                                $halfStar = $rating - $fullStars >= 0.5 ? true : false;
                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                            @endphp

                            <div class="card-details mt-2">
                                <p class="card-subtitle mb-0">{{ $packageLists->title }}</p>
                                <div class="d-flex align-items-center">
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


                            <!-- Duration & Reviews -->
                            <div class="d-flex justify-content-between align-items-center mt-3">

                                <span class="text-muted small">{{ $packageLists->reviews }} Reviews</span>
                            </div>

                            <!-- Repeated Features -->
                            <div>
                                @foreach ($packageLists->attractions as $attraction)
                                    <div class="feature-item">
                                        <img src="{{ url('project/images/right.webp') }}" alt=""
                                            style="height: 20px; width: 20px;">
                                        {{ $attraction }}
                                    </div>
                                @endforeach
                            </div>

                            <!-- Button -->
                            <button class="btn-see-more" onclick="location.href='{{ url('package/'.$packageLists->slug) }}'">See More</button>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>




    </main>


@endsection