@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
        <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">All Users</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="assets/img/breadcumb-students.png" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-pill btn-outline-light ml-auto">+
                            Add New</a>
                    </header>
                    <div class="card-body">
                        <form action="#" class="es-form">
                            <div class="row align-items-center">
                                <div class="col">
                                    <label for="class">Class</label>
                                    <select id="class" class="">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="section">Section</label>
                                    <select id="section" class="">
                                        <option data-display="Select">Nothing</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <a href="" class="es-form-btn btn btn-block bg-gradient text-white">View</a>
                                </div>
                                <div class="col"></div>
                            </div>
                        </form>

                        <div class="attendances-list-wrap mt-5">
                            <div class="show-option d-flex align-items-center mb-4">
                                <div class="show-list-count">
                                    <p>show
                                        <select id="section" class="">
                                            <option data-display="10">10</option>
                                            <option value="1">20</option>
                                            <option value="2">30</option>
                                        </select>
                                        items
                                    </p>
                                </div>
                                <div class="search-student ml-auto">
                                    <form action="" class="search-student-form">
                                        <input type="text" placeholder="Student Name">
                                        <button class="btn btn-lg btn-pill bg-gradient text-white">Search</button>
                                    </form>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="bg-gradient">
                                    <tr>
                                        <th scope="col" class="text-white text-center">No.</th>
                                        <th scope="col" class="text-white text-center">Name</th>
                                        <th scope="col" class="text-white text-center">Role</th>
                                        <th scope="col" class="text-white text-center">Email</th>
                                        <th scope="col" class="text-white text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $user->name }}</td>
                                            <td class="text-center">{{ $user->role }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('users.destroy', [$user->id]) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('users.edit', [$user->id]) }}"
                                                       class="btn btn-outline-danger es-am-btn">
                                                        Edit
                                                    </a>
                                                    <button type="submit" id="delete"
                                                            class="btn btn-outline-danger es-am-btn">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="row">
                <div class="col-md-12 text-center">
                    <nav aria-label="Bootstrap Pagination" class="mt-5 text-center d-inline-block">
                        <ul class="pagination mb-0">
                            <li class="page-item">
                                <a class="btn btn-outline-danger prev" href="#"><span
                                            class="ml-1 d-none d-xl-inline-block">Previous</span></a>
                            </li>
                            <li class="page-item">
                                <a class="btn btn-danger bg-gradient text-white ml-4 mr-4" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="btn btn-outline-danger next" href="#"><span
                                            class="mr-1 d-none d-xl-inline-block">Next</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection