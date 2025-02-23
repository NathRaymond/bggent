@extends('layouts.master')

@section('contents')
<style>
    .page-title {
        background: url('assets/img/services-img1.webp') no-repeat center center/cover;
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
<!-- Page Title -->
<div class="page-title dark-background">
    <div class="container position-relative">
        <h1>Our Services</h1>
    </div>
</div>
<section id="features" class="features section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>What We Offer</h2>
    </div><!-- End Section Title -->

    <div class="container">
        <div class=" align-items-center features-item" style="margin-top: -40px;">
            <h3 style="font-size: 18px; text-align: center;">At BGG ENTERTAINMENT, we offer a range of services designed to empower individuals and communities:</h3>
            <p style="text-align: justify;">
                At BGG ENTERTAINMENT, we provide a dynamic platform that nurtures talent,
                fosters creativity, and connects gifted individuals with exciting work opportunities.
                From content creation to talent management, we are committed to elevating our premier
                talents to global recognition through exclusive entertainment events, media productions,
                and creative collaborations.
            </p>
        </div>
    </div>
</section>

<section id="featured-services" class="featured-services section">

    <div class="container" style="margin-top: -80px;">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Content Creation Services</h3>
                        <p style="text-align: justify;">Our team of expert creatives brings your vision to life with high-quality content tailored for various industries:</p>
                    </a>
                    <p style="text-align: justify;">
                        <b><i class="bi bi-check2-all"></i> Animation –</b> Engaging and immersive animated storytelling.<br>
                        <b><i class="bi bi-check2-all"></i> Social Media Campaigns – </b>IG & TikTok campaigns designed for brand growth.<br>
                        <b><i class="bi bi-check2-all"></i> Corporate Campaigns – </b>Professional content strategies for businesses.<br>
                        <b><i class="bi bi-check2-all"></i> Retail Product Campaigns –</b> Creative branding and marketing solutions.<br>
                        <b><i class="bi bi-check2-all"></i> Visual Arts – </b>Stunning graphic and digital art for diverse needs.<br>
                        <b><i class="bi bi-check2-all"></i> Music Jingles – </b>Custom jingles to enhance brand recognition.<br>
                        <b><i class="bi bi-check2-all"></i> Graphic Design & Website Development – </b>Eye-catching designs and web solutions.
                    </p>
                </div>
            </div><!-- End Service Item -->

            <!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Talent Management Services</h3>
                        <p>BGG ENTERTAINMENT provides top-tier talent management and placement in:</p>
                    </a>
                    <p><i class="bi bi-check2-all"></i> Music & Art Festivals</p>
                    <p> <i class="bi bi-check2-all"></i> Music Videos & Films</p>
                    <p> <i class="bi bi-check2-all"></i> Concerts & Exclusive Private Events</p>
                    <p> <i class="bi bi-check2-all"></i> Weddings & Birthdays</p>
                    <br>
                    <a href="#" class="stretched-link">
                        <h3>Entertainment Services</h3>
                        <p>We represent a diverse range of entertainment professionals, including:</p>
                    </a>
                    <p><i class="bi bi-check2-all"></i> <b>Singers & Musicians –</b> Male & female vocalists, background singers, drummers, pianists, guitarists.</p>
                    <p> <i class="bi bi-check2-all"></i> <b>Dancers & Performers –</b> Male & female dancers, child dancers, actors, DJs, presenters, emcees, karaoke facilitators.</p>
                    <p> <i class="bi bi-check2-all"></i><b> Media Creatives – </b> Photographers & videographers.</p>
                    <p> <i class="bi bi-check2-all"></i> <b>Personal Trainers –</b> Professional fitness experts.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item item-red position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3>Beauty & Fashion Services</h3>
                        <p>Enhancing style and confidence with top-tier professionals in:</p>
                    </a>
                    <p><i class="bi bi-check2-all"></i><b> Makeup Artistry – </b>Event & fashion makeup services.</p>
                    <p> <i class="bi bi-check2-all"></i> <b>Hair Braiding & Custom Tailoring –</b> Premium hairstyling and fashion designs.</p>
                    <p> <i class="bi bi-check2-all"></i> <b>Models –</b> Male, female & child models for fashion, photography, and commercials.</p>

                    <br>
                    <a href="#" class="stretched-link">
                        <h3> Sports & Athletics Management</h3>
                        <p>We support high school, collegiate, and professional athletes in:</p>
                    </a>
                    <p><i class="bi bi-check2-all"></i> Football (Soccer)</p>
                    <p> <i class="bi bi-check2-all"></i> Basketball</p>
                    <p> <i class="bi bi-check2-all"></i> Track & Field</p>
                </div>
            </div><!-- End Service Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/pictures/img5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3>Get in Touch</h3>
                    <p>
                        Let BGG ENTERTAINMENT help you reach new heights! Whether you're looking to hire talent or collaborate, we are ready to bring your vision to life.
                    </p>
                    <p>
                    <p><b>Email us:</b>bggentertainment@gmail.com </p>
                    <p><b> Website:</b> <a href="#"> www.bggent.com</a></p>
                    <p><b style="color: red;">Follow us on: <a href="https://www.instagram.com/bggentertainment_?igsh=d2h1eWthZXF0aWVk"> Instagram |</a> <a href="https://web.facebook.com/profile.php?id=100067873157200&_rdc=1&_rdr#">Facebook |</a> <a href="https://www.youtube.com/channel/UCx8T7a9xB14q_EThYD_Dabg">YouTube |</a><a href="https://www.tiktok.com/@bgg.entertainment?_t=8grka23Q13e&_r=1"> TikTok</a></b></p>
                    <p><b style="color: red;">BGG ENTERTAINMENT <a href="">– Empowering Talent, Spreading Creativity</a></b></p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection