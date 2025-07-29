@extends('admin/layout')
@section('page_title', 'Category')
@section('container')

    <style>
        /* Main Container */
        .content-main {
            padding: 2rem;
            background-color: #f8f9fa;
            min-height: calc(100vh - 60px);
        }

        /* Flash Message */
        .alert {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }

        /* Header Section */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #e9ecef;
        }

        .page-title {
            font-size: 1.75rem;
            font-weight: 600;
            color: #2c3e50;
            margin: 0;
        }

        /* Back Button */
        .back-btn {
            background-color: #6e48aa;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.75rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .back-btn:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
            color: white;
        }

        /* Form Card */
        .form-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-body {
            padding: 2rem;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #495057;
        }

        .form-control {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ced4da;
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: white !important;
        }

        .form-control:focus {
            border-color: #6e48aa;
            box-shadow: 0 0 0 0.2rem rgba(110, 72, 170, 0.25);
            outline: none;
        }

        /* File Input */
        .file-input {
            display: block;
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ced4da;
            border-radius: 6px;
            background-color: white;
        }

        /* Image Preview */
        .image-preview {
            margin-top: 1rem;
        }

        .image-preview img {
            max-width: 100px;
            height: auto;
            border-radius: 4px;
            border: 1px solid #eee;
        }

        /* Submit Button */
        .submit-btn {
            background-color: #6e48aa;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .content-main {
                padding: 1rem;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .card-body {
                padding: 1.5rem;
            }
        }
    </style>

    <section class="content-main">
        <div class="container">
            <!-- Flash message -->
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            <div class="page-header">
                <h1 class="page-title">Manage Category</h1>
                <a href="{{ url('admin/category') }}" class="back-btn">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="form-card card">
                        <div class="card-body">
                            <form action="{{ route('category.manage_category_process') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="category_name" class="form-label">Category Name</label>
                                    <input id="category_name" value="{{ $category_name }}" name="category_name"
                                        type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_slug" class="form-label">Category Slug</label>
                                    <input id="category_slug" value="{{ $category_slug }}" name="category_slug"
                                        type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="category_image" class="form-label">Category Image</label>
                                    <input type="file" id="category_image" name="category_image" class="file-input"
                                        accept=".jpg,.jpeg,.png,.gif,.svg">

                                    @if ($id > 0 && !empty($category_image))
                                        <div class="image-preview">
                                            <img src="{{ asset($category_image) }}" alt="Current Category Image">
                                        </div>
                                    @endif
                                </div>

                                <button type="submit" class="submit-btn">Submit</button>
                                <input type="hidden" name="id" value="{{ $id }}" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

@endsection
