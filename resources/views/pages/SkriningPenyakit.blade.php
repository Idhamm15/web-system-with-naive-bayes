@extends('layout.app')

@section('title', 'Skrining Penyakit')

@section('content')
    <section class="form-data-latih">
        <div class="container">
            <h2>Skrining Ispa, Diare, DM Type II</h2>
            <hr>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda sedang mengalami batuk kering dan berdahak?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda mengalami kram pada perut?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda mengalami bersin yang berlebihan dan hidung tersmubat?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda mengalami haus yang berlebihan?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda mengalami peningkatan subu tubuh di atas suhu normal (Demam)?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda mengalami muntah dan mual?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda sering membuang air kecil yang berlebihan?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Apakah Anda sering merasa kelelahan (Lemas)?</label>
                    <div>
                        <input type="radio" id="ya" name="batuk" value="ya">
                        <label for="ya">Ya</label>
                    </div>
                    <div>
                        <input type="radio" id="tidak" name="batuk" value="tidak">
                        <label for="tidak">Tidak</label>
                    </div>
                </div>
                <div class="button-container">
                    <button type="reset" class="btn btn-secondary">Sebelumnya</button>
                    {{-- <button type="submit" class="btn btn-primary">Proses</button> --}}
                    <a href="{{ url('/hasil-skrining-penyakit') }}" class="btn btn-primary">Proses</a>
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