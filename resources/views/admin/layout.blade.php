<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>

    <!-- My CSS -->
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    <title>Astro Saloni Admin</title>

    <style>
        /* Style the form to look like a regular list item */
        .logout-form {
            display: contents;
            /* Makes the form inherit the li styles */
        }

        /* Style the button to look like the settings link */
        .logout-btn {
            background: none;
            border: none;
            padding: 0;
            color: inherit;
            cursor: pointer;
            width: 100%;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0.5rem 1rem;
        }

        /* Hover effects to match your theme */
        .logout-btn:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile  bx-lg'></i>
            <span class="text">Astro Saloni</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="{{ route('admin.dashboard') }}">
                    <i class='bx bxs-dashboard bx-sm'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.category') }}">
                    <i class='bx bxs-shopping-bag-alt bx-sm'></i>
                    <span class="text">Category</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.blog') }}">
                    <i class='bx bxs-doughnut-chart bx-sm'></i>
                    <span class="text">Blog</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.service') }}">
                    <i class='bx bxs-message-dots bx-sm'></i>
                    <span class="text">Services</span>
                </a>
            </li>

        </ul>
        <ul class="side-menu bottom">
            <li>
                <a href="#">
                    <i class='bx bxs-cog bx-sm bx-spin-hover'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>

                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class='bx bx-power-off bx-sm bx-burst-hover'></i>
                        <span class="text">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu bx-sm'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" class="checkbox" id="switch-mode" hidden />
            <label class="swith-lm" for="switch-mode">
                <i class="bx bxs-moon"></i>
                <i class="bx bx-sun"></i>
                <div class="ball"></div>
            </label>

            <!-- Notification Bell -->
            <a href="#" class="notification" id="notificationIcon">
                <i class='bx bxs-bell bx-tada-hover'></i>
                {{-- <span class="num"></span> --}}
            </a>
            <div class="notification-menu" id="notificationMenu">
                <ul>
                    <li>New message from John</li>
                    <li>Your order has been shipped</li>
                    <li>New comment on your post</li>
                    <li>Update available for your app</li>
                    <li>Reminder: Meeting at 3PM</li>
                </ul>
            </div>

            <!-- Profile Menu -->
            <a href="#" class="profile" id="profileIcon">
                <img src="https://placehold.co/600x400/png" alt="Profile">
            </a>
            <div class="profile-menu" id="profileMenu">
                <ul>
                    <li><a href="#">My Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR -->

        @section('container')@show

        <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
