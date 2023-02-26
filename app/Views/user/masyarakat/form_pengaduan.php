<?= $this->extend('user/layout/index') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="card-body">
        <h1 class="mb-5">Kirim Pengaduan</h1>
        <form method="POST">
            <div class="form-row">
                <div class="name">Judul Laporan</div>
                <div class="value">
                    <input class="input--style-6 <?= $validation->hasError('judul_laporan') ? 'is-invalid' : '' ?>" type="text" name="judul_pengaduan" value="<?= old('judul_laporan') ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="name">Isi Laporan</div>
                <div class="value">
                    <div class="input-group">
                        <textarea class="input--style-6 <?= $validation->hasError('isi_laporan') ? 'is-invalid' : '' ?>" type="text" name="isi_pengaduan"></textarea>
                    </div>
                </div>
            </div>
            <div class=" form-row">
                <div class="name">Upload Gambar</div>
                <div class="value">
                    <div class="input-group js-input-file">
                        <input class="input-file <?= $validation->hasError('image') ? 'is-invalid' : '' ?>" type="file" name="image" id="image" value="<?= old('image') ?>">
                        <label class="label--file" for="image">Pilih file</label>
                        <span class="input-file__info">tidak ada file dipilih</span>
                    </div>
                    <div class="label--desc">Maksimal ukuran file 50 MB</div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn--radius-2 btn--blue-2" type="submit">Kirim Pengaduan</button>
    </div>
</div>



<?= $this->endSection('content') ?>