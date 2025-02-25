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
        <h1 style="color:white;font-weight: bold;">CONTACT US</h1>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <p style="font-size: 17px; color:white; font-weight: bold;">
                    Contact us if you need to hire talent, collaborate, partner or have need of our creative solutions. Our Team is ready to assist you.</p>
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
                            <h3 style="color:black"> WhatsApp:</h3>
                            <p style="color:black">Phone/Whatsapp: +234 707 716 8327</p>
                            <p style="color:black">Whatsapp: +1 (504) 335-5668</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3 style="color:black">Email Us</h3>
                            <p style="color:black"> bggentertainment@gmail.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>

            <div class="col-lg-6">
                <form action="#">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="" style="color:black">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="" style="color:black">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="" style="color:black">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Message" required="" style="color:black"></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" style="padding: 7px; border-radius:20px; background-color:#007bff; border:none; color:white;">Send Message</button>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>
</section>
@endsection