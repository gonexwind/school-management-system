@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">Dashboard</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="{{ asset('assets/img/breadcumb-dashboard.png') }}" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->

            <!-- Deal Overview -->
            <div class="card mb-4">
                <!-- Card Header -->
                <header class="card-header text-center">
                    <h2 class="h3 card-header-title text-dark pt-2">Attendances of the year</h2>
                </header>
                <!-- End Card Header -->

                <!-- Card Body -->
                <div class="card-body">
                    <div class="row">
                        <!-- Chart -->
                        <div class="col-md-12 mb-4 mb-md-0" style="min-height: 300px;">
                            <canvas class="js-overall-income-chart" width="1000" height="300"></canvas>
                        </div>
                        <!-- End Chart -->
                    </div>
                </div>
                <!-- End Card Body -->
            </div>
            <!-- End Deal Overview -->

            <!-- highlight-area start -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-asset-counting-list-box bg-gradient bg-gradient-purple card border-0 text-center">
                        <div class="card-body">
                            <div class="single-asset-counting-list-image-wrap">
                                <img src="{{asset('assets/img/student.png')}}" alt="">
                            </div>
                            <h2 class="text-white mb-0">160 <small class="d-block mt-2">Students</small></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-asset-counting-list-box bg-gradient bg-gradient-blue card border-0 text-center">
                        <div class="card-body">
                            <div class="single-asset-counting-list-image-wrap">
                                <img src="{{asset('assets/img/teacher.png')}}" alt="">
                            </div>
                            <h2 class="text-white mb-0">15 <small class="d-block mt-2">Teachers</small></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-asset-counting-list-box bg-gradient bg-gradient-green card border-0 text-center">
                        <div class="card-body">
                            <div class="single-asset-counting-list-image-wrap">
                                <img src="{{asset('assets/img/parent.png')}}" alt="">
                            </div>
                            <h2 class="text-white mb-0">160 <small class="d-block mt-2">Parent</small></h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-asset-counting-list-box bg-gradient bg-gradient-yellow card border-0 text-center">
                        <div class="card-body">
                            <div class="single-asset-counting-list-image-wrap">
                                <img src="{{asset('assets/img/staff.png')}}" alt="">
                            </div>
                            <h2 class="text-white mb-0">10 <small class="d-block mt-2">Staff</small></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- highlight-area End -->
        </div>
    </div>
@endsection