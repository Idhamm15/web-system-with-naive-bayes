<?php

namespace App\Imports;

use App\Models\DataTraining;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DatasetImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new DataTraining([
            'fullname'        => $row['nama_lengkap'],
            'usia'            => $row['usia'],
            'jenis_kelamin'   => $row['jenis_kelamin'],
            'tussis'          => $row['tussis'],
            'febris'          => $row['febris'],
            'selesma'         => $row['selesma'],
            'gastreonteritis' => $row['gastreonteritis'],
            'colic_abdomen'   => $row['colic_abdomen'],
            'polyuria'        => $row['polyuria'],
            'polydipsia'      => $row['polydipsia'],
            'weakness'        => $row['weakness'],
            'keterangan'      => $row['keterangan'],
        ]);
    }
}
