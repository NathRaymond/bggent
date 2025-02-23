@extends('layouts.master')

@section('contents')
@section("headlinks")
<style>
    .page-title {
        background: url('assets/img/home-img.jpg') no-repeat center center/cover;
        color: #fff;
        padding: 100px 0;
    }

    .page-title .container {
        position: relative;
        z-index: 2;
    }

    .page-title::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        /* Optional: dark overlay */
        z-index: 1;
    }
</style>
@endsection
<!-- Page Title -->

<div class="page-title dark-background">
    <div class="container position-relative">
        <h1>Contact</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p style="font-size: 17px;">We’d love to hear from you! Whether you’re looking to hire talent, collaborate, or learn more about our services, feel free to reach out. Our team is ready to assist you.</p>
            </div>
        </div>
    </div>
</div><!-- End Page Title -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6 ">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3> WhatsApp:</h3>
                            <p>Phone/Whatsapp: +234 707 716 8327</p>
                            <p>Whatsapp: +1 (504) 335-5668</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p> bggentertainment@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>

            <div class="col-lg-6">
                <form action="#">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" style="padding: 7px; border-radius:20px; background-color:#68a4c4; border:none; color:white">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>
@endsection