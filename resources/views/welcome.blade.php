@extends('layouts.layout')

@section('meta_title', 'Welcome to Astro Saloni')
@section('description', 'Welcome to Astro Saloni')
@section('keywords', 'hello')
@section('geo.placename', 'hello')
@section('geo.position', '87.97')
@section('geo.region', 'hello')
@section('canonical', 'hello')
@section('ICBM', 'hello')
@section('container')

    <style>
        /* Improved Pagination Styles */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .pagination .page-item {
            margin: 0 3px;
            display: inline-block;
        }

        .pagination .page-link {
            color: #333;
            border: 1px solid #ddd;
            padding: 8px 15px;
            border-radius: 4px;
            transition: all 0.3s;
            font-weight: 500;
            text-decoration: none;
            min-width: 40px;
            text-align: center;
            background: white;
        }

        .pagination .page-item.active .page-link {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }

        .pagination .page-item:hover:not(.active) .page-link {
            background-color: #f8f9fa;
            border-color: #dee2e6;
            color: var(--primary-color);
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.6;
            background-color: #e9ecef;
        }

        /* Previous/Next buttons */
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            padding: 8px 12px;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .pagination .page-link {
                padding: 6px 10px;
                font-size: 14px;
                min-width: 35px;
            }

            .pagination .page-item {
                margin: 2px;
            }
        }

        /* Service Card Hover Effect */
        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>

    <!-- Hero Carousel Section -->
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
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
                        <a href="tel:+919988044019" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call Now</a>
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
                        <a href="tel:+919988044019" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call Now</a>
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
                        <a href="tel:+919988044019" class="btn btn-primary"><i class="fas fa-phone-alt"></i> Call Now</a>
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

    <section class="vashikaran-specialist py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-12 order-lg-1 order-2">
                    <div class="specialist-content pe-lg-4">
                        <h2 class="mb-4">Astro Saloni – Best Vashikaran Specialist in India</h2>
                        <p class="mb-3">Astro Saloni has earned wide repute as one of the top and Best Vashikaran
                            specialist in India by providing highly sagely insights and solutions to the puzzles of personal
                            as well as professional life. Years of experience with deep knowledge of astrology have given
                            her repute for accurate and effective remedies through Vashikaran techniques. Vashikaran is a
                            very powerful branch of astrology, influencing energies around an individual, hence helping
                            individuals resolve issues about love, relationships, career, business, health, and many more.
                        </p>
                        <p class="mb-3">Astro Saloni is one of those astrologers who believe in positive practices of
                            Vashikaran. All her remedies rest on the basis of the desired outcome and well-being of the
                            client. Whether it is a love life issue or career elevation or family conflicts, she furnishes
                            your necessities because each one of them has a different tale to be told. Her perfect blend of
                            ancient astrological knowledge with some modern techniques delivered the perfect results for so
                            many people who lose their ground in life.</p>
                        <p class="mb-4">Her services include horoscope analysis in detail, Vashikaran for attraction,
                            solving disputes of relationships, and guaranteeing prosperity in all walks of life. Known to
                            millions all over the nation, Astro Saloni is an icon of hope for all who seek answers to their
                            troubles and solutions. Dedicated deeply towards helping others, she is a leading figure, no
                            doubt, in astrology in India</p>

                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="vashikaran-specialist" style="background-color: #f9f9f9; padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <!-- First Card -->
                <div class="col-lg-6 mb-4">
                    <div
                        style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                        <img src="{{ asset('assets/image/cardimg3.jpg') }}" alt="Vashikaran Consultation"
                            style="width: 100%; height: auto; transition: transform 0.5s ease;">

                        <!-- Text Overlay -->
                        <div style="position: absolute; top: 20%; left: 10%; color: white;">
                            <h2 style="font-weight: bold; font-size: 32px;">Vashikaran<br>Consultation</h2>
                            <p style="font-size: 20px;">Starting Rs. 699</p>
                            <a href="#contact" style="color: white; font-weight: bold; font-size: 16px;">Contact Now</a>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-lg-6 mb-4">
                    <div
                        style="position: relative; border-radius: 10px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                        <img src="{{ asset('assets/image/cardimg2.jpg') }}" alt="Astrology Consultation"
                            style="width: 100%; height: auto; transition: transform 0.5s ease;">

                        <!-- Text Overlay -->
                        <div style="position: absolute; top: 20%; left: 10%; color: white;">
                            <h2 style="font-weight: bold; font-size: 32px;">Astrology<br>Consultation</h2>
                            <p style="font-size: 20px;">Starting Rs. 299</p>
                            <a href="#contact" style="color: white; font-weight: bold; font-size: 16px;">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vashikaran-specialist py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-12 order-lg-1 order-2">
                    <div class="specialist-content pe-lg-4">
                        <h2 class="mb-4">Astro Saloni – Best Astrologer in India</h2>
                        <p class="mb-3">She earned a lot of medals and awards in these fields till date. And, his happy
                            and devoted millions of beneficiaries span the Asian, European, USA American, European,
                            Canadian, Newzealand, UK and Australian continents. High effectiveness, liberal service fees,
                            and protection from side-effects, are exceptional forte of his services.</p>
                        <p class="mb-3">Considered to be an ace and world-class love astrologer, as well as a seasoned
                            and compassionate love vashikaran mantra expert in India and the world, Astro Saloni Ji
                            possesses rich erudition and experience in these mystical and sophisticated arts, to calm the
                            disturbed or somber lives of the world. His positive love marriage vashikaran services are
                            absolutely positive and harmless, while his Vedic astrology services are highest effective and
                            really wonderful. With his errorless, righteous, and original astrology and beneficial black
                            magic services, Kala Jadu Removal, nearly all troubles and misery of life become removifiable or
                            erasable, in accordance with their nature and scale.</p>
                    </div>
                </div>


            </div>
        </div>


    </section>



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
            <!--<div class="row mt-5">-->
            <!--    <div class="col-12">-->
            <!--        <nav aria-label="Page navigation">-->
            <!--            <ul class="pagination justify-content-center">-->
            <!--                {{ $service->links() }}-->
            <!--            </ul>-->
            <!--        </nav>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>

    {{-- descrption --}}

    <section class="vashikaran-specialist py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-12 order-lg-1 order-2">
                    <div class="specialist-content pe-lg-4">
                        <h2 class="mb-4">Our Services</h2>
                        <p class="mb-3">Since past many years, incredible services of this a top vashikaran astrologer of
                            the world, are also accessible online. These speedy online astrology and vashikaran services are
                            highly suitable to people who reside in remote areas. Once again, among India’s best
                            astrologers, our great astro saloni ji has also created two wonder yantras, to provide quicker
                            results, or additional advantages. Finally, rich success of his high-quality services for love
                            and love marriages, has made her a leading love marriage specialist in India and overseas.</p>
                        <p class="mb-3">She provides you with the best solution of your all problems. Whatever it may be
                            personal problems, business problems, career problems, study problems, marriage problems, love
                            problems, inter caste marriage problems, all problems will be sort out from your life with the
                            assistance of our astro saloni ji she is the gold medalist in astrology. She use astrology in
                            her service in help for people. Vashikaran is the most popular and the most used by the people.
                            It is mostly useful for solution. This very helpful for the solve problems. Astro Saloni ji can
                            solve all the planetary problems which is you are facing in your life by your planets in your
                            birth chart.</p>

                        <a href="#contact" class="btn btn-primary">Consult Now</a>
                    </div>
                </div>


            </div>
        </div>

        <!-- Full-width section below the image + content -->
        <div class="container-fluid py-5 mt-5" style="background-color: #fff;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="mb-4">Why Choose Astro Saloni?</h3>
                        <p>Astro Saloni offers the best astrology solutions for love, marriage, business, and life problems.
                            With years of experience and a modern approach blended with ancient knowledge, she stands as the
                            leading Vashikaran and astrology expert in India.</p>
                        <p>Her services are 100% confidential, result-oriented, and available online for clients globally.
                            People from the USA, UK, Canada, Australia, and many other countries trust Astro Saloni for
                            life-changing solutions.</p>
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
            <!--<div class="row mt-5">-->
            <!--<div class="col-12">-->
            <!--    <nav aria-label="Page navigation">-->
            <!--        <ul class="pagination justify-content-center">-->
            <!--            {{ $service->links() }}-->
            <!--        </ul>-->
            <!--    </nav>-->
            <!--</div>-->
        </div>
        </div>
    </section>


    <!-- Floating Icons with Animation -->
    <div class="floating-icons">
        <a href="https://wa.me/919988044019" target="_blank" class="float-icon whatsapp" title="Chat on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
        <a href="tel:+919988044019" class="float-icon call" title="Call Us">
            <i class="fas fa-phone-alt"></i>
        </a>
    </div>

    <style>
        .floating-icons {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 999;
        }

        .float-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            font-size: 24px;
            color: white;
            animation: float 3s ease-in-out infinite;
            text-decoration: none;
        }

        .float-icon:hover {
            transform: scale(1.1) translateY(-5px);
            animation: none;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
        }

        .whatsapp {
            background: #25D366;
            animation-delay: 0.2s;
        }

        .call {
            background: #4285F4;
            animation-delay: 0.4s;
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

    <!-- FAQ Section -->
    <section class="faq-section py-5" id="faq" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our services</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="faqAccordion">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What is Vashikaran and how does it work?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Vashikaran is an ancient spiritual practice that helps attract and influence people's
                                    thoughts and actions through specific mantras and rituals. It works by channeling cosmic
                                    energies to create positive changes in relationships and life situations.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does it take to see results from your services?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The time frame varies depending on the individual situation and the type of service.
                                    Some clients see results within 7-10 days, while others may take 3-4 weeks. We provide
                                    personalized timelines during consultation.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Are your remedies safe and ethical?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, all our remedies are completely safe and ethical. We only practice white magic and
                                    positive energy work that benefits all parties involved without causing any harm.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What information do you need to provide solutions?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We typically need names, birth details (if available), and a clear description of your
                                    situation. Photos can be helpful but aren't mandatory. All information is kept strictly
                                    confidential.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can you guarantee results?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    While we have a very high success rate, we cannot guarantee 100% results as outcomes
                                    depend on various factors including karma and individual circumstances. However, we do
                                    guarantee our best efforts and complete dedication to your case.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 6 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    How do I know if I'm affected by black magic?
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Common signs include sudden bad luck, recurring nightmares, unexplained health issues,
                                    relationship problems without cause, or feeling constantly negative. We can perform a
                                    detailed analysis to confirm.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 7 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    What payment methods do you accept?
                                </button>
                            </h3>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We accept all major payment methods including credit/debit cards, bank transfers, UPI
                                    payments, and digital wallets. All transactions are secure and confidential.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 8 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    How often should I follow up after starting remedies?
                                </button>
                            </h3>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We recommend weekly updates for the first month, then bi-weekly as needed. However,
                                    we're available anytime you have questions or need guidance throughout the process.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 9 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    Can you help with business and career problems?
                                </button>
                            </h3>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely. We offer specialized solutions for business growth, career advancement,
                                    removing obstacles, attracting opportunities, and improving professional relationships.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 10 -->
                        <div class="accordion-item mb-3 border-0 shadow-sm">
                            <h3 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    Is my personal information kept confidential?
                                </button>
                            </h3>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, client confidentiality is our top priority. All information shared with us remains
                                    strictly private and is never disclosed to any third party under any circumstances.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add this CSS for the FAQ section -->
    <style>
        .faq-section {
            background-color: #f8f9fa;
        }

        .accordion-button {
            font-weight: 600;
            padding: 1rem 1.5rem;
            background-color: white;
        }

        .accordion-button:not(.collapsed) {
            color: var(--primary-color);
            background-color: rgba(212, 175, 55, 0.1);
        }

        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(212, 175, 55, 0.25);
        }

        .accordion-body {
            padding: 1.5rem;
            background-color: white;
        }

        .accordion-item {
            border-radius: 8px !important;
            overflow: hidden;
        }
    </style>
@endsection
