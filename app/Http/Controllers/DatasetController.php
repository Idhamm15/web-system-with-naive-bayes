<?php

namespace App\Http\Controllers;

use App\Imports\DatasetImport;
use App\Models\DataTraining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class DatasetController extends Controller
{
    public function index ()
    {
        $data_training = DataTraining::all();
        return view(
            'pages.Dataset',
            get_defined_vars()
        );
    }

    public function add (Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv'
        ]);

        Excel::import(new DatasetImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data berhasil diimport!');
    }

    public function edit($id)
    {
        $data = DataTraining::findOrFail($id);
        return view('pages.EditDataset', compact('data'));
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:data_trainings,id',
            'fullname' => 'nullable',
            'usia' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'tussis' => 'nullable',
            'febris' => 'nullable',
            'selesma' => 'nullable',
            'gastreonteritis' => 'nullable',
            'colic_abdomen' => 'nullable',
            'polyuria' => 'nullable',
            'weakness' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = DataTraining::findOrFail($request->id);
        $data->update($request->only([
            'fullname',
            'usia',
            'jenis_kelamin',
            'tussis',
            'febris',
            'selesma',
            'gastreonteritis',
            'colic_abdomen',
            'polyuria',
            'polydipsia',
            'weakness',
            'keterangan',
        ]));

        return redirect()->route('dataset.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function delete($id)
    {
        $data = DataTraining::findOrFail($id);
        $data->delete();
    
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function delete_all()
    {
        DataTraining::truncate();
        return redirect()->back()->with('success', 'Seluruh data berhasil dihapus.');
    }
}
