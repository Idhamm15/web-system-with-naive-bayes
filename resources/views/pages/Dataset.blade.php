@extends('layout.app')

@section('title', 'Dataset')

@section('content')
    <section class="form-dataset">
        <div class="container">
            <h2>Dataset</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Probabilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($finalProbabilities as $class => $probability)
                            <tr>
                                <td>{{ $class }}</td>
                                <td>{{ number_format($probability, 4) }}</td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
            <div class="button-container">
                <button type="reset" class="btn btn-secondary">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
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