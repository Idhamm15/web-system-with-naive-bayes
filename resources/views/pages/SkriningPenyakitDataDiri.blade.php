@extends('layout.app')

@section('title', 'Skrining Penyakit')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Data Diri</h2>
            <hr>
            <form>
                <!-- Input Nama Lengkap -->
                <div class="mb-3">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap">
                </div>
                
                <!-- Input Usia -->
                <div class="mb-3">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan usia">
                </div>
                
                <!-- Dropdown Jenis Kelamin -->
                <div class="mb-3">
                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenisKelamin" name="jenisKelamin">
                        <option value="" disabled selected>Pilih jenis kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                
                <div class="button-container">
                    {{-- <button type="reset" class="btn btn-secondary">Sebelumnya</button> --}}
                    {{-- <button type="submit" class="btn btn-primary">Proses</button> --}}
                    <a href="{{ url('/soal-skrining-penyakit') }}" class="btn btn-primary">Selanjutnya</a>
                </div>
            </form>
        </div>
    </section>

    <style>
        .button-container {
            display: flex;
            justify-content: space-between; /* Membuat tombol di kiri dan kanan */
        }
    </style>



@endsection