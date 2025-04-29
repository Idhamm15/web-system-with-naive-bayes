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
            <form method="POST" action="{{ route('disesase_screening.save_screening') }}">
                @csrf
            
                @foreach($dataTesting as $key => $value)
                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                @endforeach
                <input type="hidden" name="fullname" value="{{ $name_patient }}">
                <input type="hidden" name="hasil_prediksi" value="{{ $predictedClass }}">
            
                <div class="d-flex justify-content-between align-items-center" style="height: 60px; position: relative;">
                    {{-- Kiri (Kembali) --}}
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                    </div>
            
                    {{-- Tengah (Simpan) --}}
                    <div style="position: absolute; left: 50%; transform: translateX(-50%);">
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
            
                    {{-- Kanan (Hasil Prediksi) --}}
                    <div>
                        <a href="{{ url('/prediksi-penyakit') }}" class="btn btn-primary">Hasil Prediksi</a>
                    </div>
                </div>
            </form>
            
        </div>
        {{-- <style>
            .button-container {
                display: flex;
                justify-content: space-between;
            }
        </style> --}}
    </section>



@endsection