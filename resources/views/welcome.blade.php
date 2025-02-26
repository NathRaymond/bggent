@extends("layouts.master")
@section("contents")
@section("headlinks")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<style>
    .swiper-container {
        width: 100%;
        padding: 10px;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .fixed-size-img {
        width: 200px;
        height: 200px;
        border-radius: 8px;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .fixed-size-img {
            width: 150px;
            height: 150px;
        }
    }

    @media (max-width: 480px) {
        .fixed-size-img {
            width: 100px;
            height: 100px;
        }
    }

    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background: rgba(0, 0, 0, 0.8);
    }


    /* Sponsor Section Styling */
    .sponsor-section {
        text-align: center;
        padding: 40px 0;
        background-color: #f9f9f9;
    }

    .sponsor-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
    }

    .sponsor-logos {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .sponsor-logos img {
        width: 120px;
        /* Set fixed width */
        height: 60px;
        /* Set fixed height */
        object-fit: contain;
        /* Keeps logos properly scaled */
        /* transition: filter 0.3s ease-in-out; */
    }

    /* Responsive */
    @media (max-width: 768px) {
        .sponsor-logos {
            justify-content: center;
        }

        .sponsor-logos img {
            width: 100px;
            height: 50px;
        }
    }

    .pulsating2-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80px;
        height: 80px;
        background: rgba(255, 0, 0, 0.7);
        /* Red semi-transparent background */
        border-radius: 50%;
        color: #fff;
        /* Icon color */
        font-size: 24px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }

    .pulsating2-play-btn:hover {
        background: rgba(255, 0, 0, 1);
    }

    .pulsating2-play-btn i {
        position: relative;
    }

    .gallery-item img {
        width: 100%;
        /* Ensures images take full column width */
        height: 250px;
        /* Sets a fixed height for all images */
        object-fit: cover;
        /* Ensures images maintain aspect ratio without distortion */
        border-radius: 10px;
        /* Optional: Adds rounded corners */
    }

    .gallery-item p {
        font-size: 14px;
        /* Makes text readable but compact */
        margin-top: 10px;
    }

    :root {
        --swiper-theme-color: transparent !important;
    }

    .bulletin p {
        margin: 0 0 10px;
        font-size: 16px;
        line-height: 1.5;
    }
</style>

@endsection
<!-- Hero Section -->
<section id="hero" class="hero dark-background">
    <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="container position-relative">
            <div class="carousel-item active">
                <div class="container-fluid carousel-container" style="margin-top: 80px;">
                    <p class="text-center text-uppercase" style="font-size: 28px;"><b>Welcome to BGG&nbsp;ENTERTAINMENT</b></p>
                    <p class="font-weight-bold text-white text-center" style="font-size: 15px;">
                       <b> Welcome to By God's Grace Entertainment (BGG ENTERTAINMENT)—where faith, creativity,
                        and empowerment come together to uplift talented individuals of African descent.<br>
                        Our mission is to spread the message of Jesus Christ, bridge cultural gaps, and
                        create opportunities for young creatives through content creation, philanthropy,
                        sports, song, and dance.</b>
                    </p>
                    <div class="text-center">
                        <a href="#about" class="btn btn-primary">Read More</a>
                    </div>
                </div>

            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <div class="carousel-container" style="margin-top: 80px;">
                    <h2 style="color:white; text-transform: uppercase;">Empowering Creatives, Changing Lives</h2>
                    <p style="font-weight: bold; color: white;">At BGG ENTERTAINMENT, we believe in the power of creativity to inspire change. Our platform showcases talented individuals in content creation, music, dance, and sports, providing them with the exposure and opportunities they deserve.

                        💡 Join us as we uplift young creatives and entrepreneurs worldwide!</p>
                    <a href="#about" class="btn-get-started">Read More</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <div class="carousel-container" style="margin-top: 80px;">
                    <h2 style="color:white; text-transform: uppercase;">Bridging Cultures, Building Communities</h2>
                    <p style="color:white; font-weight: bold;">🌍 Our mission extends beyond entertainment—we bridge social and cultural gaps by providing a platform for global black creatives.

                        <br>🎶 Through music, storytelling, and entrepreneurship, we create a space where talent meets opportunity, fostering unity and growth in our community.

                        🚀 Be part of the movement! Follow us & stay inspired.
                    </p>
                    <a href="#about" class="btn-get-started">Read More</a>

                </div>
            </div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
            <ol class="carousel-indicators"></ol>
        </div>
    </div>
</section>
<br><br>
<div class="container" data-aos="fade-up" data-aos-delay="100" style="padding: 10px;">
    <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 20px; color: black;">INTERVIEW WITH ARISE TV </h2>
    </div>
    <div class="swiper-slide position-relative" style="margin-top: -50px;">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset("assets/img/pandemic-img.png") }}" class="img-fluid" alt="">
            <a href="{{ asset('assets/img/gallery/POST-PANDEMIC.mp4') }}" class="glightbox pulsating2-play-btn pulsating-play-btn">
                <i class="fas fa-play"></i>
            </a>
        </div>
    </div>
</div>
<div class="sponsor-section">
    <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 20px; color: black;">Our Supporters</h2>
    </div>
    <div class="sponsor-logos" style="margin-top: -50px;">
        <img src="{{ asset('assets/img/gallery/sponsor1.jpg') }}" alt="Sponsor 1">
        <img src="{{ asset('assets/img/gallery/sponsor2.jpg') }}" alt="Sponsor 2">
        <img src="{{ asset('assets/img/gallery/sponsor3.jpg') }}" alt="Sponsor 3">
        <img src="{{ asset('assets/img/gallery/sponsor4.jpg') }}" alt="Sponsor 4">
        <img src="{{ asset('assets/img/gallery/sponsor5.jpg') }}" alt="Sponsor 5">
        <img src="{{ asset('assets/img/gallery/YHHM-logo.png') }}" alt="Sponsor 6">
        <img src="{{ asset('assets/img/gallery/sponsor7.jpg') }}" alt="Sponsor 7">
    </div>
</div>

<section id="featured-services" class="featured-services section">
    <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 20px; color: black;">Features</h2>
    </div>
    <div class="container" style="margin-top: -50px;">
        <div class="row gy-4">

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;">Empowering Talent</h3>
                    </a>
                    <p style="color: black;">
                        We provide a platform for creatives in music, dance, sports, and content creation to showcase their gifts and gain global recognition.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;">Scholarship Opportunities</h3>
                    </a>
                    <p style="color: black;">
                        The Labyrinth Scholarship supports talented individuals with tuition assistance—helping them achieve their educational dreams.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item item-teal position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;">Bridging Cultures</h3>
                    </a>
                    <p style="color: black;">
                        We connect and uplift the global black community through storytelling, entertainment, and entrepreneurship.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item item-red position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="#" class="stretched-link">
                        <h3 style="color: black;">Faith & Purpose</h3>
                    </a>
                    <p style="color: black;">
                        Our mission is rooted in sharing the message of Jesus Christ while fostering creativity and social impact.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

    </div>

</section>
<section id="about" class="about section light-background">
    <div class="container section-title" data-aos="fade-up">
        <h2 style="font-size: 20px; color: black;">Talent Empowerment</h2>
    </div>
    <div class="container" style="margin-top: -60px;">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset(path: "assets/img/pictures/img8.jpg")}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <h3 style="text-align: center; font-size: 20px; color: black;">Empowering Talent, Uplifting Communities, Bridging Cultures</h3>
                <p style="text-align: justify; color: black;">
                    At BGG ENTERTAINMENT, we believe in using media, arts, and entertainment to
                    inspire change. Through innovative storytelling, dynamic performances,
                    and meaningful philanthropy, we shine a light on talents that deserve global recognition.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> <span style="color: black;">Showcase creatives through entertainment events.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span style="color: black;">Provide scholarships to talented individuals</span></li>
                    <li><i class="bi bi-check2-all"></i> <span style="color: black;">Offer mentorship & growth opportunities</span></li>
                    <li><i class="bi bi-check2-all"></i> <span style="color: black;">Support entrepreneurs in the global black community</span></li>
                </ul>
            </div>
        </div>

    </div>

</section>

<section id="about" class="about section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                <h3 style="text-align: center; font-size: 20px; color: black;">OUR VISION</h3>
                <p style="text-align: justify; color: black;">
                    Our vision is to become a globally recognized platform that unites and empowers diverse communities through faith, creativity, and social impact. We aspire to:
                </p>
                <p>
                <div class="bulletin">
                    <p style="color: black;">&#8226; Foster a deeper understanding of God’s Word worldwide.</p>
                    <p style="color: black;">&#8226; Highlight and promote the talents of underrepresented communities.</p>
                    <p style="color: black;">&#8226; Create opportunities for economic and social advancement.</p>
                    <p style="color: black;">&#8226; Inspire the next generation of leaders and changemakers.</p>
                </div>
                </p>
                <p style="font-size: 14.5px; color: black;">
                    To be a platform where creativity meets purpose, giving voices to untold stories and providing life-changing opportunities for young talents worldwide.
                    <br> We envision a world where creativity, faith, and unity drive meaningful change.
                </p>
            </div>
            <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/6nlf1KaaqxI"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>
<section id="featured-services" class="featured-services section">
    <div class="container section-title" data-aos="fade-up" style="margin-top: -30px;">
        <h2 style="font-size: 20px; text-align: center; color: black;">Scholarship Information</h2>
    </div>
    <div class="container">
        <div class="row gy-4" style="margin-top: -40px;">
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative" style="background-color: black; color:white; padding: 20px; border-radius: 10px;">
                    <a href="#" class="stretched-link">
                        <h3 style="color: white; font-size: 17px; text-align: center;"><b>Unlock Your Future with BGG ENTERTAINMENT</b></h3>
                    </a>
                    <p style="text-align: justify;">Scholarships will be available starting January 2025! To be eligible, you must be a registered talent and follow us on Instagram, Facebook, YouTube, and TikTok.</p>
                    <a href="#" class="stretched-link"><br>
                        <h3 style="color: white; font-size: 17px; text-align: center;"><b>Eligibility Criteria</b></h3>
                    </a>
                    <p style="text-align: justify;">
                        &#8226; Minimum requirement: High school transcript (University transcripts are also accepted).
                        <br>&#8226; Open to individuals up to 18 - 35 years old.
                        <br>&#8226; If you need tuition or support to return to university, you are encouraged to apply.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item item-cyan position-relative" style="background-color: black; color:white; padding: 20px; border-radius: 10px;">
                    <div style="position: relative; display: block; text-align: center;">
                        <a href="{{ asset("assets/img/THE-LABYRINTH-SCHOLARSHIP.pdf") }}" target="_blank" style="text-decoration: none;">
                            <div style="padding: 10px; background-color: #007bff; color: white; display: inline-block; border-radius: 5px; cursor: pointer;">
                                Open THE-LABYRINTH-SCHOLARSHIP.pdf
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item item-orange position-relative" style="background-color: black; color:white; text-align: justify; padding: 20px; border-radius: 10px;">
                    <a href="#" class="stretched-link">
                        <h3 style="color: white; text-align: center;"><b>Application Instructions</b></h3>
                    </a>
                    <p>1️⃣ Visit www.bggent.com for detailed scholarship information.</p>
                    <p>2️⃣ Submit your application via the ‘Contact’ page or email it to bggentertainment@gmail.com </p>
                    <p>3️⃣ Ensure you are following ALL our social media platforms:</p>
                    <p style="font-weight: bold; text-align: center;"> Facebook, Instagram, TikTok, YouTube</p>
                    <p>4️⃣ Attach a screenshot or evidence proving you follow us when submitting your application.</p>
                    <p style="text-align: center;"><em><b>By God's grace, you could be our next Labyrinth Scholarship Recipient for 2025!</b></em></p>
                </div>
            </div>

        </div>
    </div>
</section>


<section id="gallery" class="services section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="container section-title" data-aos="fade-up" style="margin-top: -20px;">
                <h2 style="font-size: 20px;">Gallery</h2>
            </div>

            <section style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; margin-top: -90px;">
                <img src="{{ asset('assets/img/gallery/gallery8_new.jpg') }}" alt="Image 2" style="width: 30%; height: auto; object-fit: cover;">
                <img src="{{ asset('assets/img/gallery/gallery11.jpg') }}" alt="Image 1" style="width: 30%; height: auto; object-fit: cover;">
                <img src="{{ asset('assets/img/gallery/gallery1.jpg') }}" alt="Image 3" style="width: 30%; height: auto; object-fit: cover;">
                <img src="{{ asset('assets/img/gallery/gallery12.jpg') }}" alt="Image 4" style="width: 30%; height: auto; object-fit: cover;">
                <img src="{{ asset('assets/img/gallery/img15.avif') }}" alt="Image 4" style="width: 30%; height: auto; object-fit: cover;">
                <img src="{{ asset('assets/img/gallery/gallery2.jpg') }}" alt="Image 5" style="width: 30%; height: auto; object-fit: cover;">
            </section>
            <div class="swiper-container">
                <div class="swiper-wrapper" style="margin-top: -30px;">
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/img/gallery/img13.avif') }}" class="glightbox">
                            <img src="{{ asset('assets/img/gallery/img13.avif') }}" class="fixed-size-img">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/img/gallery/img15.avif') }}" class="glightbox">
                            <img src="{{ asset('assets/img/gallery/img15.avif') }}" class="fixed-size-img">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ asset('assets/img/gallery/img17.avif') }}" class="glightbox">
                            <img src="{{ asset('assets/img/gallery/img17.avif') }}" class="fixed-size-img">
                        </a>
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/gallery3.jpg') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/gallery6.jpg') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/img1.jpg') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/img2.jpg') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/img14.avif') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/img3.jpg') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/img4.jpg') }}" class="glightbox fixed-size-img"></div>
                    <div class="swiper-slide"><img src="{{ asset('assets/img/gallery/jeangirl.jpeg') }}" class="glightbox fixed-size-img"></div>
                </div>
                <!-- Swiper Navigation Buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

@endsection
@section("scripts")
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4, // 4 images in a row
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        grabCursor: true, // Enables hand cursor on hover
        mousewheel: true, // Enables scrolling with mouse
        breakpoints: {
            1024: {
                slidesPerView: 4
            }, // Desktop
            768: {
                slidesPerView: 2
            }, // Tablet
            480: {
                slidesPerView: 1
            } // Mobile
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const lightbox = GLightbox({
            selector: '.glightbox', // Select all elements with class 'glightbox'
            touchNavigation: true,
            loop: true,
            autoplayVideos: true
        });
    });
</script>

@endsection