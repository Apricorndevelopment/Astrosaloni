<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Astro Saloni - Vashikaran Specialist</title> --}}
    <title>@yield('meta_title', 'Astro Saloni Admin')</title>
    <meta name="description" content="@yield('meta_description', 'Welcome to Astro Saloni Admin Panel')">
    <meta name="keywords" content="@yield('keywords', '')">
    <meta name="geo.placename" content="@yield('geo_placename', '')">
    <meta name="geo.position" content="@yield('geo_position', '')">
    <meta name="geo.region" content="@yield('geo_region', '')">
    <link rel="canonical" href="@yield('canonical', '')">
    <meta name="ICBM" content="@yield('icbm', '')">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-inner">
                <a href="{{ '/' }}" class="logo">Astro <span>Saloni</span></a>

                <ul class="nav-menu">
                    <li><a href="{{ '/' }}">Home</a></li>
                    <li><a href="{{ route('aboutus') }}">About</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contactus') }}">Contact</a></li>
                </ul>

                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <a href="{{ '/' }}" class="logo">Astro <span>Saloni</span></a>
            <button class="mobile-menu-close">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <ul class="mobile-nav">
            <li><a href="{{ '/' }}">Home</a></li>
            <li><a href="{{ route('aboutus') }}">About</a></li>
            <li><a href="{{ route('service') }}">Services</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
            <li><a href="{{ route('contactus') }}">Contact</a></li>
        </ul>
    </div>

    <div class="overlay"></div>

    @section('container') @show

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h3>About Us</h3>
                        <p>Astro Saloni is a renowned astrologer and vashikaran specialist with more than 15 years of
                            experience in solving people's life problems through astrology and vashikaran.</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <ul class="footer-links">
                            <li><a href="{{ '/' }}">Home</a></li>
                            <li><a href="{{ route('aboutus') }}">About</a></li>
                            <li><a href="{{ route('service') }}">Services</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                            <li><a href="{{ route('contactus') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Our Services</h3>
                        @foreach ($service_name as $list)
                            <ul class="footer-links">
                                <li><a
                                        href="{{ url('/service/' . $list->service_slug) }}">{{ $list->service_name }}</a>
                                </li>
                            </ul>
                        @endforeach

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Contact Info</h3>
                        <ul class="footer-contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>123 Astrology Street, Delhi, India</span>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <span>+91 9988044019</span>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>contact@astrosaloni.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2023 Astro Saloni. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-bottom-links">
                            <a href="#">Privacy Policy</a>
                            <a href="#">Terms & Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const mobileMenuClose = document.querySelector('.mobile-menu-close');
        const mobileMenu = document.querySelector('.mobile-menu');
        const overlay = document.querySelector('.overlay');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            overlay.classList.add('active');
        });

        mobileMenuClose.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
        });

        overlay.addEventListener('click', function() {
            mobileMenu.classList.remove('active');
            overlay.classList.remove('active');
        });

        // Sticky Header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 0);
        });

        // Smooth Scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Close mobile menu if open
                    mobileMenu.classList.remove('active');
                    overlay.classList.remove('active');
                }
            });
        });

        // Initialize the carousel with autoplay
        const heroCarousel = new bootstrap.Carousel('#heroCarousel', {
            interval: 5000, // Change slide every 5 seconds
            pause: 'hover', // Pause on hover
            wrap: true // Infinite looping
        });
    </script>
    <script>
        // Add hover effect to the specialist image
        document.querySelector('.specialist-image img').addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.03)';
        });
        document.querySelector('.specialist-image img').addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    </script>
</body>

</html>
