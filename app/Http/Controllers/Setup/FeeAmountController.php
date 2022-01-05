<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use App\Models\FeeCategoryAmount;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Redirect;

class FeeAmountController extends Controller
{
    public function index()
    {
        $all = FeeCategoryAmount::all();
        $fee_amounts = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        return view('pages.setup.fee_amount.index', compact('fee_amounts', 'all'));
    }

    public function create()
    {
        $data['fee_categories'] = FeeCategory::all();
        $data['student_classes'] = StudentClass::all();
        return view('pages.setup.fee_amount.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fee_category_id' => 'required',
            'class_id' => 'required',
        ]);
        $count = count($request->class_id);
        if ($count != null) {
            for ($i = 0; $i < $count; $i++) {
                $data = new FeeCategoryAmount();
                $data->fee_category_id = $request->fee_category_id;
                $data->class_id = $request->class_id[$i];
                $data->amount = $request->amount[$i];
                $data->save();
            }
        }
        return Redirect::route('fee-amount.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data['fee_amounts'] = FeeCategoryAmount::where('fee_category_id', $id)
            ->orderBy('class_id', 'asc')->get();
        $data['fee_categories'] = FeeCategory::all();
        $data['student_classes'] = StudentClass::all();
        return view('pages.setup.fee_amount.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fee_category_id' => 'required',
            'class_id' => 'required',
        ]);

        $count = count($request->class_id);
        FeeCategoryAmount::where('fee_category_id', $id)->delete();
        for ($i = 0; $i < $count; $i++) {
            $data = new FeeCategoryAmount();
            $data->fee_category_id = $request->fee_category_id;
            $data->class_id = $request->class_id[$i];
            $data->amount = $request->amount[$i];
            $data->save();
        }
        return Redirect::route('fee-amount.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function show($id)
    {
        $data['details'] = FeeCategoryAmount::where('fee_category_id', $id)->orderBy('class_id', 'asc')->get();
        return view('pages.setup.fee_amount.show', $data);
    }
}