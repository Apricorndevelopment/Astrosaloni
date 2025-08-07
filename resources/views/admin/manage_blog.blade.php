@extends('admin/layout')
@section('page_title', 'Manage_Blog')
@section('container')

    <style>
        /* General Styles */
        .container-fluid {
            padding: 20px;
            background-color: #f8f9fa;
            min-height: calc(100vh - 60px);
        }

        /* Header Styles */
        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding: 15px 0;
        }

        .top-header h1 {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin: 0;
        }

        /* Form Card */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .card-body {
            padding: 30px;
        }

        /* Form Elements */
        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #495057;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ced4da;
            border-radius: 6px;
            font-size: 15px;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: #6e48aa;
            box-shadow: 0 0 0 0.2rem rgba(110, 72, 170, 0.25);
            outline: none;
        }

        /* Buttons */
        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .btn-info {
            background-color: #6e48aa;
            border-color: #6e48aa;
        }

        .btn-info:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
        }

        /* Error Messages */
        .text-danger {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
        }

        /* CKEditor Styling */
        .ck-editor__editable {
            min-height: 200px;
            border-radius: 6px !important;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .top-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .card-body {
                padding: 20px;
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
                    <h1 class="h3">Manage Blog</h1>
                    <a href="{{ url('admin/blog') }}" class="btn btn-success">Back</a>
                </div>

                <form action="{{ route('blog.manage_blog_process') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="blog_name" class="form-label">Blog Title</label>
                                <input id="blog_name" value="{{ $blog_name }}" name="blog_name" type="text"
                                    class="form-control" required>
                                @error('blog_name')
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
                                <label for="blog_slug" class="form-label">Blog Slug</label>
                                <input id="blog_slug" value="{{ $blog_slug }}" name="blog_slug" type="text"
                                    class="form-control" required>
                                @error('blog_slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            <div class="form-group mb-3">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <input id="meta_description" value="{{ $meta_description }}" name="meta_description"
                                    type="text" class="form-control" required>
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-3">
                                <label for="blog_type" class="form-label">Blog Type</label>
                                <input id="blog_type" value="{{ $blog_type }}" name="blog_type" type="text"
                                    class="form-control" required>
                                @error('blog_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="keywords" class="form-label">Keywords</label>
                                <input id="keywords" value="{{ $keywords }}" name="keywords" type="text"
                                    class="form-control" required>
                                @error('keywords')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="schema" class="form-label">Schema</label>
                                <input id="schema" value="{{ $schema }}" name="schema" type="text"
                                    class="form-control" required>
                                @error('keywords')
                                    <div class="text-danger">{{ $schema }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="geo_placename" class="form-label">Geo Placename</label>
                                <input id="geo_placename" value="{{ $geo_placename }}" name="geo_placename" type="text"
                                    class="form-control" required>
                                @error('geo_placename')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="geo_position" class="form-label">Geo Position</label>
                                <input id="geo_position" value="{{ $geo_position }}" name="geo_position" type="text"
                                    class="form-control" required>
                                @error('geo_position')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="geo_region" class="form-label">Geo Region</label>
                                <input id="geo_region" value="{{ $geo_region }}" name="geo_region" type="text"
                                    class="form-control" required>
                                @error('geo_region')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="canonical" class="form-label">Canonical</label>
                                <input id="canonical" value="{{ $canonical }}" name="canonical" type="text"
                                    class="form-control" required>
                                @error('canonical')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="icbm" class="form-label">ICBM</label>
                                <input id="icbm" value="{{ $icbm }}" name="icbm" type="text"
                                    class="form-control" required>
                                @error('icbm')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- New Category Dropdown Field -->
                            <div class="form-group mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select id="category_id" name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ isset($category_id) && $category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_image" class="form-label">Blog Image</label>
                                <input id="blog_image" name="blog_image" type="file" class="form-control"
                                    {{ $image_required }}>
                                @error('blog_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_shortdesc" class="form-label">Blog Short Description</label>
                                <textarea id="blog_shortdesc" name="blog_shortdesc" class="form-control" required>{{ $blog_shortdesc }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_desc" class="form-label">Blog Description</label>
                                <textarea id="blog_desc" name="blog_desc" class="form-control" required>{{ $blog_desc }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="post_by" class="form-label">Posted By</label>
                                <textarea id="post_by" name="post_by" class="form-control" required>{{ $post_by }}</textarea>
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}" />
                            <button type="submit" class="btn btn-info w-100 mt-3">Submit</button>
                        </div>
                    </div>
                </form>

                {{-- <form action="{{ route('blog.manage_blog_process') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="blog_name" class="form-label">Blog Name</label>
                                <input id="blog_name" value="{{ $blog_name }}" name="blog_name" type="text"
                                    class="form-control" required>
                                @error('blog_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_slug" class="form-label">Blog Slug</label>
                                <input id="blog_slug" value="{{ $blog_slug }}" name="blog_slug" type="text"
                                    class="form-control" required>
                                @error('blog_slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_type" class="form-label">Blog Type</label>
                                <input id="blog_type" value="{{ $blog_type }}" name="blog_type" type="text"
                                    class="form-control" required>
                                @error('blog_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_image" class="form-label">Blog Image</label>
                                <input id="blog_image" name="blog_image" type="file" class="form-control"
                                    {{ $image_required }}>
                                @error('blog_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_shortdesc" class="form-label">Blog Short Description</label>
                                <textarea id="blog_shortdesc" name="blog_shortdesc" class="form-control" required>{{ $blog_shortdesc }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="blog_desc" class="form-label">Blog Description</label>
                                <textarea id="blog_desc" name="blog_desc" class="form-control" required>{{ $blog_desc }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="post_by" class="form-label">Posted By</label>
                                <textarea id="post_by" name="post_by" class="form-control" required>{{ $post_by }}</textarea>
                            </div>

                            <input type="hidden" name="id" value="{{ $id }}" />
                            <button type="submit" class="btn btn-info w-100 mt-3">Submit</button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('blog_shortdesc');
        CKEDITOR.replace('blog_desc');
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
            const slugInput = document.getElementById('blog_slug');

            metaTitleInput.addEventListener('input', function() {
                const slug = convertToSlug(this.value);
                slugInput.value = slug;
            });
        });
    </script>


@endsection
