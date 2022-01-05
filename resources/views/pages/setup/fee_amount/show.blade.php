@extends('layouts.default')

@section('content')
    <div class="u-content">
        <div class="u-body">
            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Detail Fee Amount</h2>
                    </header>
                    <div class="card-body es-form es-add-form">
                        <div class="row col mb-4">
                            <label for="role">Fee Category</label>
                            <select name="fee_category_id" id="role" class="es-add-select">
                                <option value="" disabled class="form-control">
                                    Select Fee Category
                                </option>
                                @foreach($fee_categories as $data)
                                    <option
                                            value="{{ $data->id }}"
                                            {{ ($fee_amounts[0]->fee_category_id == $data->id) ? "selected" : "" }}>
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fee_category_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @foreach($fee_amounts as $fee_amount)
                            <div class="row align-items-center">
                                <div class="col">
                                    <label>Student Class</label>
                                    <select name="class_id[]" class="es-add-select">
                                        <option value="" disabled class="form-control">
                                            Select Student Class
                                        </option>
                                        @foreach($student_classes as $data)
                                            <option
                                                    value="{{ $data->id }}"
                                                    {{ ($fee_amount->class_id == $data->id) ? "selected" : "" }}
                                                    class="form-control">
                                                {{ $data->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('class_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label>Amount</label>
                                    <input name="amount[]" type="number"
                                           value="{{ $fee_amount->amount }}"
                                           required>
                                </div>
                            </div>
                        @endforeach
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
                            <label>Student Class</label>
                            <select name="class_id[]"
                                    style="
                                        width: 100%;
                                        border: 1px solid #FA5D4E;
                                        border-radius: 12px;
                                        color: #FA5D4E;
                                        font-size: 18px;
                                        padding-left: 20px;
                                        padding-right: 20px;
                                        height: 50px;
                                        line-height: 46px;
                                        padding-top: 0;
                                        padding-bottom: 0;">
                                <option value="" selected="" disabled>Select Category</option>
                                @foreach($student_classes as $data)
                                    <option
                                            value="{{ $data->id }}"
                                            {{ ($fee_amount->class_id == $data->id) ? "selected" : "" }}
                                            class="form-control">
                                        {{ $data->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('class_id')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Amount</label>
                            <input name="amount[]" type="number"
                                   value="{{ $fee_amount->amount }}"
                                   required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection