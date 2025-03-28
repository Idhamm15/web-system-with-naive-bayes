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
                <label class="form-label">Apakah Anda sedang mengalami batuk kering dan berdahak?</label>
                <div>
                    <input type="radio" name="tussis" value="A" required> Ya
                    <input type="radio" name="tussis" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda mengalami kram pada perut?</label>
                <div>
                    <input type="radio" name="febris" value="A" required> Ya
                    <input type="radio" name="febris" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda mengalami bersin yang berlebihan dan hidung tersumbat?</label>
                <div>
                    <input type="radio" name="selesma" value="A" required> Ya
                    <input type="radio" name="selesma" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda mengalami haus yang berlebihan?</label>
                <div>
                    <input type="radio" name="gastreonteritis" value="A" required> Ya
                    <input type="radio" name="gastreonteritis" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda mengalami peningkatan suhu tubuh (Demam)?</label>
                <div>
                    <input type="radio" name="colic_abdomen" value="A" required> Ya
                    <input type="radio" name="colic_abdomen" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda mengalami muntah dan mual?</label>
                <div>
                    <input type="radio" name="polyuria" value="A" required> Ya
                    <input type="radio" name="polyuria" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda sering membuang air kecil yang berlebihan?</label>
                <div>
                    <input type="radio" name="polydipsia" value="A" required> Ya
                    <input type="radio" name="polydipsia" value="B" required> Tidak
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Apakah Anda sering merasa kelelahan (Lemas)?</label>
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

            usiaKategoriInput.value = kategori; // Simpan kategori di input hidden
        } else {
            alert('Masukkan usia yang valid!');
            event.preventDefault();
            return;
        }
    });
</script>



@endsection