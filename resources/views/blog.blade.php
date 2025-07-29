@extends('layouts.layout')
@section('Page_title', 'Blog')
@section('container')

    <style>
        /* Blog Hero Section */
        .blog-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/image/carousal3.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 150px 0 100px;
            color: white;
            text-align: center;
        }

        .blog-hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            animation: fadeInDown 0.8s ease-out;
        }

        .blog-hero p {
            font-size: 1.25rem;
            opacity: 0.9;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        /* Breadcrumb */
        .breadcrumb-nav {
            background-color: #f8f9fa;
        }

        .breadcrumb {
            padding: 0.75rem 0;
            margin-bottom: 0;
        }

        .breadcrumb-item a {
            color: var(--primary-color);
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #6c757d;
        }

        /* Main Content Styles */
        .blog-main {
            padding: 5rem 0;
        }

        /* Recent Posts Sidebar */
        .blog-sidebar {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        .sidebar-search {
            position: relative;
            margin-bottom: 2rem;
        }

        .sidebar-search input {
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            border: 1px solid #e2e8f0;
            width: 100%;
        }

        .sidebar-search button {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            color: var(--primary-color);
        }

        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Add other styles from previous implementation here */
        /* ... */
    </style>

    <style>
        .blog-post-card {
            transition: all 0.3s ease;
            border-radius: 10px;
            overflow: hidden;
        }

        .blog-post-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
        }

        .blog-post-card .card-body {
            padding: 1.5rem;
        }

        .blog-post-card .btn-link {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .blog-post-card .btn-link:hover {
            text-decoration: underline;
        }

        .blog-post-card .btn-link i {
            transition: transform 0.3s ease;
        }

        .blog-post-card .btn-link:hover i {
            transform: translateX(5px);
        }

        @media (max-width: 767.98px) {
            .blog-post-card img {
                height: 200px;
                width: 100%;
                object-fit: cover;
            }
        }
    </style>

    <style>
        .recent-post-content {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 15px;
        }

        .recent-post-image {
            flex: 0 0 60px;
        }

        .recent-post-image img {
            width: 100px;
            height: 62px;
            border-radius: 4px;
        }

        .recent-post-text {
            flex: 1;
        }

        .recent-post-text h5 {
            margin: 0 0 5px 0;
            font-size: 15px;
            line-height: 1.3;
        }

        .recent-post-text p {
            margin: 0;
            font-size: 13px;
            color: #777;
        }
    </style>

    <!-- Blog Hero Section -->
    <section class="blog-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="text-white mb-4 animate__animated animate__fadeInDown">Our Blog</h1>
                    <p class="text-white mb-0 animate__animated animate__fadeInUp animate__delay-1s">Insights and solutions
                        for your spiritual and relationship problems</p>
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
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="blog-main">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Blog Post Card 1 -->
                    @foreach ($blogs as $list)
                        <div class="card blog-post-card mb-5 border-0 shadow-sm">
                            <div class="row g-0">
                                <!-- Image Column -->
                                <div class="col-md-4">
                                    <img src="{{ asset($list->blog_image) }}" class="img-fluid rounded-start h-100"
                                        alt="{{ $list->blog_name }}" style="object-fit: cover;">
                                </div>

                                <!-- Content Column -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="badge bg-primary me-2">{{ $list->blog_type }}</span>
                                            <small class="text-muted">
                                                <i class="far fa-calendar-alt me-1"></i>
                                                {{ \Carbon\Carbon::parse($list->created_at)->format('F d, Y') }}
                                            </small>
                                        </div>
                                        <h3 class="h4 card-title mb-3">{{ $list->blog_name }}</h3>
                                        <p class="card-text text-muted">{{ $list->blog_shortdesc }}</p>

                                        <a href="{{ url('/blog/' . $list->blog_slug) }}"
                                            class="btn btn-link text-primary ps-0">
                                            Read More <i class="fas fa-arrow-right ms-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Pagination -->
                    <nav aria-label="Blog pagination">
                        <ul class="pagination justify-content-center mt-4">
                            @if ($blogs->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link" tabindex="-1" aria-disabled="true">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}" tabindex="-1">Previous</a>
                                </li>
                            @endif

                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $blogs->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            @if ($blogs->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">Next</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <!-- Search Bar in Recent Posts Section -->
                    <div class="blog-sidebar">
                        <div class="sidebar-search">
                            <form method="GET" action="{{ url('/blog') }}" class="sidebar-search d-flex">
                                <input type="text" name="search" class="form-control" placeholder="Search blog..."
                                    value="{{ $search ?? '' }}">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>


                        <h4 class="sidebar-title">Recent Posts</h4>

                        @foreach ($recent_blogs as $recent)
                            <div class="recent-post">
                                <div class="recent-post-content">
                                    <div class="recent-post-image">
                                        <img src="{{ asset('assets/image/about.jpg') }}" alt="{{ $recent->blog_name }}">
                                    </div>
                                    <div class="recent-post-text">
                                        <h5>
                                            <a href="{{ url('/blog/' . $recent->blog_slug) }}">
                                                {{ $recent->blog_name }}
                                            </a>
                                        </h5>
                                        <p>{{ \Carbon\Carbon::parse($recent->created_at)->format('F d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Categories Section -->
                    <div class="blog-sidebar">
                        <h4 class="sidebar-title">Categories</h4>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                                <li class="mb-2">
                                    <a href="{{ url('/blog?category=' . $category->id) }}"
                                        class="text-decoration-none d-flex justify-content-between align-items-center">
                                        <span>{{ $category->category_name }}</span>
                                        <span class="badge bg-primary">{{ $category->blogs_count }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
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
