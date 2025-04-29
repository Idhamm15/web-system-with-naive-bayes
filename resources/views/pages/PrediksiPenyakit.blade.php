@extends('layout.app')

@section('title', 'Data Latih')

@section('content')

    <div class="container mt-4">
        <center>
            <h3>Hasil Prediksi</h3>
        
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Atribut</th>
                            <th scope="col">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataTesting->toArray() as $attribute => $value)
                            <tr>
                                <td>{{ ucfirst(str_replace('_', ' ', $attribute)) }}</td>
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
                            </tr>
                        @endforeach
                    </tbody>                    
                </table>
            </div>
        
            <h3>Probabilitas Akhir</h3>
        
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
            <p><strong>{{ $predictedClass }}</strong></p>
        
            
        </center>
    </div>


@endsection