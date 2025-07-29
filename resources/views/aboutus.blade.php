@extends('layouts.layout')
@section('Page_title', 'About Us - Astro Saloni')
@section('container')

    <!-- About Hero Section -->
    <section class="about-hero"
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/image/aboutus.jpg') }}'); background-size: cover; background-position: center; padding: 150px 0 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="text-white mb-4 animate__animated animate__fadeInDown">About Astro Saloni</h1>
                    <p class="text-white mb-0 animate__animated animate__fadeInUp animate__delay-1s">Renowned Vashikaran
                        Specialist with 15+ Years of Experience</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-nav py-3" style="background-color: #f8f9fa;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main About Content -->
    <section class="about-content py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-image animate__animated animate__fadeInLeft"
                        style="border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); position: relative;">
                        <img src="{{ asset('assets/image/astrosaloni.jpg') }}" alt="Astro Saloni" class="img-fluid w-100"
                            style="transition: transform 0.5s ease;">
                        <div class="experience-badge"
                            style="position: absolute; bottom: 20px; right: 20px; background-color: #d4af37; color: white; width: 100px; height: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; flex-direction: column; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                            <span style="font-size: 14px; font-weight: 600;">Since</span>
                            <span style="font-size: 24px; font-weight: 700;">2008</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title mb-4 animate__animated animate__fadeInRight">
                        <h2 class="mb-3">Astro Saloni - Best Vashikaran Specialist in India</h2>
                        <div class="title-divider"
                            style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px 0;"></div>
                    </div>
                    <p class="mb-4 animate__animated animate__fadeInRight animate__delay-1s">Astro Saloni has earned wide
                        repute as one of the top and Best Vashikaran specialist in India by providing highly sagely insights
                        and solutions to the puzzles of personal as well as professional life.</p>
                    <p class="mb-4 animate__animated animate__fadeInRight animate__delay-1s">Years of experience with deep
                        knowledge of astrology have given her repute for accurate and effective remedies through Vashikaran
                        techniques. Vashikaran is a very powerful branch of astrology, influencing energies around an
                        individual, hence helping individuals resolve issues about love, relationships, career, business,
                        health, and many more.</p>
                    <div class="about-features mb-4">
                        <div class="feature-item d-flex mb-3 animate__animated animate__fadeInRight animate__delay-2s">
                            <div class="feature-icon me-3" style="color: #d4af37; font-size: 24px;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">
                                <h5 class="mb-0">15+ Years of Experience</h5>
                            </div>
                        </div>
                        <div class="feature-item d-flex mb-3 animate__animated animate__fadeInRight animate__delay-2s">
                            <div class="feature-icon me-3" style="color: #d4af37; font-size: 24px;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">
                                <h5 class="mb-0">100% Guaranteed Solutions</h5>
                            </div>
                        </div>
                        <div class="feature-item d-flex animate__animated animate__fadeInRight animate__delay-2s">
                            <div class="feature-icon me-3" style="color: #d4af37; font-size: 24px;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="feature-text">
                                <h5 class="mb-0">Private & Confidential Consultations</h5>
                            </div>
                        </div>
                    </div>
                    <a href="#contact"
                        class="btn btn-primary mt-3 animate__animated animate__fadeInUp animate__delay-3s">Consult Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Astrological Expertise Section -->
    <section class="expertise-section py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="sormandal-container animate__animated animate__fadeInLeft"
                        style="position: relative; text-align: center;">
                        <img src="{{ asset('assets/image/sormandal1.jpg') }}" alt="Sormandal Astrological Chart"
                            class="img-fluid"
                            style="max-width: 60%; height: auto; animation: rotateSlowly 60s linear infinite;">
                        <div class="zodiac-icons" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;">
                            <!-- Zodiac signs placed around the sormandal -->
                            <i class="fas fa-ram"
                                style="position: absolute; top: 10%; left: 50%; transform: translateX(-50%); color: #d4af37; font-size: 24px;"></i>
                            <i class="fas fa-bull"
                                style="position: absolute; top: 50%; right: 10%; transform: translateY(-50%); color: #d4af37; font-size: 24px;"></i>
                            <i class="fas fa-fish"
                                style="position: absolute; bottom: 10%; left: 50%; transform: translateX(-50%); color: #d4af37; font-size: 24px;"></i>
                            <i class="fas fa-scorpion"
                                style="position: absolute; top: 50%; left: 10%; transform: translateY(-50%); color: #d4af37; font-size: 24px;"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1 mb-5 mb-lg-0">
                    <div class="section-title mb-4 animate__animated animate__fadeInRight">
                        <h2 class="mb-3">Astrological Expertise</h2>
                        <div class="title-divider"
                            style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px 0;"></div>
                    </div>
                    <p class="mb-4 animate__animated animate__fadeInRight animate__delay-1s">Astro Saloni possesses deep
                        knowledge of ancient Vedic astrology and its various branches including:</p>
                    <div class="expertise-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div
                                    class="expertise-item d-flex mb-3 animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="expertise-icon me-3" style="color: #d4af37; font-size: 20px;">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="expertise-text">
                                        <h5 class="mb-0">Vashikaran Mantras</h5>
                                    </div>
                                </div>
                                <div
                                    class="expertise-item d-flex mb-3 animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="expertise-icon me-3" style="color: #d4af37; font-size: 20px;">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="expertise-text">
                                        <h5 class="mb-0">Planetary Remedies</h5>
                                    </div>
                                </div>
                                <div
                                    class="expertise-item d-flex animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="expertise-icon me-3" style="color: #d4af37; font-size: 20px;">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="expertise-text">
                                        <h5 class="mb-0">Horoscope Analysis</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div
                                    class="expertise-item d-flex mb-3 animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="expertise-icon me-3" style="color: #d4af37; font-size: 20px;">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="expertise-text">
                                        <h5 class="mb-0">Kundali Matching</h5>
                                    </div>
                                </div>
                                <div
                                    class="expertise-item d-flex mb-3 animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="expertise-icon me-3" style="color: #d4af37; font-size: 20px;">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="expertise-text">
                                        <h5 class="mb-0">Gemstone Suggestions</h5>
                                    </div>
                                </div>
                                <div
                                    class="expertise-item d-flex animate__animated animate__fadeInRight animate__delay-2s">
                                    <div class="expertise-icon me-3" style="color: #d4af37; font-size: 20px;">
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="expertise-text">
                                        <h5 class="mb-0">Yantra Therapy</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mt-4 animate__animated animate__fadeInRight animate__delay-3s">Her expertise in Sormandal
                        (astrological chart) analysis helps in precise prediction and effective remedy suggestions tailored
                        to individual needs.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="mb-3 animate__animated animate__fadeInDown">Our Mission</h2>
                    <div class="title-divider mx-auto animate__animated animate__fadeInDown animate__delay-1s"
                        style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px auto;"></div>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">To provide authentic astrological
                        guidance and effective Vashikaran solutions that help people overcome life's challenges and achieve
                        happiness, success, and harmony in all aspects of their lives.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="mission-card text-center p-4 h-100 animate__animated animate__fadeInUp"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="mission-icon mb-4"
                            style="width: 80px; height: 80px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 30px; color: #d4af37;">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h4 class="mb-3">Authentic Solutions</h4>
                        <p class="mb-0">Providing genuine and ethical Vashikaran remedies that actually work without any
                            side effects.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="mission-card text-center p-4 h-100 animate__animated animate__fadeInUp animate__delay-1s"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="mission-icon mb-4"
                            style="width: 80px; height: 80px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 30px; color: #d4af37;">
                            <i class="fas fa-user-secret"></i>
                        </div>
                        <h4 class="mb-3">Confidentiality</h4>
                        <p class="mb-0">Maintaining complete privacy of our clients and their personal matters with
                            utmost sincerity.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mission-card text-center p-4 h-100 animate__animated animate__fadeInUp animate__delay-2s"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="mission-icon mb-4"
                            style="width: 80px; height: 80px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 30px; color: #d4af37;">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h4 class="mb-3">Client Care</h4>
                        <p class="mb-0">Dedicated support and personalized attention to each client's unique situation
                            and needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="success-stories py-5"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('assets/image/success-bg.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="text-white mb-3 animate__animated animate__fadeInDown">Success Stories</h2>
                    <div class="title-divider mx-auto animate__animated animate__fadeInDown animate__delay-1s"
                        style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px auto;"></div>
                    <p class="text-white animate__animated animate__fadeInUp animate__delay-1s">Thousands of satisfied
                        clients have transformed their lives with Astro Saloni's guidance</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="story-card p-4 h-100 animate__animated animate__fadeInLeft"
                        style="background-color: rgba(255, 255, 255, 0.9); border-radius: 10px; transition: all 0.3s ease;">
                        <div class="story-image mb-3"
                            style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client"
                                class="img-fluid w-100 h-100">
                        </div>
                        <h4 class="text-center mb-3">Love Marriage Success</h4>
                        <p class="text-center mb-0">"After facing family opposition for 3 years, Astro Saloni's remedies
                            helped convince my parents and we got married happily."</p>
                        <div class="rating mt-3 text-center" style="color: #d4af37;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="story-card p-4 h-100 animate__animated animate__fadeInUp"
                        style="background-color: rgba(255, 255, 255, 0.9); border-radius: 10px; transition: all 0.3s ease;">
                        <div class="story-image mb-3"
                            style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Client"
                                class="img-fluid w-100 h-100">
                        </div>
                        <h4 class="text-center mb-3">Business Turnaround</h4>
                        <p class="text-center mb-0">"My failing business recovered within 3 months after following Astro
                            Saloni's remedies. Revenue increased by 200%."</p>
                        <div class="rating mt-3 text-center" style="color: #d4af37;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="story-card p-4 h-100 animate__animated animate__fadeInRight"
                        style="background-color: rgba(255, 255, 255, 0.9); border-radius: 10px; transition: all 0.3s ease;">
                        <div class="story-image mb-3"
                            style="width: 80px; height: 80px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client"
                                class="img-fluid w-100 h-100">
                        </div>
                        <h4 class="text-center mb-3">Marriage Reconciliation</h4>
                        <p class="text-center mb-0">"My husband left me after 5 years of marriage. Astro Saloni's
                            vashikaran remedies brought him back in just 21 days."</p>
                        <div class="rating mt-3 text-center" style="color: #d4af37;">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="mb-3 animate__animated animate__fadeInDown">Why Choose Astro Saloni?</h2>
                    <div class="title-divider mx-auto animate__animated animate__fadeInDown animate__delay-1s"
                        style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px auto;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion animate__animated animate__fadeInLeft" id="whyChooseAccordion">
                        <div class="accordion-item mb-3"
                            style="border-radius: 10px; overflow: hidden; border: 1px solid #eee;">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                    style="background-color: rgba(212, 175, 55, 0.1); font-weight: 600;">
                                    Extensive Experience
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#whyChooseAccordion">
                                <div class="accordion-body">
                                    With over 15 years of experience in Vashikaran and astrology, Astro Saloni has helped
                                    thousands of clients overcome their problems and achieve their desires through authentic
                                    remedies.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3"
                            style="border-radius: 10px; overflow: hidden; border: 1px solid #eee;">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                                    style="background-color: rgba(212, 175, 55, 0.1); font-weight: 600;">
                                    Ethical Practices
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#whyChooseAccordion">
                                <div class="accordion-body">
                                    We believe in using Vashikaran only for positive purposes that benefit our clients
                                    without harming anyone. All our remedies are ethical and approved by ancient Vedic
                                    scriptures.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item"
                            style="border-radius: 10px; overflow: hidden; border: 1px solid #eee;">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                                    style="background-color: rgba(212, 175, 55, 0.1); font-weight: 600;">
                                    Proven Success Rate
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#whyChooseAccordion">
                                <div class="accordion-body">
                                    Our satisfied clients across India and abroad are testimony to our high success rate in
                                    solving love problems, marriage issues, business obstacles and other life challenges.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-card p-4 animate__animated animate__fadeInRight"
                        style="background-color: #f9f9f9; border-radius: 10px; height: 100%; transition: all 0.3s ease;">
                        <div class="testimonial-content mb-4">
                            <div class="quote-icon mb-3"
                                style="font-size: 50px; color: rgba(212, 175, 55, 0.2); line-height: 1;">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <p class="mb-4" style="font-style: italic; font-size: 18px;">"Astro Saloni's guidance
                                changed my life completely. I was facing severe problems in my married life, but after
                                following her remedies, my husband came back to me and we are living happily now. Her
                                predictions were incredibly accurate."</p>
                            <div class="testimonial-author d-flex align-items-center">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Client"
                                    style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                                <div>
                                    <h5 class="mb-1">Priya Sharma</h5>
                                    <p class="mb-0 text-muted">New Delhi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section py-5"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('assets/image/cta-bg.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="text-white mb-4 animate__animated animate__fadeInDown">Ready to Transform Your Life?</h2>
                    <p class="text-white mb-5 animate__animated animate__fadeInUp">Contact Astro Saloni today for
                        personalized Vashikaran solutions to your problems. Get expert guidance and effective remedies to
                        bring positive changes in your life.</p>
                    <div
                        class="d-flex flex-column flex-md-row justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="tel:+919988044019" class="btn btn-primary px-4 py-3">
                            <i class="fas fa-phone-alt me-2"></i> Call Now: +91-9988044019
                        </a>
                        <a href="#contact" class="btn btn-outline-light px-4 py-3">
                            <i class="fas fa-envelope me-2"></i> Email Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        /* Custom CSS for About Page */
        .about-hero {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .about-hero h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .about-image img:hover {
            transform: scale(1.03);
        }

        .experience-badge {
            animation: pulse 2s infinite;
        }

        .mission-card {
            transition: all 0.3s ease;
        }

        .mission-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .accordion-button:not(.collapsed) {
            color: #000;
            background-color: rgba(212, 175, 55, 0.2) !important;
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(212, 175, 55, 0.2);
        }

        .testimonial-card {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .story-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #d4af37;
            border-color: #d4af37;
        }

        .btn-primary:hover {
            background-color: #c2a227;
            border-color: #c2a227;
        }

        /* Sormandal Animation */
        @keyframes rotateSlowly {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Experience Badge Animation */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Zodiac Icons Animation */
        .zodiac-icons i {
            animation: float 6s ease-in-out infinite;
        }

        .zodiac-icons i:nth-child(2) {
            animation-delay: 1s;
        }

        .zodiac-icons i:nth-child(3) {
            animation-delay: 2s;
        }

        .zodiac-icons i:nth-child(4) {
            animation-delay: 3s;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        @media (max-width: 767px) {
            .about-hero h1 {
                font-size: 36px;
            }

            .about-hero p {
                font-size: 18px;
            }

            .sormandal-container {
                margin-bottom: 30px;
            }
        }
    </style>
    <!-- Floating Icons with Animation -->
    <div class="floating-icons">
        <a href="https://wa.me/919876543210" target="_blank" class="float-icon whatsapp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" />
        </a>
        <a href="tel:+919876543210" class="float-icon call">
            <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Phone_font_awesome.svg" alt="Call" />
        </a>
    </div>

    <style>
        .floating-icons {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 999;
        }

        .float-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            animation: float 3s ease-in-out infinite;
        }

        .float-icon img {
            width: 28px;
            height: 28px;
        }

        .float-icon:hover {
            transform: scale(1.1);
            animation: none;
            /* Stop animation on hover */
        }

        .whatsapp {
            animation-delay: 0.2s;
            background: #25D366;
        }

        .call {
            animation-delay: 0.4s;
            background: #4285F4;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
@endsection
