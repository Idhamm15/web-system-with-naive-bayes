@extends('layout.app')

@section('title', 'Hasil Skrining Penyakit')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Hasil Skrining Penyakit</h2>
            <hr>
            <p>
                Berdasarkan hasil skrining yang telah di isi sebelumnya, anda atas nama Budi mendapatkan <br> hasil prediksi penyakit : Ispa
            </p>
            <div class="button-container">
                <button type="reset" class="btn btn-secondary">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <style>
            .button-container {
                display: flex;
                justify-content: space-between; /* Membuat tombol di kiri dan kanan */
            }
        </style>
    </section>



@endsection