<?php

namespace App\Http\Controllers;

use App\Imports\DatasetImport;
use App\Models\DataTraining;
use Illuminate\Http\Request;
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
}
