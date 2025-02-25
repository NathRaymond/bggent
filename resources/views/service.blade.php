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
        <h2 style="color: black;">WHAT WE OFFER</h2>
    </div><!-- End Section Title -->

    <div class="container">
        <div class=" align-items-center features-item" style="margin-top: -40px;">
            <h3 style="font-size: 18px; text-align: center;color: black;">At BGG ENTERTAINMENT, we offer a range of services designed to empower individuals and communities:</h3>
            <p style="text-align: justify;color: black;">
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
                        <h3 style="color: black;">Content Creation Services</h3>
                        <p style="text-align: justify; color:#007FFF; font-weight: bold;">Our team of expert creatives brings your vision to life with high-quality content tailored for various industries:</p>
                    </a>
                    <p style="text-align: justify;">
                    <p style="color: black;"> <b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Animation –</b> Engaging and immersive animated storytelling.</p>
                    <p style="color: black;"><b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Social Media Campaigns – </b>IG & TikTok campaigns designed for brand growth.</p>
                    <p style="color: black;"><b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Corporate Campaigns – </b>Professional content strategies for businesses.</p>
                    <p style="color: black;"><b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Retail Product Campaigns –</b> Creative branding and marketing solutions.</p>
                    <p style="color: black;"><b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Visual Arts – </b>Stunning graphic and digital art for diverse needs.</p>
                    <p style="color: black;"><b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Music Jingles – </b>Custom jingles to enhance brand recognition.</p>
                    <p style="color: black;"><b style="color:black; font-weight: bold;"><i class="bi bi-check2-all"></i> Graphic Design & Website Development – </b>Eye-catching designs and web solutions.</p>
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
                        <h3 style="color: black;">Talent Management Services</h3>
                        <p style="color:#007FFF; font-weight: bold;">BGG ENTERTAINMENT provides top-tier talent management and placement in:</p>
                    </a>
                    <p style="color: black !important; font-weight: bold;"><i class="bi bi-check2-all"></i> Music & Art Festivals</p>
                    <p style="color: black !important; font-weight: bold;"> <i class="bi bi-check2-all"></i> Music Videos & Films</p>
                    <p style="color: black !important; font-weight: bold;"> <i class="bi bi-check2-all"></i> Concerts & Exclusive Private Events</p>
                    <p style="color: black !important; font-weight: bold;"> <i class="bi bi-check2-all"></i> Weddings & Birthdays</p>
                    <hr>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;">Entertainment Services</h3>
                        <p style="color:#007FFF; font-weight: bold;">We represent a diverse range of entertainment professionals, including:</p>
                    </a>
                    <p style="color: black;"><i class="bi bi-check2-all"></i> <b>Singers & Musicians –</b> Male & female vocalists, background singers, drummers, pianists, guitarists.</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i> <b>Dancers & Performers –</b> Male & female dancers, child dancers, actors, DJs, presenters, emcees, karaoke facilitators.</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i><b> Media Creatives – </b> Photographers & videographers.</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i> <b>Personal Trainers –</b> Professional fitness experts.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item item-red position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;">Beauty & Fashion Services</h3>
                        <p style="color:#007FFF; font-weight: bold;">Enhancing style and confidence with top-tier professionals in:</p>
                    </a>
                    <p style="color: black;"><i class="bi bi-check2-all"></i><b> Makeup Artistry – </b>Event & fashion makeup services.</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i> <b>Hair Braiding & Custom Tailoring –</b> Premium hairstyling and fashion designs.</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i> <b>Models –</b> Male, female & child models for fashion, photography, and commercials.</p>

                    <hr>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;"> Sports & Athletics Management</h3>
                        <p style="color:#007FFF; font-weight: bold;">We support high school, collegiate, and professional athletes in:</p>
                    </a>
                    <p style="color: black;"><i class="bi bi-check2-all"></i> Football (Soccer)</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i> Basketball</p>
                    <p style="color: black;"> <i class="bi bi-check2-all"></i> Track & Field</p>
                </div>
            </div><!-- End Service Item -->

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
                    <img src="assets/img/pictures/img5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
                    <h3 style="color: black;">Get in Touch</h3>
                    <p style="color: black;">
                        <b>Let BGG ENTERTAINMENT help you reach new heights! Whether you're looking to hire talent or collaborate, we are ready to bring your vision to life.</b>
                    </p>
                    <p>
                    <p style="color: black;"><b style="color: black;">Email us:</b> <b>bggentertainment@gmail.com</b> </p>
                    <p style="color: black;"><b style="color: black;"> Website:</b> <a href="#" style="color:#007FFF"> <b>www.bggent.com</b></a></p>
                    <p><b style="color: red;">Follow us on: <a href="https://www.instagram.com/bggentertainment_?igsh=d2h1eWthZXF0aWVk" style="color:#007FFF"> Instagram |</a> <a href="https://web.facebook.com/profile.php?id=100067873157200&_rdc=1&_rdr#" style="color:#007FFF">Facebook |</a> <a href="https://www.youtube.com/channel/UCx8T7a9xB14q_EThYD_Dabg" style="color:#007FFF">YouTube |</a><a href="https://www.tiktok.com/@bgg.entertainment?_t=8grka23Q13e&_r=1" style="color:#007FFF"> TikTok</a></b></p>
                    <p><b style="color: red;">BGG ENTERTAINMENT <a href="" style="color:#007FFF">– Empowering Talent, Spreading Creativity</a></b></p>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection