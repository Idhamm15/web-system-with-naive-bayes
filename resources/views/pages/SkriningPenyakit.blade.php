@extends('layout.app')

@section('title', 'Skrining Penyakit')

@section('content')
<div class="container mt-4">
    <form id="mainForm" action="{{route('disesase_screening.screening')}}" method="POST">
        @csrf
        <!-- FORM DATA DIRI -->
        <section id="formDataDiri">
            <h2>Data Diri</h2>
            <hr>
            <div class="mb-3">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" required>
            </div>
            <input type="hidden" name="usia_int" id="usia_int">
            <input type="hidden" id="usia_kategori" name="usia">
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="A">Laki-laki</option>
                    <option value="B">Perempuan</option>
                </select>
            </div>
            <div class="button-container">
                <button type="button" class="btn btn-primary" onclick="showSkrining()">Selanjutnya</button>
            </div>
        </section>

        <!-- FORM SKRINING PENYAKIT -->
        <section id="formSkrining" class="hidden">
            <h2>Skrining Ispa, Diare, DM Type II</h2>
            <hr>
            <div class="mb-3">
                <label class="form-label">Apakah Anda sedang mengalami batuk kering dan berdahak? (tussis)</label>
                <div>
                    <input type="radio" name="tussis" value="A" required> Ya
                    <input type="radio" name="tussis" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah anda mengalami peningkatan suhu tubuh (demam)? (febris)</label>
                <div>
                    <input type="radio" name="febris" value="A" required> Ya
                    <input type="radio" name="febris" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda mengalami bersin yang berlebihan dan hidung tersumbat? (selesma)</label>
                <div>
                    <input type="radio" name="selesma" value="A" required> Ya
                    <input type="radio" name="selesma" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah anda mengalami muntah dan mual? (gastroenteritis)</label>
                <div>
                    <input type="radio" name="gastreonteritis" value="A" required> Ya
                    <input type="radio" name="gastreonteritis" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah anda mengalami kram pada perut? (Colic Abdomen)</label>
                <div>
                    <input type="radio" name="colic_abdomen" value="A" required> Ya
                    <input type="radio" name="colic_abdomen" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah anda sering membuang air kecil yang berlebihan? (Polyuria)</label>
                <div>
                    <input type="radio" name="polyuria" value="A" required> Ya
                    <input type="radio" name="polyuria" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah anda mengalami rasa haus yang berlebihan? (Polydipsia)</label>
                <div>
                    <input type="radio" name="polydipsia" value="A" required> Ya
                    <input type="radio" name="polydipsia" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda sering merasa kelelahan (Weaknes)?</label>
                <div>
                    <input type="radio" name="weakness" value="A" required> Ya
                    <input type="radio" name="weakness" value="B" required> Tidak
                </div>
            </div>
            <div class="button-container">
                <button type="button" class="btn btn-secondary" onclick="showDataDiri()">Sebelumnya</button>
                <button type="submit" class="btn btn-primary">Proses</button>
            </div>
        </section>
    </form>
</div>

<style>
    .hidden {
        display: none;
    }
    .button-container {
        display: flex;
        justify-content: space-between; /* Tombol di kiri dan kanan */
    }
</style>

<script>
    function showSkrining() {
        document.getElementById("formDataDiri").classList.add("hidden");
        document.getElementById("formSkrining").classList.remove("hidden");
    }

    function showDataDiri() {
        document.getElementById("formDataDiri").classList.remove("hidden");
        document.getElementById("formSkrining").classList.add("hidden");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('mainForm').addEventListener('submit', function (event) {
        let usiaInput = document.getElementById('usia');
        let usiaKategoriInput = document.getElementById('usia_kategori');
        let usiaIntInput = document.getElementById('usia_int'); // input hidden usia asli
        let usia = parseInt(usiaInput.value);
        let kategori = '';

        if (!isNaN(usia)) {
            if (usia <= 40) {
                kategori = 'A';
            } else if (usia >= 41 && usia <= 50) {
                kategori = 'B';
            } else if (usia >= 51 && usia <= 60) {
                kategori = 'C';
            } else if (usia >= 61 && usia <= 70) {
                kategori = 'D';
            } else {
                alert('Usia tidak valid!');
                event.preventDefault(); // Hentikan pengiriman form
                return;
            }

            usiaKategoriInput.value = kategori;
            usiaIntInput.value = usia; // Set nilai usia asli
        } else {
            alert('Masukkan usia yang valid!');
            event.preventDefault();
            return;
        }
    });

</script>



@endsection