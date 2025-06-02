@extends('layout.app')

@section('title', 'Edit Dataset')

@section('content')
    <div class="container mt-4">
        <h4>Edit Data Training</h4>
        <form id="mainForm" action="{{ route('dataset.update') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data->id }}">

            <div class="mb-3">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input type="text" name="fullname" id="fullname" class="form-control" value="{{ $data->fullname }}" required>
            </div>

            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <input type="hidden" id="usia_kategori" name="usia">
            <input type="hidden" id="usia_int" name="usia_int">

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="A" {{ $data->jenis_kelamin == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $data->jenis_kelamin == 'B' ? 'selected' : '' }}>B</option>
                </select>
            </div>

            @php
                $fields = [
                    'tussis', 'febris', 'selesma', 'gastreonteritis',
                    'colic_abdomen', 'polyuria', 'polydipsia', 'weakness'
                ];
            @endphp

            @foreach ($fields as $field)
            <div class="mb-3">
                <label for="{{ $field }}" class="form-label">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                <select name="{{ $field }}" id="{{ $field }}" class="form-control" required>
                    <option value="A" {{ $data->$field == 'A' ? 'selected' : '' }}>A</option>
                    <option value="B" {{ $data->$field == 'B' ? 'selected' : '' }}>B</option>
                </select>
            </div>
            @endforeach

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $data->keterangan }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('dataset.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('mainForm').addEventListener('submit', function (event) {
            let usiaInput = document.getElementById('usia');
            let usiaKategoriInput = document.getElementById('usia_kategori');
            let usiaIntInput = document.getElementById('usia_int');

            let usia = parseInt(usiaInput.value);
            let kategori = '';

            if (!isNaN(usia)) {
                if (usia <= 40) {
                    kategori = 'A';
                } else if (usia <= 50) {
                    kategori = 'B';
                } else if (usia <= 60) {
                    kategori = 'C';
                } else if (usia <= 70) {
                    kategori = 'D';
                } else {
                    alert('Usia tidak valid! masukkan angka 1-70');
                    event.preventDefault();
                    return;
                }

                // Set hidden inputs
                usiaKategoriInput.value = kategori;
                usiaIntInput.value = usia;
            } else {
                alert('Masukkan usia yang valid! masukkan angka 1-70');
                event.preventDefault();
                return;
            }
        });
    </script>

@endsection
