@extends('admin/layout')
@section('page_title', 'Manage_service')
@section('container')

    <style>
        /* Main Container */
        .container-fluid {
            padding: 2rem;
            background-color: #f8f9fa;
            min-height: calc(100vh - 60px);
        }

        /* Header Section */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .back-btn {
            background-color: #6e48aa;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 0.5rem 1.25rem;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
        }

        /* Form Card */
        .card {
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
        }

        .form-control:focus {
            border-color: #6e48aa;
            box-shadow: 0 0 0 0.2rem rgba(110, 72, 170, 0.25);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
        }

        /* File Input */
        .form-control[type="file"] {
            padding: 0.5rem;
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

        /* Error Messages */
        .text-danger {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        /* CKEditor Styling */
        .ck-editor__editable {
            min-height: 200px;
            border-radius: 6px !important;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .container-fluid {
                padding: 1rem;
            }

            .top-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .card-body {
                padding: 1.5rem;
            }
        }
    </style>

    @if ($id > 0)
        @php $image_required = ''; @endphp
    @else
        @php $image_required = 'required'; @endphp
    @endif

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <div class="top-header">
                    <h1 class="page-title">Manage Service</h1>
                    <a href="{{ url('admin/service') }}" class="back-btn">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>

                <form action="{{ route('service.manage_service_process') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="service_name" class="form-label">Service Title</label>
                                <input id="service_name" value="{{ $service_name }}" name="service_name" type="text"
                                    class="form-control" required>
                                @error('service_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input id="meta_title" value="{{ $meta_title }}" name="meta_title" type="text"
                                    class="form-control" required>
                                @error('meta_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="service_slug" class="form-label">Service Slug</label>
                                <input id="service_slug" value="{{ $service_slug }}" name="service_slug" type="text"
                                    class="form-control" required>
                                @error('service_slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="meta_description" class="form-label">Meta Description </label>
                                <input id="meta_description" value="{{ $meta_description }}" name="meta_description"
                                    type="text" class="form-control" required>
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="sevice_icon" class="form-label">Service Icon </label>
                                <input id="service_icon" value="{{ $service_icon }}" name="service_icon" type="text"
                                    class="form-control" required>
                                @error('service_icon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="service_type" class="form-label">Service Type</label>
                                <input id="service_type" value="{{ $service_type }}" name="service_type" type="text"
                                    class="form-control" required>
                                @error('service_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="service_image" class="form-label">Service Image</label>
                                <input id="service_image" name="service_image" type="file" class="form-control"
                                    {{ $image_required }}>
                                @error('service_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="service_shortdesc" class="form-label">Service Short Description</label>
                                <textarea id="service_shortdesc" name="service_shortdesc" class="form-control" required>{{ $service_shortdesc }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="service_desc" class="form-label">Service Description</label>
                                <textarea id="service_desc" name="service_desc" class="form-control" required>{{ $service_desc }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="post_by" class="form-label">Posted By</label>
                                <textarea id="post_by" name="post_by" class="form-control" required>{{ $post_by }}</textarea>
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}" />
                            <button type="submit" class="submit-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('service_shortdesc');
        CKEDITOR.replace('service_desc');
    </script>
    <script>
        function convertToSlug(text) {
            return text
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '') // Remove non-word characters
                .replace(/[\s_-]+/g, '-') // Replace spaces and underscores with -
                .replace(/^-+|-+$/g, ''); // Remove leading/trailing hyphens
        }

        document.addEventListener("DOMContentLoaded", function() {
            const metaTitleInput = document.getElementById('meta_title');
            const slugInput = document.getElementById('service_slug');

            metaTitleInput.addEventListener('input', function() {
                const slug = convertToSlug(this.value);
                slugInput.value = slug;
            });
        });
    </script>

@endsection
