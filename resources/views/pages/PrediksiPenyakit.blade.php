@extends('layout.app')

@section('title', 'Data Latih')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Data Latih</h2>
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

    <h3>Hasil Klasifikasi</h3>

    <h4>Data Testing:</h4>
<ul>
    @foreach($dataTesting as $attribute => $value)
        <!-- Menambahkan pengecekan apakah $value adalah array, jika iya, tampilkan json_encode -->
        <li>{{ ucfirst($attribute) }}: {{ is_array($value) ? json_encode($value) : $value }}</li>
    @endforeach
</ul>

<h4>Probabilitas Awal P(Ci):</h4>
<ul>
    @foreach($classProbabilities as $class => $probability)
        <li>{{ $class }}: {{ $probability }}</li>
    @endforeach
</ul>

<h4>Probabilitas P(XK|Ci):</h4>
{{-- @foreach($attributeProbabilities as $attribute => $values)
    <p><strong>{{ ucfirst($attribute) }}:</strong></p>
    <ul>
        @foreach($values as $class => $probability)
            <li>{{ $class }}: {{ $probability }}</li>
        @endforeach
    </ul>
@endforeach --}}

<h4>Hasil Akhir (P(X|Ci) * P(Ci)):</h4>
<ul>
    @foreach($finalProbabilities as $class => $probability)
        <li>{{ $class }}: {{ $probability }}</li>
    @endforeach
</ul>

<h4>Kelas Prediksi:</h4>
<p><strong>{{ $predictedClass }}</strong></p>


@endsection