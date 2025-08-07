@extends('admin/layout')
@section('page_title', 'Manage_blog')
@section('container')

    <style>
        /* General Styles */
        .content-wrapper {
            padding: 20px;
            background-color: #f8f9fa;
            min-height: calc(100vh - 60px);
        }

        /* Alert Notification */
        .alert {
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        /* Header Section */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
        }

        /* Add New Blog Button */
        .add-new-btn {
            background-color: #6e48aa;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .add-new-btn:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
            color: white;
        }

        /* Search Box */
        .search-box {
            width: 300px;
            border-radius: 8px;
            padding: 10px 20px;
            border: 1px solid #ddd;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .search-box:focus {
            border-color: #6e48aa;
            outline: none;
            box-shadow: 0 0 0 2px rgba(110, 72, 170, 0.2);
        }

        /* Table Styles */
        .blog-table {
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border-collapse: collapse;
        }

        .blog-table th {
            background-color: #6e48aa;
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 500;
        }

        .blog-table td {
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .blog-table tr:last-child td {
            border-bottom: none;
        }

        .blog-table tr:hover {
            background-color: rgba(110, 72, 170, 0.05);
        }

        /* Image Thumbnail */
        .blog-image {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #eee;
        }

        /* Action Buttons */
        .action-btn {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 14px;
            margin-right: 8px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .edit-btn {
            background-color: #28a745;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        .action-btn:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 40px;
            color: #6c757d;
            font-style: italic;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .search-box {
                width: 100%;
            }

            .blog-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>

    <div class="content-wrapper">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <!-- Header Section -->
        <div class="page-header">
            <h1 class="page-title">Faq</h1>
            <a href="{{ route('faq.manage_faq') }}" class="add-new-btn">
                + Add Faq
            </a>
        </div>

        <!-- Search Box -->
        <input type="text" class="search-box" placeholder="Search..." id="searchInput">

        <!-- Table Section -->
        <table class="blog-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Qestion</th>
                    <th>Answer</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="faqTableBody">
                @forelse ($data as $list)
                    <tr>
                        <td>{{ $list['id'] }}</td> <!-- Changed from -> to [] -->
                        <td>{{ $list['question'] }}</td>
                        <td>{{ $list['answer'] }}</td>
                        <td>
                            <a href="{{ url('admin/manage_faq/' . $list['id']) }}" class="action-btn edit-btn">Edit</a>
                            <a href="{{ url('admin/faq/delete/' . $list['id']) }}" onclick="return confirm('Are you sure?')"
                                class="action-btn delete-btn">Delete</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="empty-state">No Faqs found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // Search Function
        $('#searchInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#faqTableBody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    </script>

@endsection
