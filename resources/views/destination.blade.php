@extends('layout.mains')

@section('mains-containers')


    <main>
        <section>
            <div class="container-fluid position-relative">
                <div class="row">
                    <div class="baner position-relative">
                        <img src="{{url('images/Contactimg.webp')}}" alt="Inspiring Destinations" class="banner-img" />
                        <div
                            class=" text-center position-absolute  text-white">
                            <h1>Destinations That Inspire Your Journey</h1>
                            <p>
                                Choose from breathtaking beaches, historical wonders, and vibrant cities across India
                                and
                                around the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="destination-section">
            <div class="container">
                <!-- Title -->
                <h2>Explore Our Top Travel Destinations</h2>
                <div class="filters my-3">

                    <button class="filter-btn active" data-category="all">All</button>
                    @foreach ($fillter as $fillters)
                       <button class="filter-btn" data-category="{{$fillters->id}}">{{$fillter->name}}</button> 
                    @endforeach
                    
                    
                </div>


                <!-- Desktop Grid View -->
                <div class="row" id="destination-list">
                    <!-- Repeat this block for each destination -->

                         @foreach ($destinationsList as $destinations )
    
                    <div class="col-6 col-sm-6 col-md-4 mb-4" data-category="{{$destinations->region_id}}">
                        <div class="image"><img src="{{ url('uploads/' . $destinations->thumnail_image) }}" class="img-fluid">
                            <a href="{{ url('destination/'.$destinations->slug)}}">
                                <p>{{$destinations->destination_name}}</p>
                            </a>
                        </div>
                    </div>

                    @endforeach

                    <!-- Add more destination cards here -->
                </div>
                



                <!-- Custom Pagination -->
            @if($destinationsList->lastpage() > 1)
                <div class="container pb-5">
                    <div class="row align-items-center justify-content-between mt-5 text-center text-md-start">
                        @if($destinationsList->firstpage())
                        <!-- Previous Button (Left) -->
                        <button class="page-pre-btn" disabled >Previous</button>
                        @else
                        <a href="{{$destionsList->previousPageUrl()}}">
                            <button class="page-pre-btn">Previous</button>
                        </a>

                        @endif

                        <!-- Pagination Numbers (Center) -->
                        <div class="col-4 d-flex justify-content-center">
                            <div class=" d-flex gap-2">
                                @for($i = 1; $i <= destinationsList->lastpage(); $i++) 
                                @if($destinationsList->currentPage())
                                <button class="page-btn active">{{$i}}</button>
                                @elseif ($i == 1 || $i == $destinationsList->lastPage() ||
                                ($i >=destinationsList->currentPage()-1 && $i <=destinationsList->currentPage()+1))
                                <a href="{{$destinationsList->url($i)}}">
                                <button class="page-btn">{{$i}}</button>
                                </a>
                                @elseif ($i == 2 || $i == $destinationsList->lastPage()-1)
                                <button class="page-btn">...</button>
                                
                                 @endif
                                @endfor
                            </div>
                        </div>

                        <!-- Next Button (Right) -->
                        <div class="col-4 text-end">
                            @if($destinationsList->hasMorePages)
                            <a href="{{$destinationsList->nextPageUrl()}}">
                            <button class="page-next-btn">Next</button>
                            </a>
                            @else
                             <button class="page-next-btn" disabled>Next</button>
                            @endif
                        </div>

                    </div>
                </div>

            @endif



            </div>
        </section>
    </main>


    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".filter-btn");
        const items = document.querySelectorAll(".destination-item");

        buttons.forEach(button => {
            button.addEventListener("click", function () {
                const category = this.getAttribute("data-category");

                items.forEach(item => {
                    const itemCategory = item.getAttribute("data-category");

                    if (category === "all" || category === itemCategory) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });

                // Optional: active class toggle
                buttons.forEach(btn => btn.classList.remove("active"));
                this.classList.add("active");
            });
        });
    });
</script>

@endsection