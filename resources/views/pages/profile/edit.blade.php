@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Edit {{ Auth::user()->name }}'s Profile</h2>
                    </header>
                    <div class="card-body">
                        <form action="{{ url('/profile/update/'. Auth::user()->id )}}" method="post" class="es-form es-add-form">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" value="{{ Auth::user()->email }}">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="gender">Gender</label>
                                    <input name="gender" type="text" value="{{ Auth::user()->gender }}">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="phone">Phone</label>
                                    <input name="phone" type="tel" value="{{ Auth::user()->phone }}">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="address">Address</label>
                                    <input name="address" value="{{ Auth::user()->address }}">
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <button type="submit" class="btn btn-danger btn-block bg-gradient border-0 text-white">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection