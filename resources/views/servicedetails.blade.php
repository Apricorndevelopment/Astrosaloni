@extends('layouts.layout')
@section('meta_title', $meta_title ?? 'Welcome to Astro Saloni')
@section('meta_description', $meta_description ?? 'Astro Saloni Services')
@section('page_title', $page_title ?? 'Service Details')
@section('container')

    <style>
        /* Service Details Hero Section */
        .service-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset($service->service_image) }}');
            background-size: cover;
            background-position: center;
            padding: 150px 0 100px;
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        .service-hero h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-transform: capitalize;
        }

        /* Breadcrumb */
        .breadcrumb-nav {
            background-color: #f8f9fa;
            padding: 15px 0;
        }

        /* Service Content */
        .service-content-section {
            padding: 60px 0;
        }

        .service-main-image {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-details-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #555;
        }

        .service-details-content h2,
        .service-details-content h3,
        .service-details-content h4 {
            color: #333;
            margin-top: 1.5em;
            margin-bottom: 0.8em;
        }

        /* Key Features */
        .service-features {
            margin: 40px 0;
        }

        .feature-box {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 20px;
            border-left: 4px solid #8e44ad;
        }

        .feature-box i {
            color: #8e44ad;
            font-size: 1.5rem;
            margin-bottom: 15px;
            display: inline-block;
        }

        /* CTA Section */
        .service-cta {
            background: linear-gradient(135deg, #8e44ad, #6c5ce7);
            color: white;
            padding: 60px 0;
            margin: 60px 0;
            text-align: center;
            border-radius: 10px;
        }

        /* Related Services */
        .related-services {
            margin-top: 60px;
            padding-top: 40px;
            border-top: 1px solid #eee;
        }

        .recent-post {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #f0f0f0;
        }

        .recent-post:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .recent-post-img {
            width: 100px;
            height: 80px;
            border-radius: 6px;
            object-fit: cover;
            margin-right: 15px;
        }

        .recent-post-content h5 {
            font-size: 16px;
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .recent-post-content p {
            font-size: 13px;
            color: #777;
            margin-bottom: 0;
        }

        @media (max-width: 767.98px) {
            .service-hero h1 {
                font-size: 2rem;
            }

            .service-hero {
                padding: 100px 0 60px;
            }

            .recent-post {
                flex-direction: column;
            }

            .recent-post-img {
                width: 100%;
                height: 150px;
                margin-bottom: 15px;
                margin-right: 0;
            }
        }
    </style>

    <!-- Service Hero Section -->
    <section class="service-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h1>{{ $service->service_name }}</h1>
                    <p class="lead">Expert solutions for your specific problems</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb-nav">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $service->service_name }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Service Content Section -->
    <section class="service-content-section">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="service-main-image">
                        <img src="{{ asset($service->service_image) }}" alt="{{ $service->service_name }}"
                            class="img-fluid">
                    </div>

                    <div class="service-details-content">
                        {!! $service->service_desc !!}
                    </div>

                    <!-- Key Features -->
                    <div class="service-features">
                        <h2 class="mb-4">Key Benefits</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-check-circle"></i>
                                    <h4>100% Guaranteed Results</h4>
                                    <p>Our solutions have helped thousands of clients with proven results and satisfaction.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-user-shield"></i>
                                    <h4>Privacy Protected</h4>
                                    <p>Your personal information and problems remain completely confidential.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-clock"></i>
                                    <h4>Quick Solutions</h4>
                                    <p>Get effective remedies that start working quickly to resolve your issues.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-box">
                                    <i class="fas fa-globe"></i>
                                    <h4>Worldwide Service</h4>
                                    <p>We provide solutions to clients across the globe with equal effectiveness.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Section -->
                    <div class="service-cta">
                        <h2 class="mb-4">Need Immediate Help?</h2>
                        <p class="lead mb-4">Contact us now for personalized solutions to your problems</p>
                        <a href="/contact" class="btn btn-light btn-lg px-5">Consult Now</a>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Related Services -->
                    <div class="related-services">
                        <h2 class="mb-4">Recent Posts</h2>
                        @foreach ($related_services as $recent)
                            <div class="recent-post">
                                <img src="{{ asset($recent->service_image) }}" alt="{{ $recent->service_name }}"
                                    class="recent-post-img">
                                <div class="recent-post-content">
                                    <h5>
                                        <a
                                            href="{{ url('/services/' . $recent->service_slug) }}">{{ $recent->service_name }}</a>
                                    </h5>
                                    <p>{{ \Carbon\Carbon::parse($recent->created_at)->format('F d, Y') }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
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
