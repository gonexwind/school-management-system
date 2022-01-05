@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Edit Exam Type</h2>
                    </header>
                    <div class="card-body">
                        <form action="{{ route('exam-type.update', $data->id) }}" method="post" class="es-form es-add-form">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="">Name</label>
                                    <input name="name" type="text" required value="{{ $data->name }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <button type="submit"
                                            class="btn btn-danger btn-block bg-gradient border-0 text-white">
                                        Update
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