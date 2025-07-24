    <footer>
        <div class="container">
            <div class="row">

                <!-- Logo & Newsletter -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="footer-content">
                        <img src="{{url('images/logo.webp')}}" alt="Viaggi Logo" class="img-fluid mb-3 footer-img">
                        <p>Viaggi is your trusted travel partner for <br> discovering the rich beauty and diversity of
                            India.</p>

                        <div class="position-relative">
                            <input type="email" class="form-control" placeholder="Enter Your Email">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </div>

                <!-- Support & Help -->
                <div class="col-xl-4 col-lg-4 col-md-6 footer-content-2">
                    <div>
                        <h3>Support & Help</h3>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white text-decoration-none fs-5">Help Center</a></li>
                            <li><a href="#" class="text-white text-decoration-none fs-5">FAQs</a></li>
                            <li><a href="#" class="text-white text-decoration-none fs-5">Cancellation Policy</a></li>
                            <li><a href="#" class="text-white text-decoration-none fs-5">Refund Policy</a></li>
                            <li><a href="#" class="text-white text-decoration-none fs-5">Travel Guidelines</a></li>
                            <li><a href="#" class="text-white text-decoration-none fs-5">Terms & Conditions</a></li>
                            <li><a href="#" class="text-white text-decoration-none fs-5">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Contact & Social -->
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="footer-content-3">
                        <h3>Contact Us</h3>

                        <li><a href="tel:+919999988888" class="text-white text-decoration-none">Phone
                                +91-99999-88888</a></li>
                        <li><a href="mailto:support@viaggiindia.com" class="text-white text-decoration-none">Email
                                support@viaggiindia.com</a></li>


                        <h5 class="mt-3">Follow Us:</h5>
                        <div class="d-flex gap-3 mt-2">
                            <a href="#" class="text-white icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white  icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-white  icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- // myUniqueSwiper - normal direction, updated delay-->
    <script>

        var swiper = new Swiper(".myUniqueSwiper", {
            loop: true,
            autoplay: {
                delay: 3000, // ✅ new delay
                disableOnInteraction: false,
                reverseDirection: false,
            },
            navigation: {
                nextEl: '.myUniqueSwiper .swiper-button-nex', // Scoped to this Swiper only
                prevEl: '.myUniqueSwiper .swiper-button-pre',
            },
        });


    </script>
    <!-- // tourSwiper - reverse direction, only delay updated //-->

    <script>
        const tourSwiper = new Swiper("#tourSwiper", {
            loop: true,
            autoplay: {
                delay: 4000, // ✅ new delay
                disableOnInteraction: false,
                reverseDirection: true, // intentionally reversed
            },
            pagination: {
                el: "#tourSwiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: "#tourSwiper-next",
                prevEl: "#tourSwiper-prev",
            },
            breakpoints: {
                320: { slidesPerView: 1, spaceBetween: 10 },
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
            },
        });
    </script>

    <!--  Responsive Swiper for mobile - myUniqueSwiper-->
    <script>
        let mySwiper = null;
        const mobileBreakpoint = window.matchMedia('(max-width: 767px)');

        function toggleSwiper(e) {
            if (e.matches) {
                if (!mySwiper) {
                    mySwiper = new Swiper('.myMobileSwiperOnly', { // CHANGED class
                        slidesPerView: 1,
                        spaceBetween: 10,
                        loop: true,
                        autoplay: {
                            delay: 4500, // ✅ new delay
                            disableOnInteraction: false,
                            reverseDirection: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                }
            } else {
                if (mySwiper) {
                    mySwiper.destroy(true, true);
                    mySwiper = null;
                }
            }
        }

        mobileBreakpoint.addEventListener('change', toggleSwiper);
        toggleSwiper(mobileBreakpoint);
    </script>

    <script>
        // Responsive Swiper for myMobileSwiper
        let mobileSwiper = null;
        const mq = window.matchMedia("(max-width: 767px)");

        function toggleMobileSwiper(e) {
            if (e.matches) {
                if (!mobileSwiper) {
                    mobileSwiper = new Swiper('.myMobileSwiper', {
                        slidesPerView: 1,
                        spaceBetween: 20,
                        loop: true,
                        autoplay: {
                            delay: 3500, // ✅ new delay
                            disableOnInteraction: false,
                            reverseDirection: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                }
            } else {
                if (mobileSwiper) {
                    mobileSwiper.destroy(true, true);
                    mobileSwiper = null;
                }
            }
        }
        mq.addEventListener('change', toggleMobileSwiper);
        toggleMobileSwiper(mq);
    </script>

    <!--        // clientSwiperInstance - normal direction, updated delay-->
    <script>

        var clientSwiperInstance = new Swiper(".clientSwiper", {
            loop: true,
            autoplay: {
                delay: 4500, // ✅ new delay
                disableOnInteraction: false,
                reverseDirection: false,
            },
            navigation: {
                nextEl: ".swiper-button-next-custom",
                prevEl: ".swiper-button-prev-custom",
            },
            breakpoints: {
                320: { slidesPerView: 1, spaceBetween: 10 },
                640: { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 30 },
                1440: { slidesPerView: 3, spaceBetween: 30 },
            },
        });
    </script>

    <!--header script -->

    <script>
        const toggleBtn = document.getElementById("menuToggle");
        const closeBtn = document.getElementById("menuClose");
        const menu = document.getElementById("offcanvasMenu");

        toggleBtn.addEventListener("click", () => {
            menu.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            menu.classList.remove("active");
        });

        // Optional: Close menu when link is clicked
        document.querySelectorAll("#offcanvasMenu .nav-link").forEach(link => {
            link.addEventListener("click", () => {
                menu.classList.remove("active");
            });
        });
    </script>



</body>

</html>