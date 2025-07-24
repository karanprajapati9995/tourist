@extends('layout.mains')

@section('mains-containers')


    <main>

        <section>
            <div class="container-fluid position-relative ">
                <div class="row">
                    <div class="baner position-relative">
                        <!-- Background Image -->
                        <img src="{{url('images/Contactimg.webp')}}" alt="Contact Banner" class="banner-img " />

                        <!-- Centered Text Content -->
                        <div class="position-absolute top-50 start-50 translate-middle text-white ">
                            <h1>Contact Us</h1>
                            <p>
                                We’re here to help—share your thoughts or inquiries with us, <br>
                                and we’ll get back to you soon!
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section class="py-5">
            <div class="container">
                <div class="row align-items-stretch">

                    <!-- Left Section -->
                    <div class="col-lg-3 col-md-6 h-90">
                        <div class="left-section h-100">
                            <img src="{{url('images/Indiya-Get.webp')}}" alt="Gateway of India" class="img-fluid">

                            <div class="location">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4>Location</h4>
                                <p>Office: 123 Maple Street,<br>Springfield</p>
                            </div>
                        </div>
                    </div>


                    <!-- Form Section -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-section h-90">
                            <form>
                                <!-- Name Field -->
                                <div class="form-group ">
                                    <label>Name</label>
                                    <input type="text" class="form-control mt-3" placeholder="Jonnie Dawson">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control mt-3" placeholder="hello@uiwiki.co">
                                </div>

                                <!-- Message Field -->
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control mt-3"
                                        placeholder="I'd love to learn more about your services"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <button class="send-btn px-4 rounded-pill ">Send Now</button>
                            </form>
                        </div>
                    </div>



                    <!-- Right Section -->
                    <div class="col-lg-3 col-md-6">
                        <div class="right-section h-100 ">

                            <!-- Email Card -->
                            <div class="info-card emailes-card">
                                <i class="fas fa-envelope"></i>
                                <div class="info-text">
                                    <strong>Email</strong>
                                    <p>hello@uiwiki.co</p>
                                </div>
                            </div>

                            <!-- Phone Card -->
                            <div class="info-card">
                                <i class="fas fa-phone"></i>
                                <div class="info-text">
                                    <strong>Phone</strong>
                                    <p>Office: +91 6232511522</p>
                                </div>
                            </div>

                            <!-- Social Media Card -->
                            <div class="social-card">
                                <strong class="d-block mb-2">Social Media</strong>
                                <div class="social-icons">
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="youtube"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
            </div>
        </section>


        <section>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609968054!2d72.74109940617357!3d19.08219783915542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63b687c76b3%3A0x68c4b9b5db49c5e3!2sGateway%20Of%20India%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1620024055747!5m2!1sen!2sin"
                width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </section>



    </main>

@endsection