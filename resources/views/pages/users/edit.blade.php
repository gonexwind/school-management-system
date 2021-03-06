@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Edit User</h2>
                    </header>
                    <div class="card-body">
                        <form action="{{ route('users.update', [$user->id]) }}" method="post" class="es-form es-add-form">
                            @csrf
                            @method('patch')
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Name</label>
                                    <input name="name" type="text" placeholder="Name" value="{{ $user->name }}">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Email</label>
                                    <input name="email" type="email" placeholder="Email" value="{{ $user->email }}">
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="es-add-select">
                                        <option data-display="{{ $user->role }}">{{ $user->role }}</option>
                                        <option value="admin">Admin</option>
                                        <option value="employee">Employee</option>
                                        <option value="student">Student</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <button type="submit"
                                            class="btn btn-danger btn-block bg-gradient border-0 text-white">Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection