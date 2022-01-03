@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">My Profile</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-dashboard.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->

            <section class="profile-area card">
                <div class="profile-content card-body d-flex">
                    <div class="user-image-wrap mr-5">
                        <img src="assets/img/profile-photo.png" alt="">
                    </div>
                    <div class="user-about">
                        <h2 class="text-danger">{{ Auth::user()->name }}</h2>
{{--                        <p><strong>(Mathematics & Accounting Teacher)</strong></p>--}}
{{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has--}}
{{--                            been the industry's</p>--}}
                        <p>Email: {{ Auth::user()->email }}</p>
                        <p>Gender: {{ Auth::user()->gender }}</p>
                        <p>Phone: +{{ Auth::user()->phone }}</p>
                        <p>Address: {{ Auth::user()->address }}</p>
                        <br>
                        <br>
                        <a href="{{ url('/profile/edit') }}" class="btn btn-outline-danger pl-4 pr-4">Edit</a>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection