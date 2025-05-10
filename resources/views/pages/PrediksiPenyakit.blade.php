@extends('layout.app')

@section('title', 'Data Latih')

@section('content')

    <div class="container mt-4">
        <center>
            {{-- <h3>Hasil Prediksi</h3> --}}
            <h3>UPT PUSKESMAS DELITUA</h3>
            <p>Jl. Kesehatan no.58 A kel.Delitua Timur Kec.Delitua</p>
            <p>Delitua, Sumatera Utara</p>
        
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Atribut</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $attributeLabels = [
                                'created_at' => 'Tanggal Skrining',
                                // 'updated_at' => 'Tanggal Pembaruan',
                                'fullname' => 'Nama Lengkap',
                                'usia_int' => 'Usia Int',
                                'usia' => 'Usia',
                                'jenis_kelamin' => 'Jenis Kelamin',
                                'gejala' => 'Gejala yang di alami',
                                'keterangan' => 'Hasil Prediksi', // Mengubah label 'Keterangan' menjadi 'Hasil Prediksi'
                                'tussis' => 'Batuk kering dan berdahak (Tussis)',
                                'febris' => 'Peningkatan suhu tubuh / demam (Febris)',
                                'selesma' => 'Bersin dan hidung tersumbat (Selesma)',
                                'gastreonteritis' => 'Mual, muntah, dan diare (Gastreonteritis)',
                                'colic_abdomen' => 'Nyeri perut (Colic abdomen)',
                                'polyuria' => 'Sering buang air kecil (Polyuria)',
                                'polydipsia' => 'Sering merasa haus (Polydipsia)',
                                'weakness' => 'Sering merasa kelelahan (Weakness)',
                            ];

                            $targetAttributes = [
                                'tussis', 
                                'febris', 
                                'selesma', 
                                'gastreonteritis', 
                                'colic_abdomen', 
                                'polyuria', 
                                'polydipsia', 
                                'weakness',
                            ];

                            // Array untuk menampung gejala yang bernilai "A"
                            $gejalaYangDialami = [];
                        @endphp

                        <!-- Tampilkan Created At -->
                        <tr>
                            <td>{{ $attributeLabels['created_at'] }}</td>
                            <td> 
                                @if ($value)
                                    {{ \Carbon\Carbon::parse($value)->setTimezone('Asia/Jakarta')->locale('id')->translatedFormat('d F Y') }} WIB
                                @else
                                    -
                                @endif
                            </td>
                        </tr>

                        <!-- Tampilkan Updated At -->
                        {{-- <tr>
                            <td>{{ $attributeLabels['updated_at'] }}</td>
                            <td>
                                @if (in_array($attribute, ['created_at', 'updated_at']))
                                    @if ($value)
                                        {{ \Carbon\Carbon::parse($value)->translatedFormat('d F Y H:i') }}
                                    @else
                                        -
                                    @endif
                                @else
                                    {{ $value }}
                                @endif
                            </td>
                        </tr> --}}

                        <!-- Tampilkan Nama Lengkap (Fullname) -->
                        <tr>
                            <td>{{ $attributeLabels['fullname'] }}</td>
                            <td>{{ $dataTesting->fullname }}</td>
                        </tr>

                        <!-- Tampilkan Usia -->
                        <tr>
                            <td>{{ $attributeLabels['usia'] }}</td>
                            <td>
                                {{ $dataTesting->usia_int }} -
                                @if ($dataTesting->usia === 'A')
                                    Golongan A
                                @elseif ($dataTesting->usia === 'B')
                                    Golongan B
                                @elseif ($dataTesting->usia === 'C')
                                    Golongan C
                                @elseif ($dataTesting->usia === 'D')
                                    Golongan D
                                @else
                                    {{ $dataTesting->usia }} <!-- Jika usia bukan A, B, C, atau D, tampilkan nilai usia yang sebenarnya -->
                                @endif
                            </td>
                        </tr>

                        <!-- Tampilkan Jenis Kelamin -->
                        <tr>
                            <td>{{ $attributeLabels['jenis_kelamin'] }}</td>
                            <td>
                                {{ $dataTesting->jenis_kelamin === 'A' ? 'Laki-laki' : ($dataTesting->jenis_kelamin === 'B' ? 'Perempuan' : $dataTesting->jenis_kelamin) }}
                            </td>
                        </tr>

                        <!-- Proses Gejala dan Masukkan ke dalam Array $gejalaYangDialami jika Nilai "A" -->
                        @foreach ($targetAttributes as $attribute)
                            @if ($dataTesting->$attribute === 'A')
                                @php
                                    $gejalaYangDialami[] = $attributeLabels[$attribute]; // Masukkan label gejala ke dalam array
                                @endphp
                            @endif
                        @endforeach

                        <!-- Tampilkan Gejala yang Dialami -->
                        @if (!empty($gejalaYangDialami))
                            <tr>
                                <td>{{ $attributeLabels['gejala'] }}</td>
                                <td>
                                    @foreach ($gejalaYangDialami as $gejala)
                                        {{ $gejala }}<br>
                                    @endforeach
                                </td>
                            </tr>
                        @endif

                        <!-- Tampilkan Hasil Prediksi (Keterangan) -->
                        <tr>
                            <td>{{ $attributeLabels['keterangan'] }}</td>
                            <td>{{ $dataTesting->keterangan }}</td>
                        </tr>

                    </tbody>                    
                </table>
            </div>
        
            {{-- <h3>Probabilitas Akhir</h3>
        
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Kelas</th>
                            <th scope="col">Probabilitas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finalProbabilities as $class => $probability)
                            <tr>
                                <td>{{ $class }}</td>
                                <td>{{ number_format($probability, 4) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        
            <h3>Kelas Prediksi</h3>
            <p><strong>{{ $predictedClass }}</strong></p> --}}

            <div class="container mt-5">
                <div class="ttd-block ms-auto">
                    <p>Ka. UPT. Puskesmas Delitua</p>
                    <p>Kec. Delitua</p>
                    <p>Dibuat oleh</p>
                    <br><br>
                    {{-- <img src="{{ asset('/assets/img/ttd-petugas.png') }}" alt=""> --}}
                    <p>Petugas medis</p>
                </div>
            </div>
        
            
        </center>
    </div>

    <style>
        .signature {
            font-family: 'Brush Script MT', cursive;
            font-size: 28px;
            margin: 10px 0;
        }

        .ttd-block {
            max-width: 400px;
            padding: 2rem;
        }
    </style>


@endsection