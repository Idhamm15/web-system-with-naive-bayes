@extends('layout.app')

@section('title', 'Hasil Skrining Penyakit')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Hasil Skrining Penyakit</h2>
            <hr>
            <p>
                Berdasarkan hasil skrining yang telah di isi sebelumnya, anda atas nama {{ $name_patient }} mendapatkan <br> hasil prediksi penyakit : {{ $predictedClass }}
            </p>
            <div class="button-container">
                <a href="{{ url('/skrining-penyakit') }}" type="reset" class="btn btn-secondary">Kembali</a>
                {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
            </div>
        </div>
        {{-- <style>
            .button-container {
                display: flex;
                justify-content: space-between;
            }
        </style> --}}
    </section>



@endsection