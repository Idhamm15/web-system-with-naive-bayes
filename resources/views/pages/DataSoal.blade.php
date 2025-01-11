@extends('layout.app')

@section('title', 'Data Soal')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Data Soal</h2>
            <hr>
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Import Data Excel</label>
                  <input type="file" class="form-control" id="file_excel" aria-describedby="emailHelp">
                  <div id="file_excel" class="form-text">Masukan Data latih.</div>
                </div>
                <button type="submit" class="btn btn-primary">Upload Data</button>
                <button type="submit" class="btn btn-primary">Hapus</button>
            </form>
            <p>Jumlah Data</p>
            <p>Data Kosong...</p>
        </div>
    </section>
@endsection