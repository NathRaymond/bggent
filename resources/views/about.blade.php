@extends('layouts.master')

@section('contents')
@section("headlinks")
<style>
    .page-title {
        background: url('assets/img/about-img.jpg') no-repeat center center/cover;
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
<div class="page-title dark-background">
    <div class="container position-relative">
        <h1>About Us</h1>
    </div>
</div>

<section id="about" class="about section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset("assets/img/gallery/img14.jpg")}}" class="img-fluid" alt="">
                <!-- <a href="" class="pulsating-play-btn"></a> -->
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <h3 style="text-align: center; font-size: 15px; color: black;">V&nbsp;E&nbsp;R&nbsp;I&nbsp;T&nbsp;A&nbsp;S&nbsp;&nbsp; .&nbsp;&nbsp; B&nbsp;O&nbsp;N&nbsp;A&nbsp;V&nbsp;E&nbsp;N&nbsp;T&nbsp;U&nbsp;R&nbsp;E &nbsp;&nbsp;.&nbsp; &nbsp;S&nbsp;A&nbsp;N&nbsp;D&nbsp;O&nbsp;V&nbsp;A&nbsp;L</h3>
                <p style="text-align: justify; color: black;">
                    By God’s Grace Entertainment (BGG ENTERTAINMENT) is more than just an
                    entertainment platform – it’s a movement founded by a Nigerian-American visionary, private banker, entertainer and serial entrepreneur.
                    BGG ENTERTAINMENT is driven by purpose rooted in faith, creativity,
                    and social impact.</p>
                <p style="text-align: justify; color: black;">
                    Our goal is to empower and uplift individuals of African descent
                    and other marginalized communities by spreading the message of Jesus Christ and
                    showcasing diverse talents and stories. Through entertainment and community
                    engagement, we aim to bridge cultural gaps and foster unity.
                </p>
                <ul>
                    <b style="color: black;"> We use various creative and impactful tools to achieve our mission, including:</bs>
                        <li><i class="bi bi-check2-all"></i> <span> <b style="color: black;">Content Creation:</b> Telling authentic stories and highlighting unique perspectives often overlooked within social demographics.
                            </span></li>
                        <li><i class="bi bi-check2-all"></i> <span> <b style="color: black;">Philanthropy:</b> Supporting communities through charitable initiatives and educational opportunities.
                            </span></li>
                        <li><i class="bi bi-check2-all"></i> <span> <b style="color: black;">Music & Dance:</b> Celebrating cultural expression and creativity through performance arts.
                            </span></li>
                        <li><i class="bi bi-check2-all"></i> <span> <b style="color: black;">Sports:</b> Encouraging unity, discipline, and talent development through athletics.
                            </span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="features" class="features section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 20px; margin-top:-20px;color: black;">OUR MISSION</h2>
    </div>
    <div class="container">
        <div class="row gy-4 align-items-center features-item">
            <div class="col-md-7" data-aos="fade-up">
                <h3 style="font-size: 17px; margin-top:-50px; text-align: justify; color:black; line-height: 30px;">To be a platform where creativity meets purpose, giving voices to untold stories and providing life-changing opportunities for young talents worldwide.</h3>
                <p style="text-align: justify; color: black; line-height: 30px;">Our mission extends beyond entertainment — it’s about making a lasting impact worldwide.
                    Through our dedication to faith and community, BGG ENTERTAINMENT strives to bring
                    understanding to the mind of God through His Word and provide a platform for talented
                    individuals from African, African-American, Latin-American, Asian-American, Caribbean,
                    South American, and Asian backgrounds.</p>
                <ul>
                    <li> <span style="text-align: justify; color:black">Be part of our mission! Register, follow us on social media, and take the next step in your creative or entrepreneurial journey.</span></li>
                </ul>
            </div>
            <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
                <img src="{{ asset("assets/img/pictures/img13.avif") }}" class="img-fluid" alt="">
            </div>
        </div>


    </div>
</section>

@endsection