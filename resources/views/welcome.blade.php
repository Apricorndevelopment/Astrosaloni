@extends('layouts.layout')
@section('page_title', 'Welcome to Astro Saloni')
@section('container')

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

    <!-- Hero Carousel Section -->
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" id="home">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('assets/image/carousal1.jpg') }}" class="d-block w-100" alt="Vashikaran Specialist">
                <div class="carousel-caption">
                    <h1>Vashikaran Specialist <br><span>Astro Saloni</span></h1>
                    <p>Get 100% guaranteed solutions for love problems, marriage problems, business problems and all
                        types of life problems from India's most trusted astrologer.</p>
                    <div class="hero-btns">
                        <a href="tel:+919988044019" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call
                            Now</a>
                        <a href="#contact" class="btn btn-outline-light">Consult Now</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/image/carousal2.jpg') }}" class="d-block w-100" alt="Love Marriage Specialist">
                <div class="carousel-caption">
                    <h1>Love Marriage <br><span>Specialist</span></h1>
                    <p>Solve all your love and marriage problems with our expert astrological solutions and get your
                        loved one back in your life.</p>
                    <div class="hero-btns">
                        <a href="tel:+919988044019" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call
                            Now</a>
                        <a href="#contact" class="btn btn-outline-light">Consult Now</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/image/carousal3.jpg') }}" class="d-block w-100" alt="Black Magic Removal">
                <div class="carousel-caption">
                    <h1>Black Magic <br><span>Removal Expert</span></h1>
                    <p>Remove all negative energies and black magic effects from your life with our powerful remedies
                        and solutions.</p>
                    <div class="hero-btns">
                        <a href="tel:+919988044019" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call
                            Now</a>
                        <a href="#contact" class="btn btn-outline-light">Consult Now</a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Services Section -->

    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>

            <div class="row">
                <!-- Love Problem Solution -->
                @foreach ($service as $list)
                    <div class="col-lg-4 col-md-6 g-2">
                        <div class="service-card" style="background-image: url('{{ $list->service_image }}');">
                            <div class="service-overlay"></div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="{{ $list->service_icon }}"></i>
                                </div>
                                <h3>{{ $list->service_name }}</h3>
                                <p>{{ $list->service_name }}
                                </p>
                                <a href="#{{ url('/service/' . $list->service_slug) }}" class="btn btn-primary">Read
                                    More</a>
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

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('assets/image/astrosaloni.jpg') }}" alt="Astro Saloni">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>About <span>Astro Saloni</span></h2>
                        <p>Astro Saloni is a renowned astrologer and vashikaran specialist with more than 15 years of
                            experience in solving people's life problems through astrology and vashikaran.</p>
                        <p>She has helped thousands of people in solving their love, marriage, business and other life
                            problems with her accurate predictions and effective remedies.</p>

                        <ul class="about-list">
                            <li>15+ Years of Experience</li>
                            <li>100% Guaranteed Solutions</li>
                            <li>24/7 Customer Support</li>
                            <li>Private & Confidential Consultations</li>
                        </ul>

                        <a href="#contact" class="btn btn-primary">Consult Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- descrption --}}

    <section class="vashikaran-specialist" style="background-color: #f9f9f9; padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="specialist-content">
                        <h2 style="font-size: 36px; font-weight: 700; color: #1a1a1a; margin-bottom: 20px;">
                            Astro Saloni – Best Vashikaran Specialist in India
                        </h2>
                        <p style="color: #666; margin-bottom: 15px;">
                            Astro Saloni has earned wide repute as one of the top and Best Vashikaran specialist in
                            India by providing highly sagely insights and solutions to the puzzles of personal as well
                            as professional life. Years of experience with deep knowledge of astrology have given her
                            repute for accurate and effective remedies through Vashikaran techniques.
                        </p>
                        <p style="color: #666; margin-bottom: 15px;">
                            Vashikaran is a very powerful branch of astrology, influencing energies around an
                            individual, hence helping individuals resolve issues about love, relationships, career,
                            business, health, and many more.
                        </p>
                        <p style="color: #666; margin-bottom: 15px;">
                            Astro Saloni is one of those astrologers who believe in positive practices of Vashikaran.
                            All her remedies rest on the basis of the desired outcome and well-being of the client.
                            Whether it is a love life issue or career elevation or family conflicts, she furnishes your
                            necessities because each one of them has a different tale to be told.
                        </p>
                        <p style="color: #666; margin-bottom: 15px;">
                            Her perfect blend of ancient astrological knowledge with some modern techniques delivered
                            the perfect results for so many people who lose their ground in life.
                        </p>
                        <p style="color: #666; margin-bottom: 20px;">
                            Her services include horoscope analysis in detail, Vashikaran for attraction, solving
                            disputes of relationships, and guaranteeing prosperity in all walks of life. Known to
                            millions all over the nation, Astro Saloni is an icon of hope for all who seek answers to
                            their troubles and solutions. Dedicated deeply towards helping others, she is a leading
                            figure, no doubt, in astrology in India.
                        </p>
                        <a href="#contact" class="btn btn-primary">Consult Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="specialist-image"
                        style="border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                        <img src="{{ asset('assets/image/cardimg2.jpg') }}" alt="Astro Saloni - Vashikaran Specialist"
                            style="width: 100%; height: auto; transition: transform 0.5s ease;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Blog</h2>
            </div>

            <div class="row">
                <!-- Love Problem Solution -->
                @foreach ($blog as $list)
                    <div class="col-lg-4 col-md-6 g-2">
                        <div class="service-card" style="background-image: url('{{ $list->blog_image }}');">
                            <div class="service-overlay"></div>
                            <div class="service-content">
                                {{-- <div class="service-icon">
                                    <i class="{{ $list->service_icon }}"></i>
                                </div> --}}
                                <h3>{{ $list->blog_name }}</h3>
                                <p>{{ $list->blog_name }}
                                </p>
                                <a href="#{{ url('/blog/' . $list->blog_slug) }}" class="btn btn-primary">Read
                                    More</a>
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

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Address</h4>
                                <p>123 Astrology Street, Delhi, India</p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Call Us</h4>
                                <p>+91 9988044019</p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Email Us</h4>
                                <p>contact@astrosaloni.com</p>
                            </div>
                        </div>

                        <div class="contact-info-box">
                            <div class="contact-info-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="contact-info-text">
                                <h4>Working Hours</h4>
                                <p>Monday - Sunday: 9:00 AM - 9:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    {{-- <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Subject">
                        <textarea class="form-control" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form> --}}
                    <form class="contact-form" method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Your Email"
                                    required>
                            </div>
                        </div>
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                        <textarea name="user_message" class="form-control" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>

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
