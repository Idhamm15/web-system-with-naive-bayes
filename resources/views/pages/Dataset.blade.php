@extends('layout.app')

@section('title', 'Dataset')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Data Latih</h2>
            <hr>
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif
            <form action="{{ route('dataset.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Import Data Excel</label>
                    <input type="file" class="form-control" id="file" name="file">
                    <p class="form-text">Masukan Data latih.</p>
                </div>
                <button type="submit" class="btn btn-primary">Upload Data</button>
                <button type="reset" class="btn btn-primary">Hapus</button>
            </form>
        </div>
    </section>
    <section class="form-dataset">
        <div class="container mt-4">
            <h2 class="text-center mb-4">Dataset</h2>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable">
                    <thead class="thead-light mb-4">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Lengkap</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tussis</th>
                            <th scope="col">Febris</th>
                            <th scope="col">Selesma</th>
                            <th scope="col">Gastreonteritis</th>
                            <th scope="col">Colic Abdomen</th>
                            <th scope="col">Polyuria</th>
                            <th scope="col">Polydipsia</th>
                            <th scope="col">Weakness</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_training as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->fullname ?? '-' }}</td>
                                <td>{{ $item->usia }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tussis }}</td>
                                <td>{{ $item->febris }}</td>
                                <td>{{ $item->selesma }}</td>
                                <td>{{ $item->gastreonteritis }}</td>
                                <td>{{ $item->colic_abdomen }}</td>
                                <td>{{ $item->polyuria }}</td>
                                <td>{{ $item->polydipsia }}</td>
                                <td>{{ $item->weakness }}</td>
                                <td>{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <style>
            .button-container {
                display: flex;
                justify-content: space-between; /* Membuat tombol di kiri dan kanan */
            }
        </style>
    </section>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                "paging": true,        // Aktifkan pagination
                "searching": true,     // Aktifkan search
                "ordering": true,      // Aktifkan sorting kolom
                "info": true,          // Menampilkan informasi jumlah data
                "lengthMenu": [10, 25, 50, 100] // Pilihan jumlah data per halaman
            });
        });
    </script>
      <style>
        /* Sesuaikan lebar kolom */
        th, td {
            text-align: center;
            vertical-align: middle;
        }

        /* Tambahkan padding agar lebih rapi */
        .dataTables_wrapper {
            padding: 10px;
        }

        /* Ubah warna header tabel */
        .table thead th {
            background-color: #1BBD36;
            color: white;
        }

        /* Ubah warna saat hover */
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        /* Beri jarak antara search dan tabel */
        .dataTables_wrapper .dataTables_filter {
            margin-bottom: 15px; /* Jarak bawah */
        }

        /* Tambahkan padding agar tabel lebih luas */
        .dataTables_wrapper {
            padding: 20px;
        }

        /* Sesuaikan lebar tabel */
        .table {
            margin-top: 10px;
        }
    </style>
    
@endsection