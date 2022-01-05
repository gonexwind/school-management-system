@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <!-- breadcumb-area -->
            <section class="breadcumb-area card bg-gradient mb-5">
                <div class="bread-cumb-content card-body d-flex align-items-center">
                    <div class="breadcumb-heading">
                        <h2 class="text-white">Add Assign Subject</h2>
                    </div>
                    <div class="breadcumb-image ml-auto">
                        <img src="{{asset('assets/img/breadcumb-manage-attendances.png')}}" alt="">
                    </div>
                </div>
            </section>
            <!-- End breadcumb-area -->

            <section class="es-form-area">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('assign-subject.store') }}" method="post" class="es-form">
                            @csrf
                            <div class="add_item">
                                <div class="row col mb-4">
                                    <label for="role">Class Name</label>
                                    <select name="class_id" id="role" class="es-add-select">
                                        <option value="" selected="" disabled class="form-control">
                                            Select Class
                                        </option>
                                        @foreach($classes as $key => $data)
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row align-items-center">
                                    <div class="col">
                                        <label>Student Subject</label>
                                        <select name="subject_id[]" class="es-add-select">
                                            <option value="" selected="" disabled class="form-control">
                                                Select Subject
                                            </option>
                                            @foreach($subjects as $key => $data)
                                                <option value="{{ $data->id }}" class="form-control">
                                                    {{ $data->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('subject_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label>Full Mark</label>
                                        <input name="full_mark[]" type="number" required>
                                    </div>
                                    <div class="col">
                                        <label>Pass Mark</label>
                                        <input name="pass_mark[]" type="number" required>
                                    </div>
                                    <div class="col">
                                        <label>Subjective Mark</label>
                                        <input name="subjective_mark[]" type="number" required>
                                    </div>
                                    <div class="col">
                                        <span style="width:60px;" class="es-form-btn btn btn-success addeventmore">
                                            <i class="fa fa-plus-circle"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-lg-4 text-center mt-4">
                                <button type="submit"
                                        style="height: 50px;"
                                        class="btn btn-danger btn-block bg-gradient border-0 text-white">Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div style="visibility: hidden;">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                <div class="form-row">
                    <div class="row align-items-center mt-4">
                        <div class="col">
                            <label>Student Subject</label>
                            <select name="subject_id[]" class="es-add-select">
                                <option value="" selected="" disabled class="form-control">
                                    Select Subject
                                </option>
                                @foreach($subjects as $key => $data)
                                    <option value="{{ $data->id }}" class="form-control">
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('subject_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Full Mark</label>
                            <input name="full_mark[]" type="number" required>
                        </div>
                        <div class="col">
                            <label>Pass Mark</label>
                            <input name="pass_mark[]" type="number" required>
                        </div>
                        <div class="col">
                            <label>Subjective Mark</label>
                            <input name="subjective_mark[]" type="number" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <span style="width:50px;" class="es-form-btn btn btn-success addeventmore">
                                    <i class="fa fa-plus-circle"></i>
                                </span>
                            </div>
                            <div class="col">
                                 <span style="width:50px;" class="es-form-btn btn btn-danger removeeventmore">
                                    <i class="fa fa-minus-circle"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click", ".addeventmore", function () {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", '.removeeventmore', function (event) {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter -= 1;
            });
        });
    </script>
@endsection