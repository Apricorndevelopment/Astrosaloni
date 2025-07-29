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

        /* Add Category Button */
        .add-btn {
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

        .add-btn:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
            color: white;
        }

        /* Table Styles */
        .category-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        }

        .category-table thead th {
            background-color: #6e48aa;
            color: white;
            padding: 1rem;
            font-weight: 500;
            text-align: left;
        }

        .category-table tbody td {
            padding: 1rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .category-table tbody tr:last-child td {
            border-bottom: none;
        }

        .category-table tbody tr:hover {
            background-color: rgba(110, 72, 170, 0.05);
        }

        /* Action Buttons */
        .action-btn {
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s ease;
            border: none;
            margin-right: 0.5rem;
        }

        .edit-btn {
            background-color: #28a745;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        .active-btn {
            background-color: #007bff;
            color: white;
        }

        .deactive-btn {
            background-color: #ffc107;
            color: #212529;
        }

        .action-btn:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 2rem;
            color: #6c757d;
            font-style: italic;
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

            .category-table {
                display: block;
                overflow-x: auto;
            }

            .category-table thead {
                display: none;
            }

            .category-table tbody tr {
                display: block;
                margin-bottom: 1rem;
                border: 1px solid #eee;
                border-radius: 8px;
            }

            .category-table tbody td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border: none;
                border-bottom: 1px solid #eee;
            }

            .category-table tbody td::before {
                content: attr(data-label);
                font-weight: 600;
                color: #6e48aa;
                margin-right: 1rem;
            }

            .category-table tbody td:last-child {
                border-bottom: none;
                justify-content: flex-start;
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .action-btn {
                margin-right: 0;
                margin-bottom: 0.5rem;
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
                <h1 class="page-title">Categories</h1>
                <a href="{{ url('admin/manage_category') }}" class="add-btn">
                    <i class="fas fa-plus"></i> Add Category
                </a>
            </div>

            <div class="table-responsive">
                <table class="category-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $list)
                            <tr>
                                <td data-label="ID">{{ $list->id }}</td>
                                <td data-label="Category Name">{{ $list->category_name }}</td>
                                <td data-label="Category Slug">{{ $list->category_slug }}</td>
                                <td data-label="Actions">
                                    <a href="{{ url('admin/category/manage_category/') }}/{{ $list->id }}"
                                        class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="{{ url('admin/category/delete/') }}/{{ $list->id }}"
                                        class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    @if ($list->status == 1)
                                        <a href="{{ url('admin/category/status/0') }}/{{ $list->id }}"
                                            class="action-btn active-btn">
                                            <i class="fas fa-check-circle"></i> Active
                                        </a>
                                    @elseif($list->status == 0)
                                        <a href="{{ url('admin/category/status/1') }}/{{ $list->id }}"
                                            class="action-btn deactive-btn">
                                            <i class="fas fa-times-circle"></i> Deactive
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="empty-state">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Font Awesome for icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

@endsection
