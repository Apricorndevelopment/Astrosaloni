@extends('layouts.layout')
@section('Page_title', 'Our Services - Astro Saloni')
@section('container')

    <style>
        .service-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 100%;
            color: white;
        }

        .card-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            z-index: 1;
            filter: brightness(0.6);
        }

        .service-content {
            position: relative;
            z-index: 2;
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .service-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .service-features ul {
            list-style-type: none;
            padding-left: 0;
        }

        .service-features li {
            margin-bottom: 8px;
            position: relative;
            padding-left: 20px;
        }

        .service-features li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #fff;
        }

        .btn-primary {
            margin-top: auto;
            align-self: flex-start;
        }
    </style>
    <style>
        /* Pagination Styles */
        .pagination {
            margin-top: 30px;
        }

        .pagination .page-item .page-link {
            color: #333;
            border: 1px solid #ddd;
            margin: 0 5px;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .pagination .page-item:hover .page-link {
            background-color: #f0f0f0;
            border-color: #ddd;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: not-allowed;
        }
    </style>

    <!-- Service Hero Section -->
    <section class="service-hero"
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/image/service.jpg') }}'); background-size: cover; background-position: center; padding: 150px 0 100px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="text-white mb-4 animate__animated animate__fadeInDown">Our Services</h1>
                    <p class="text-white mb-0 animate__animated animate__fadeInUp animate__delay-1s">Professional Vashikaran
                        & Astrological Solutions for All Life Problems</p>
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
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Services Section -->
    <section class="main-services py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="mb-3 animate__animated animate__fadeInDown">Vashikaran & Astrological Services</h2>
                    <div class="title-divider mx-auto animate__animated animate__fadeInDown animate__delay-1s"
                        style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px auto;"></div>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">Astro Saloni provides specialized
                        services combining ancient Vedic astrology with powerful Vashikaran techniques to solve your life
                        problems effectively.</p>
                </div>
            </div>


            <div class="row">
                <!-- Love Problem Solution -->

                @foreach ($service as $list)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card animate__animated animate__fadeInUp">
                            <div class="card-background"
                                style="background-image: url('{{ asset($list->service_image) }}');"></div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="{{ $list->service_icon }}"></i>
                                </div>
                                <h3>{{ $list->service_name }}</h3>
                                <p>{{ $list->service_shortdesc }}</p>

                                <a href="{{ url('/service/' . $list->service_slug) }}" class="btn btn-primary">Know More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            {{ $service->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="mb-3 animate__animated animate__fadeInDown">How Our Services Work</h2>
                    <div class="title-divider mx-auto animate__animated animate__fadeInDown animate__delay-1s"
                        style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px auto;"></div>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">Our process is simple, effective and
                        tailored to your specific needs for maximum results</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="step-card text-center p-4 h-100 animate__animated animate__fadeInLeft"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="step-number mb-3"
                            style="width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 24px; font-weight: 700; color: #d4af37;">
                            1</div>
                        <h4 class="mb-3">Consultation</h4>
                        <p class="mb-0">Share your problem details with Astro Saloni through phone or email consultation.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="step-card text-center p-4 h-100 animate__animated animate__fadeInUp"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="step-number mb-3"
                            style="width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 24px; font-weight: 700; color: #d4af37;">
                            2</div>
                        <h4 class="mb-3">Analysis</h4>
                        <p class="mb-0">Detailed analysis of your horoscope and situation to identify root causes.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step-card text-center p-4 h-100 animate__animated animate__fadeInRight"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="step-number mb-3"
                            style="width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; font-size: 24px; font-weight: 700; color: #d4af37;">
                            3</div>
                        <h4 class="mb-3">Remedies</h4>
                        <p class="mb-0">Personalized remedies including mantras, yantras and rituals for solution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="service-testimonials py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5">
                    <h2 class="mb-3 animate__animated animate__fadeInDown">Success Stories</h2>
                    <div class="title-divider mx-auto animate__animated animate__fadeInDown animate__delay-1s"
                        style="width: 80px; height: 3px; background-color: #d4af37; margin: 15px auto;"></div>
                    <p class="animate__animated animate__fadeInUp animate__delay-1s">Hear from our satisfied clients who
                        transformed their lives with our services</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card p-4 h-100 animate__animated animate__fadeInLeft"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="testimonial-header mb-3 d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client"
                                style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div>
                                <h5 class="mb-1">Riya Sharma</h5>
                                <p class="mb-0 text-muted">Love Problem Solution</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <div class="rating mb-2" style="color: #d4af37;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="mb-0">"After 2 years of separation, my boyfriend came back to me within 21 days of
                                starting Astro Saloni's remedies. We are now happily married."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card p-4 h-100 animate__animated animate__fadeInUp"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="testimonial-header mb-3 d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Client"
                                style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div>
                                <h5 class="mb-1">Rahul Verma</h5>
                                <p class="mb-0 text-muted">Business Problem Solution</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <div class="rating mb-2" style="color: #d4af37;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="mb-0">"My failing business turned around completely within 3 months of following
                                Astro Saloni's remedies. Revenue increased by 300%."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card p-4 h-100 animate__animated animate__fadeInRight"
                        style="background-color: white; border-radius: 10px; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05); transition: all 0.3s ease;">
                        <div class="testimonial-header mb-3 d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client"
                                style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover; margin-right: 15px;">
                            <div>
                                <h5 class="mb-1">Priya Patel</h5>
                                <p class="mb-0 text-muted">Marriage Problem Solution</p>
                            </div>
                        </div>
                        <div class="testimonial-body">
                            <div class="rating mb-2" style="color: #d4af37;">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="mb-0">"My husband left me after 7 years of marriage. Astro Saloni's vashikaran
                                remedies brought him back in just 40 days. We are now happier than ever."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="service-cta py-5"
        style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ asset('assets/image/service-cta-bg.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="text-white mb-4 animate__animated animate__fadeInDown">Ready to Solve Your Problems?</h2>
                    <p class="text-white mb-5 animate__animated animate__fadeInUp">Contact Astro Saloni today for
                        personalized solutions to your life problems. Get expert guidance and effective remedies.</p>
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
        /* Service Page Custom CSS */
        .service-hero {
            position: relative;
            background-size: cover;
            background-position: center;
        }

        .service-hero h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .service-card {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            padding: 30px;
            height: 100%;
            min-height: 450px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            color: white;
            transition: all 0.5s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(212, 175, 55, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
            color: white;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1);
            background-color: #d4af37;
        }

        .service-card h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .service-card h3:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background-color: #d4af37;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
        }

        .service-card p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        .service-features {
            margin-bottom: 25px;
            text-align: left;
        }

        .service-features ul {
            list-style: none;
            padding-left: 0;
        }

        .service-features li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
        }

        .service-features li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 2px;
            color: #d4af37;
        }

        .btn-primary {
            background-color: #d4af37;
            border-color: #d4af37;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #c2a227;
            border-color: #c2a227;
        }

        .step-card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
        }

        .testimonial-card:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2) !important;
        }

        @media (max-width: 767px) {
            .service-hero h1 {
                font-size: 36px;
            }

            .service-hero p {
                font-size: 18px;
            }

            .service-card {
                min-height: 400px;
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
