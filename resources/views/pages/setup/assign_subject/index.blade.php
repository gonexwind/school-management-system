@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">Assign Subject List</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="{{asset('assets/img/breadcumb-students.png')}}" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->

            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <a href="{{ route('assign-subject.create') }}"
                           class="btn btn-sm btn-pill btn-outline-light ml-auto">+
                            Add New</a>
                    </header>
                    <div class="card-body">
                        <div class="attendances-list-wrap">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="bg-gradient">
                                    <tr>
                                        <th scope="col" class="text-white text-center">No.</th>
                                        <th scope="col" class="text-white text-center">Class Name</th>
                                        <th scope="col" class="text-white text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($assign_subjects as $key => $data)
                                        <tr>
                                            <td class="text-center">{{ $key+1 }}</td>
                                            <td class="text-center">{{ $data['student_class']['name'] }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('assign-subject.show', $data->class_id) }}"
                                                   class="btn btn-outline-danger es-am-btn">
                                                    Detail
                                                </a>
                                                <a href="{{ route('assign-subject.edit', $data->class_id) }}"
                                                   class="btn btn-outline-danger es-am-btn">
                                                    Edit
                                                </a>
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