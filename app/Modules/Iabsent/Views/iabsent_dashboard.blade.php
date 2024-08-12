@extends('layout.admin_app')
@section('content')
    <style>
        .list-user-app {
            height: 10rem;
            width: auto;
            overflow-y: auto;
            overflow-x: hidden;
        }

        .list-user-app .header-user {
            z-index: 1;
        }
    </style>

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home Iabsent</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Dashboard Admin -->
    @if (auth()->check() &&
            auth()->user()->hasAnyRole(['super admin', 'admin']))
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card info-card sales-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total <span>| User</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>{{ count($user_iabsent) }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter d-none">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| last six</span></h5>
                            <div class="activity">
                                <div class="activity-item d-flex">
                                    <div class="activite-label">
                                        {{ str_replace('ago', '', \Carbon\Carbon::parse('2024-08-02')->diffForHumans()) }}
                                    </div>
                                    <i
                                        class='bi bi-circle-fill activity-badge text-{{ 'Admin' == 'Admin' ? 'primary' : 'danger' }} align-self-start'></i>
                                    <div class="activity-content">
                                        {{ ucwords('babon gila') }}
                                        <br>
                                        <a class="text-decoration-none text-dark fw-bold">{{ 'Terlambat' }}</a>
                                        <br>
                                        {{ substr('2024-08-02', 0, 16) }}
                                    </div>
                                </div><!-- End activity item-->
                            </div>
                        </div>
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->

            </div>
        </section>
    @endif

    <!-- Dashboard Member -->
    @if (auth()->check() && auth()->user()->hasRole('iabsent member'))
        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Absent Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Absent</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-earmark-text"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>2</h6>
                                            <span class="text-muted small pt-2 ps-1">day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Absent Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Article</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-file-earmark-richtext"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>10</h6>
                                            <span class="text-muted small pt-2 ps-1">item</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| last two</span></h5>
                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">
                                        {{ str_replace('ago', '', \Carbon\Carbon::parse('2024-08-01')->diffForHumans()) }}
                                    </div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        {{ ucwords('gisel anastasia') }}
                                        <br>
                                        <a class="text-decoration-none text-dark fw-bold">{{ 'Terlambat' }}</a>
                                        <br>
                                        {{ substr('2024-08-01', 0, 16) }}
                                    </div>
                                </div><!-- End activity item-->

                            </div>
                        </div>
                    </div><!-- End Recent Activity -->

                </div><!-- End Right side columns -->

            </div>
        </section>
    @endif
@endsection
