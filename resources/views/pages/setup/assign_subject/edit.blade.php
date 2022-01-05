@extends('layouts.default')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Edit Fee Amount Category</h2>
                    </header>
                    <div class="card-body">
                        <form action="{{ route('assign-subject.update', $assign_subjects[0]->class_id) }}"
                              method="post"
                              class="es-form es-add-form">
                            @csrf
                            @method('put')
                            <div class="add_item">
                                <div class="row col mb-4">
                                    <label for="role">Class Name</label>
                                    <select name="class_id" id="role" class="es-add-select">
                                        <option value="" selected="" disabled class="form-control">
                                            Select Class
                                        </option>
                                        @foreach($classes as $key => $data)
                                            <option value="{{ $data->id }}" {{ ($assign_subjects[0]->class_id == $data->id) ? "selected" : "" }}>
                                                {{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                @foreach($assign_subjects as $assign_subject)
                                    <div class="row align-items-center delete_whole_extra_item_add"
                                         id="delete_whole_extra_item_add">
                                        <div class="col">
                                            <label>Student Subject</label>
                                            <select name="subject_id[]" class="es-add-select">
                                                <option value="" selected="" disabled class="form-control">
                                                    Select Subject
                                                </option>
                                                @foreach($subjects as $key => $data)
                                                    <option value="{{ $data->id }}"
                                                            {{ ($assign_subjects[0]->subject_id == $data->id) ? "selected" : "" }} class="form-control">
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
                                            <input name="full_mark[]" type="number"
                                                   value="{{$assign_subject->full_mark}}"
                                                   required>
                                        </div>
                                        <div class="col">
                                            <label>Pass Mark</label>
                                            <input name="pass_mark[]" type="number"
                                                   value="{{$assign_subject->pass_mark}}"
                                                   required>
                                        </div>
                                        <div class="col">
                                            <label>Subjective Mark</label>
                                            <input name="subjective_mark[]" type="number"
                                                   value="{{$assign_subject->subjective_mark}}" required>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <span style="width:50px;"
                                                      class="es-form-btn btn btn-success addeventmore">
                                                    <i class="fa fa-plus-circle"></i>
                                                </span>
                                            </div>
                                            <div class="col">
                                                 <span style="width:50px;"
                                                       class="es-form-btn btn btn-danger removeeventmore">
                                                    <i class="fa fa-minus-circle"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row col-lg-4 text-center mt-4">
                                <button type="submit"
                                        style="height: 50px;"
                                        class="btn btn-danger btn-block bg-gradient border-0 text-white">
                                    Update
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
                                    <option value="{{ $data->id }}"
                                            {{ ($assign_subjects[0]->subject_id == $data->id) ? "selected" : "" }} class="form-control">
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
                            <input name="full_mark[]" type="number"
                                   value="{{$assign_subject->full_mark}}"
                                   required>
                        </div>
                        <div class="col">
                            <label>Pass Mark</label>
                            <input name="pass_mark[]" type="number"
                                   value="{{$assign_subject->pass_mark}}"
                                   required>
                        </div>
                        <div class="col">
                            <label>Subjective Mark</label>
                            <input name="subjective_mark[]" type="number"
                                   value="{{$assign_subject->subjective_mark}}" required>
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
    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click", '.removeeventmore', function () {
                $(this).closest(".delete_whole_extra_item_add").remove();
                counter--;
            });
            $(document).on("click", ".addeventmore", function () {
                var whole_extra_item_add = $('#whole_extra_item_add').html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
        });
    </script>
@endsection