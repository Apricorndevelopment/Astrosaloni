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

        /* FAQ Item Container */
        .faq-container {
            margin-bottom: 30px;
        }

        /* Add More Button */
        .add-more-btn {
            margin-top: 10px;
        }

        /* Remove Button */
        .remove-btn {
            margin-top: 10px;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .remove-btn:hover {
            background-color: #c82333;
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

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <div class="top-header">
                    <h1 class="h3">Manage FAQ</h1>
                    <a href="{{ url('admin/faq') }}" class="btn btn-success">Back</a>
                </div>

                <form action="{{ route('faq.manage_faq_process') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div id="faq-items-container">
                                <!-- Initial FAQ Item -->
                                <div class="faq-container">
                                    <div class="form-group mb-3">
                                        <label for="question" class="form-label">Question</label>
                                        <input id="question" value="{{ $question }}" name="faq[0][question]"
                                            type="text" class="form-control" required>
                                        @error('faq.0.question')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="answer" class="form-label">Answer</label>
                                        <textarea id="answer" name="faq[0][answer]" class="form-control" required>{{ $answer }}</textarea>
                                        @error('faq.0.answer')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="blog_id" class="form-label">Blog</label>
                                        <select id="blog_id" name="faq[0][blog_id]" class="form-control" required>
                                            <option value="">Select Blog</option>
                                            @foreach ($blogs as $blog)
                                                <option value="{{ $blog->id }}"
                                                    {{ $blog_id == $blog->id ? 'selected' : '' }}>
                                                    {{ $blog->blog_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('faq.0.blog_id')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Add More FAQ Button -->
                            <button type="button" id="add-more-faq" class="btn btn-secondary add-more-btn">
                                <i class="fas fa-plus"></i> Add More FAQ
                            </button>

                            <input type="hidden" name="id" value="{{ $id }}" />
                            <button type="submit" class="btn btn-info w-100 mt-3">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add More FAQ functionality
            const faqContainer = document.getElementById('faq-items-container');
            const addMoreBtn = document.getElementById('add-more-faq');
            let faqCount = 1;

            addMoreBtn.addEventListener('click', function() {
                const newFaqItem = document.createElement('div');
                newFaqItem.className = 'faq-container mt-4 border-top pt-3';
                newFaqItem.innerHTML = `
                    <div class="form-group mb-3">
                        <label class="form-label">Question</label>
                        <input name="faq[${faqCount}][question]" type="text" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Answer</label>
                        <textarea name="faq[${faqCount}][answer]" class="form-control" required></textarea>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Blog</label>
                        <select name="faq[${faqCount}][blog_id]" class="form-control" required>
                            <option value="">Select Blog</option>
                            @foreach ($blogs as $blog)
                                <option value="{{ $blog->id }}">{{ $blog->blog_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="button" class="btn btn-danger remove-btn" onclick="this.parentNode.remove()">
                        <i class="fas fa-trash"></i> Remove
                    </button>
                `;

                faqContainer.appendChild(newFaqItem);
                faqCount++;
            });
        });
    </script>
@endsection
