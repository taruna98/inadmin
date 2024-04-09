@extends('layout.admin_app')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Kretech Card -->
                    <div class="col-12 col-md-6">
                        <div class="card info-card sales-card">
                            <a href="{{ route('kretech.dashboard') }}">
                                <div class="card-body">
                                    <h5 class="card-title">Kretech ID</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-kanban"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>CMS</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div><!-- End Kretech Card -->

                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
            </div><!-- End Right side columns -->

        </div>
    </section>
@endsection
