<?php

namespace App\Http\Controllers\Setup;

use App\Http\Controllers\Controller;
use App\Models\FeeCategory;
use Illuminate\Http\Request;
use Redirect;

class FeeCategoryController extends Controller
{
    public function index()
    {
        $fees = FeeCategory::all();
        return view('pages.setup.fee_category.index', compact('fees'));
    }

    public function create()
    {
        return view('pages.setup.fee_category.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:fee_categories']);
        FeeCategory::insert(['name' => $request->name]);
        return Redirect::route('fee-category.index')->with([
            'message' => 'success inserted data',
            'alert-type' => 'success',
        ]);
    }

    public function edit($id)
    {
        $data = FeeCategory::find($id);
        return view('pages.setup.fee_category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|unique:fee_categories']);
        $data = FeeCategory::find($id);
        $data->name = $request->name;
        $data->save();
        return Redirect::route('fee-category.index')->with([
            'message' => 'success updated data',
            'alert-type' => 'success',
        ]);
    }

    public function destroy($id)
    {
        FeeCategory::find($id)->delete();
        return Redirect::route('fee-category.index')->with([
            'message' => 'success deleted data',
            'alert-type' => 'success',
        ]);
    }
}