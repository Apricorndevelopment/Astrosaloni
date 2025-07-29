@extends('layouts.layout')
@section('Page_title', 'Contact Us')
@section('container')

    <style>
        :root {
            --primary-color: #6e48aa;
            --primary-light: #9d50bb;
            --text-dark: #2d3748;
            --text-light: #4a5568;
            --bg-light: #f8f9fa;
            --transition-base: all 0.3s ease-in-out;
        }

        /* Hero Section with Background Image */
        .contact-hero {
            position: relative;
            padding: 8rem 0 6rem;
            color: white;
            text-align: center;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(205, 195, 195, 0.7)), url('{{ asset('assets/image/contact.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 150px 0 100px;
            " no-repeat center center;
     background-size: cover;
            background-attachment: fixed;
        }

        .contact-hero .container {
            position: relative;
            z-index: 3;
        }

        .contact-hero h1 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 0.8s ease-out;
        }

        .contact-hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 2rem;
            opacity: 0.9;
            animation: fadeInUp 0.8s ease-out 0.2s both;
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

        /* Contact Section */
        .contact-section {
            padding: 5rem 0;
            background-color: var(--bg-light);
        }

        .contact-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: var(--transition-base);
            height: 100%;
            background: white;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        .contact-card .card-body {
            padding: 2.5rem;
        }

        .section-title {
            color: var(--text-dark);
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
        }

        .form-control {
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            transition: var(--transition-base);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(110, 72, 170, 0.25);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: var(--transition-base);
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-2px);
        }

        .contact-info {
            margin-top: 3rem;
        }

        .contact-info-item {
            margin-bottom: 2rem;
            padding-left: 1.5rem;
            border-left: 3px solid var(--primary-color);
        }

        .contact-info-item h5 {
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .contact-info-item p {
            color: var(--text-light);
            margin-bottom: 0.25rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .contact-hero {
                padding: 6rem 0 4rem;
            }

            .contact-section {
                padding: 3rem 0;
            }

            .contact-info {
                margin-top: 2rem;
            }
        }

        @media (max-width: 768px) {
            .contact-hero {
                background-attachment: scroll;
            }

            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .contact-hero p {
                font-size: 1.1rem;
            }

            .contact-card .card-body {
                padding: 1.75rem;
            }
        }
    </style>

    <!-- Hero Section with Background Image -->
    <section class="contact-hero">
        <div class="container">
            <h1 class="display-4">Get in Touch With Us</h1>
            <p class="lead">We're here to help and answer any questions you might have. We look forward to hearing from
                you.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <!-- Contact Form -->
                        <div class="col-lg-7">
                            <div class="contact-card card">
                                <div class="card-body">
                                    <h2 class="section-title">Send Us a Message</h2>
                                    <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name" class="form-label">Full Name</label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message" class="form-label">Subject</label>
                                                    <input type="text" name="subject" class="form-control"
                                                        placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="message" class="form-label">Your Message</label>
                                                    <textarea class="form-control" id="message" name="user_message" rows="6" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information -->
                        <div class="col-lg-5">
                            <div class="contact-info">
                                <h2 class="section-title">Contact Information</h2>

                                <div class="contact-info-item">
                                    <h5>Our Location</h5>
                                    <p>123 Spiritual Street</p>
                                    <p>Vashikaran City, VC 12345</p>
                                </div>

                                <div class="contact-info-item">
                                    <h5>Call Us</h5>
                                    <p>+1 (123) 456-7890</p>
                                    <p>+1 (987) 654-3210</p>
                                </div>

                                <div class="contact-info-item">
                                    <h5>Email Us</h5>
                                    <p>info@astrosaloni.com</p>
                                    <p>support@astrosaloni.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form validation would be added here in a production environment
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Basic validation example
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (!name || !email || !message) {
                alert('Please fill in all required fields');
                return;
            }

            // In a real implementation, you would add AJAX submission here
            console.log('Form submitted successfully');
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
        });
    </script>

@endsection
