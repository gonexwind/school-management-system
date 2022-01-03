@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Change {{ Auth::user()->name }}'s Password</h2>
                    </header>
                    <div class="card-body">
                        <form action="{{ url('/profile/password') }}" method="post" class="es-form es-add-form">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="">Current Password</label>
                                    <input name="current_password" type="password" required>
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="">New Password</label>
                                    <input name="password" type="password" required>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
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