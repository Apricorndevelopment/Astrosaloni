@extends('admin.layout')
@section('page_title', 'Astro Saloni')
@section('container')

    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="https://codepen.io/saglik216/pen/LEVjwBV" class="btn-download" target="_blink">
                <i class='bx bxs-cloud-download bx-fade-down-hover'></i>
                <span class="text">V2.5 Released</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>{{ $categoryCount }}</h3>
                    <p>Category</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>{{ $blogCount }}</h3>
                    <p>Blog</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
                    <h3>{{ $serviceCount }}</h3>
                    <p>Service</p>
                </span>
            </li>
        </ul>



    </main>
    <!-- MAIN -->
    </section>
    <!-- CONTENT -->

@endsection
