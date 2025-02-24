<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiseaseScreeningController extends Controller
{
    public function index ()
    {
        return view('pages.SkriningPenyakit');
    }

    public function screening (Request $request)
    {
        // dd($request->all());
        // $dataTesting = $request->all();
        $dataTesting = $request->all();
        $name_patient = $request->fullname;

        // Probabilitas awal P(Ci)
        $classProbabilities = [
            'ISPA' => 0.34,
            'DIARE' => 0.32,
            'DM TYPE II' => 0.34
        ];

        // Probabilitas atribut (P(XK|Ci))
        $attributeProbabilities = [
            'usia' => [
                'A' => ['ISPA' => 0.4706, 'DIARE' => 0.5625, 'DM TYPE II' => 0.3529],
                'B' => ['ISPA' => 0.3529, 'DIARE' => 0.1875, 'DM TYPE II' => 0.1765],
                'C' => ['ISPA' => 0.1176, 'DIARE' => 0.25, 'DM TYPE II' => 0.3529],
                'D' => ['ISPA' => 0.0588, 'DIARE' => 0, 'DM TYPE II' => 0.1176],
            ],
            'jenis_kelamin' => [
                'A' => ['ISPA' => 0.5294, 'DIARE' => 0.5, 'DM TYPE II' => 0.6471],
                'B' => ['ISPA' => 0.4706, 'DIARE' => 0.5, 'DM TYPE II' => 0.3529],
            ],
            'tussis' => [
                'A' => ['ISPA' => 1, 'DIARE' => 0, 'DM TYPE II' => 0],
                'B' => ['ISPA' => 0, 'DIARE' => 1, 'DM TYPE II' => 1],
            ],
            'febris' => [
                'A' => ['ISPA' => 1, 'DIARE' => 1, 'DM TYPE II' => 0],
                'B' => ['ISPA' => 0, 'DIARE' => 0, 'DM TYPE II' => 1],
            ],
            'selesma' => [
                'A' => ['ISPA' => 1, 'DIARE' => 1, 'DM TYPE II' => 0],
                'B' => ['ISPA' => 0, 'DIARE' => 0, 'DM TYPE II' => 1],
            ],
            'gastreonteritis' => [
                'A' => ['ISPA' => 0, 'DIARE' => 1, 'DM TYPE II' => 0],
                'B' => ['ISPA' => 1, 'DIARE' => 0, 'DM TYPE II' => 1],
            ],
            'colic_abdomen' => [
                'A' => ['ISPA' => 0, 'DIARE' => 1, 'DM TYPE II' => 0],
                'B' => ['ISPA' => 1, 'DIARE' => 0, 'DM TYPE II' => 1],
            ],
            'polyuria' => [
                'A' => ['ISPA' => 0, 'DIARE' => 0, 'DM TYPE II' => 1],
                'B' => ['ISPA' => 1, 'DIARE' => 1, 'DM TYPE II' => 0],
            ],
            'polydipsia' => [
                'A' => ['ISPA' => 0, 'DIARE' => 0, 'DM TYPE II' => 1],
                'B' => ['ISPA' => 1, 'DIARE' => 1, 'DM TYPE II' => 0],
            ],
            'weakness' => [
                'A' => ['ISPA' => 1, 'DIARE' => 1, 'DM TYPE II' => 1],
                'B' => ['ISPA' => 0, 'DIARE' => 0, 'DM TYPE II' => 0],
            ],
        ];

        // Menghitung P(X|Ci)
        $classLikelihoods = [];
        foreach ($classProbabilities as $class => $probability) {
            $classLikelihoods[$class] = 1; // Start with 1 (multiplication identity)

            // Loop untuk menghitung likelihood
            foreach ($dataTesting as $attribute => $value) {
                if (isset($attributeProbabilities[$attribute][$value][$class])) {
                    // Kalikan dengan probabilitas atribut yang sesuai
                    $classLikelihoods[$class] *= $attributeProbabilities[$attribute][$value][$class];
                } else {
                    // Jika atribut tidak ditemukan, anggap probabilitasnya tidak berkontribusi
                    $classLikelihoods[$class] *= 1;
                }
            }
        }

        // Menghitung P(X|Ci) * P(Ci)
        $finalProbabilities = [];
        foreach ($classLikelihoods as $class => $likelihood) {
            $finalProbabilities[$class] = $likelihood * $classProbabilities[$class];
        }

        // Menentukan kelas prediksi
        $predictedClass = array_keys($finalProbabilities, max($finalProbabilities))[0];

        return view('pages.HasilSkriningPenyakit', get_defined_vars());
    }
}
