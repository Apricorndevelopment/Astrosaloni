@extends('admin/layout')
@section('page_title', 'Manage_service')
@section('container')

    <style>
        /* Main Container */
        .content-wrapper {
            padding: 2rem;
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin: 1rem;
        }

        /* Header Section */
        .top-header {
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
            font-size: 1.5rem;
            font-weight: 600;
            color: #2c3e50;
            margin: 0;
        }

        /* Search and Add Service Section */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .search-input {
            width: 250px;
            padding: 0.5rem 1rem;
            border: 1px solid #ced4da;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: #6e48aa;
            box-shadow: 0 0 0 0.2rem rgba(110, 72, 170, 0.25);
            outline: none;
        }

        .add-service-btn {
            background-color: #6e48aa;
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .add-service-btn:hover {
            background-color: #9d50bb;
            transform: translateY(-2px);
            color: white;
        }

        /* Table Styles */
        .service-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .service-table thead th {
            background-color: #6e48aa;
            color: white;
            padding: 1rem;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 0.5px;
            border: none;
        }

        .service-table tbody td {
            padding: 1rem;
            vertical-align: middle;
            border-bottom: 1px solid #f0f0f0;
        }

        .service-table tbody tr:last-child td {
            border-bottom: none;
        }

        .service-table tbody tr:hover {
            background-color: rgba(110, 72, 170, 0.05);
        }

        /* Image Thumbnail */
        .service-thumbnail {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }

        .service-thumbnail:hover {
            transform: scale(1.5);
            z-index: 10;
            position: relative;
        }

        /* Action Buttons */
        .action-btn {
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            border-radius: 4px;
            margin-right: 0.5rem;
            transition: all 0.2s ease;
        }

        .edit-btn {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
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

        /* Alert Notification */
        .alert {
            border-radius: 0.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            margin-bottom: 1.5rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .content-wrapper {
                padding: 1rem;
                margin: 0.5rem;
            }

            .top-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-actions {
                width: 100%;
                margin-top: 1rem;
            }

            .search-input {
                width: 100%;
            }

            .service-table thead {
                display: none;
            }

            .service-table tbody tr {
                display: block;
                margin-bottom: 1rem;
                border: 1px solid #eee;
                border-radius: 0.5rem;
            }

            .service-table tbody td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border: none;
                border-bottom: 1px solid #eee;
            }

            .service-table tbody td::before {
                content: attr(data-label);
                font-weight: 600;
                color: #6e48aa;
                margin-right: 1rem;
            }

            .service-table tbody td:last-child {
                border-bottom: none;
                justify-content: center;
            }
        }
    </style>

    <div class="content-wrapper">
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Header Section -->
        <div class="top-header">
            <h1 class="page-title">Services</h1>
            <div class="header-actions">
                <input type="text" id="searchInput" class="search-input" placeholder="Search services...">
                <a href="{{ route('sevice.manage_service') }}" class="add-service-btn">
                    <i class="fas fa-plus"></i> Add Service
                </a>
            </div>
        </div>

        <!-- Table Section -->
        <div class="table-responsive">
            <table class="service-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Service Title</th>
                        <th>Service Slug</th>
                        <th>Service Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="serviceTableBody">
                    @forelse ($data as $list)
                        <tr>
                            <td data-label="ID">{{ $list['id'] }}</td>
                            <td data-label="Service Name">{{ $list['service_name'] }}</td>
                            <td data-label="Service Slug">{{ $list['service_slug'] }}</td>
                            <td data-label="Service Image">
                                @if ($list['service_image'])
                                    <img src="{{ asset($list['service_image']) }}" class="service-thumbnail">
                                @endif
                            </td>
                            <td data-label="Actions">
                                <a href="{{ url('admin/manage_service/' . $list['id']) }}" class="action-btn edit-btn">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="{{ url('admin/service/delete/' . $list['id']) }}"
                                    onclick="return confirm('Are you sure?')" class="action-btn delete-btn">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="empty-state">No services found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <script>
        // Search Function
        $('#searchInput').on('keyup', function() {
            const value = $(this).val().toLowerCase();
            $('#serviceTableBody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    </script>

@endsection
