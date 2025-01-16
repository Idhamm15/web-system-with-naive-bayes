<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_trainings')->insert([
            // 1
            ['usia' => 'A', 'jenis_kelamin' => 'A', 'tussis' => 'A', 'febris' => 'A', 'selesma' => 'A', 'gastreonteritis' => 'B', 'colic_abdomen' => 'B', 'polyuria' => 'B', 'polydipsia' => 'B', 'weakness' => 'A', 'keterangan' => 'ISPA'], 
            ['usia' => 'B', 'jenis_kelamin' => 'A', 'tussis' => 'A', 'febris' => 'A', 'selesma' => 'A', 'gastreonteritis' => 'B', 'colic_abdomen' => 'B', 'polyuria' => 'B', 'polydipsia' => 'B', 'weakness' => 'A', 'keterangan' => 'ISPA'],
            ['usia' => 'C', 'jenis_kelamin' => 'B', 'tussis' => 'B', 'febris' => 'A', 'selesma' => 'B', 'gastreonteritis' => 'A', 'colic_abdomen' => 'A', 'polyuria' => 'B', 'polydipsia' => 'B', 'weakness' => 'A', 'keterangan' => 'DIARE'],
            ['usia' => 'C', 'jenis_kelamin' => 'B', 'tussis' => 'B', 'febris' => 'A', 'selesma' => 'B', 'gastreonteritis' => 'A', 'colic_abdomen' => 'A', 'polyuria' => 'B', 'polydipsia' => 'B', 'weakness' => 'A', 'keterangan' => 'DIARE'],
            ['usia' => 'B', 'jenis_kelamin' => 'A', 'tussis' => 'A', 'febris' => 'A', 'selesma' => 'A', 'gastreonteritis' => 'B', 'colic_abdomen' => 'B', 'polyuria' => 'B', 'polydipsia' => 'B', 'weakness' => 'A', 'keterangan' => 'ISPA'],

            // 2
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'D', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],

            // 3
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],

            // 4
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'A', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            
            // 5
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],

            // 6
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],

            // 7
            ['usia'=> 'C', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],

            // 8
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'A', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],

            // 9
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'A', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'A', 'selesma'=> 'B', 'gastreonteritis'=> 'A', 'colic_abdomen'=> 'A', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'DIARE'],
            ['usia'=> 'D', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],

            // 10
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
            ['usia'=> 'B', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'D', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],
            ['usia'=> 'C', 'jenis_kelamin'=> 'A', 'tussis'=> 'B', 'febris'=> 'B', 'selesma'=> 'B', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'A', 'polydipsia'=> 'A', 'weakness'=> 'A', 'keterangan'=> 'DM TYPE II'],

            ['usia'=> 'A', 'jenis_kelamin'=> 'B', 'tussis'=> 'A', 'febris'=> 'A', 'selesma'=> 'A', 'gastreonteritis'=> 'B', 'colic_abdomen'=> 'B', 'polyuria'=> 'B', 'polydipsia'=> 'B', 'weakness'=> 'A', 'keterangan'=> 'ISPA'],
        



        ]);
    }
}
