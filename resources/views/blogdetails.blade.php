@extends('layouts.layout')
@section('Page_title', $blog->blog_name)
@section('meta_title', $meta_title ?? 'Welcome to Astro Saloni')
@section('meta_description', $meta_description ?? 'Astro Saloni Services')
@section('keywords', $keywords ?? '')
@section('geo_placename', $geo_placename ?? '')
@section('geo_position', $geo_position ?? '')
@section('geo_region', $geo_region ?? '')
@section('canonical', $canonical ?? '')
@section('icbm', $icbm ?? '')
@section('schema', $schema ?? '')
@section('container')

    <style>
        /* Consolidated and improved CSS */
        .blog-details-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/image/carousal3.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 120px 0 80px;
            color: white;
            text-align: center;
            margin-bottom: 30px;
        }

        .blog-details-hero h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .blog-meta {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 1rem;
        }

        .blog-details-content {
            padding: 60px 0;
        }

        .blog-details-image {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .blog-content {
            line-height: 1.8;
            font-size: 1.1rem;
            color: #444;
        }

        .blog-content img {
            max-width: 100%;
            height: auto;
            margin: 25px 0;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .share-buttons {
            margin: 40px 0;
            padding: 20px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .section-title {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }

        /* Sidebar styles */
        .blog-sidebar {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .sidebar-title {
            font-size: 1.25rem;
            margin-bottom: 1.25rem;
            color: #333;
        }

        /* Recent posts widget */
        .recent-post {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .recent-post:last-child {
            border-bottom: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .recent-post-img {
            width: 80px;
            height: 60px;
            border-radius: 6px;
            object-fit: cover;
        }

        .recent-post-title {
            font-size: 0.95rem;
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .recent-post-date {
            font-size: 0.8rem;
            color: #777;
        }

        /* Related posts */
        .related-post {
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }

        .related-post:hover {
            transform: translateY(-5px);
        }

        .related-post-img {
            height: 180px;
            width: 100%;
            object-fit: cover;
            border-radius: 8px 8px 0 0;
        }

        .related-post-body {
            padding: 20px;
            border: 1px solid #eee;
            border-top: 0;
            border-radius: 0 0 8px 8px;
        }

        .related-post-title {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        @media (max-width: 991.98px) {
            .blog-details-hero {
                padding: 80px 0 50px;
            }

            .blog-details-hero h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 767.98px) {
            .blog-details-hero h1 {
                font-size: 1.75rem;
            }

            .blog-content {
                font-size: 1rem;
            }
        }
    </style>

    <!-- Blog Hero Section -->
    <section class="blog-details-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h1 class="text-white mb-3">{{ $blog->blog_name }}</h1>
                    <div class="blog-meta text-white">
                        <span class="badge bg-primary">{{ $blog->blog_type }}</span>
                        <span><i class="far fa-user me-1"></i> By Admin</span>
                        <span><i class="far fa-calendar-alt me-1"></i>
                            {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</span>
                        <span><i class="far fa-clock me-1"></i> {{ $blog->reading_time ?? '5' }} min read</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Content -->
    <section class="blog-details-content">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <article class="blog-post">
                        <div class="blog-details-image">
                            <img src="{{ asset($blog->blog_image) }}" alt="{{ $blog->blog_name }}" class="img-fluid w-100">
                        </div>

                        <div class="blog-content">
                            {!! $blog->blog_desc !!}
                        </div>

                        <!-- Tags -->
                        @if ($blog->tags)
                            <div class="post-tags mt-4">
                                <h5 class="d-inline-block me-2">Tags:</h5>
                                @foreach (explode(',', $blog->tags) as $tag)
                                    <a href="#" class="badge bg-light text-dark me-1">{{ trim($tag) }}</a>
                                @endforeach
                            </div>
                        @endif



                        <!-- Related Posts -->
                        @if (isset($related_blogs) && $related_blogs->count() > 0)
                            <div class="related-posts mt-5">
                                <h3 class="section-title">You May Also Like</h3>
                                <div class="row">
                                    @foreach ($related_blogs as $related)
                                        <div class="col-md-6">
                                            <article class="related-post">
                                                <a href="{{ url('/blog/' . $related->blog_slug) }}">
                                                    <img src="{{ asset($related->blog_image) }}"
                                                        alt="{{ $related->blog_name }}" class="related-post-img">
                                                    <div class="related-post-body">
                                                        <h4 class="related-post-title">{{ $related->blog_name }}</h4>
                                                        <div class="text-muted small">
                                                            <i class="far fa-calendar-alt me-1"></i>
                                                            {{ \Carbon\Carbon::parse($related->created_at)->format('M d, Y') }}
                                                        </div>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </article>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Search Widget -->
                    <div class="blog-sidebar">
                        <div class="sidebar-search mb-4">
                            <form method="GET" action="{{ url('/blog') }}">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search blog..."
                                        value="{{ $search ?? '' }}">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- About Widget -->
                        <div class="about-widget text-center mb-4">
                            <img src="{{ asset('assets/image/about.jpg') }}" alt="Astro Saloni" class="rounded-circle mb-3"
                                width="100">
                            <h4 class="sidebar-title">About Me</h4>
                            <p>I'm Astro Saloni, providing spiritual guidance and solutions for love and relationship
                                problems worldwide.</p>
                        </div>

                        <!-- Recent Posts Widget -->
                        <div class="recent-posts-widget mb-4">
                            <h4 class="sidebar-title">Recent Posts</h4>
                            @foreach ($recent_blogs as $recent)
                                <div class="recent-post">
                                    <img src="{{ asset($recent->blog_image ?? 'assets/image/about.jpg') }}"
                                        alt="{{ $recent->blog_name }}" class="recent-post-img">
                                    <div>
                                        <h5 class="recent-post-title">
                                            <a
                                                href="{{ url('/blog/' . $recent->blog_slug) }}">{{ $recent->blog_name }}</a>
                                        </h5>
                                        <div class="recent-post-date">
                                            <i class="far fa-calendar-alt me-1"></i>
                                            {{ \Carbon\Carbon::parse($recent->created_at)->format('M d, Y') }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Categories Widget -->
                        <div class="categories-widget mb-4">
                            <h4 class="sidebar-title">Categories</h4>
                            <ul class="list-unstyled">
                                @foreach ($categories as $category)
                                    <li class="mb-2">
                                        <a href="{{ url('/blog?category=' . $category->id) }}"
                                            class="d-flex justify-content-between align-items-center text-decoration-none">
                                            <span>{{ $category->category_name }}</span>
                                            <span class="badge bg-primary rounded-pill">{{ $category->blogs_count }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- CTA Widget -->
                        <div class="cta-widget text-center">
                            <h4 class="sidebar-title">Need Help?</h4>
                            <p>Get personalized solutions for your problems</p>
                            <a href="{{ route('contactus') }}" class="btn btn-primary btn-block">Contact Now</a>
                        </div>
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

    <!-- FAQ Section -->
    <section class="faq-section py-5" id="faq" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about our services</p>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    @if ($faqs->count() > 0)
                        <div class="accordion" id="faqAccordion">
                            @foreach ($faqs as $index => $faq)
                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h3 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                            aria-expanded="false" aria-controls="collapse{{ $index }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h3>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No FAQs available for this blog.</p>
                    @endif
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

    <!-- Share Buttons -->
    <div class="share-buttons text-center">
        <h5 class="section-title">Share This Post</h5>
        <div class="d-flex justify-content-center flex-wrap">
            <a href="#" class="btn btn-outline-primary btn-sm rounded-pill me-2 mb-2">
                <i class="fab fa-facebook-f me-1"></i> Facebook
            </a>
            <a href="#" class="btn btn-outline-info btn-sm rounded-pill me-2 mb-2">
                <i class="fab fa-twitter me-1"></i> Twitter
            </a>
            <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill me-2 mb-2">
                <i class="fab fa-linkedin-in me-1"></i> LinkedIn
            </a>
            <a href="#" class="btn btn-outline-success btn-sm rounded-pill me-2 mb-2">
                <i class="fab fa-whatsapp me-1"></i> WhatsApp
            </a>
        </div>
    </div>
@endsection
