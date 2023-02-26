<?= $this->extend('user/layout/index') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="card-body">
        <h1 class="mb-5">Kirim Pengaduan</h1>
        <form method="POST">
            <div class="form-row">
                <div class="name">Judul Laporan</div>
                <div class="value">
                    <input class="input--style-6" type="text" name="full_name">
                </div>
            </div>
            <div class="form-row">
                <div class="name">Isi Laporan</div>
                <div class="value">
                    <div class="input-group">
                        <textarea class="input--style-6" type="text" name="email"></textarea>
                    </div>
                </div>
            </div>
            <div class=" form-row">
                <div class="name">Upload Gambar</div>
                <div class="value">
                    <div class="input-group js-input-file">
                        <input class="input-file" type="file" name="file_cv" id="file">
                        <label class="label--file" for="file">Choose file</label>
                        <span class="input-file__info">No file chosen</span>
                    </div>
                    <div class="label--desc">Upload your CV/Resume or any other relevant file. Max file size 50 MB</div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn--radius-2 btn--blue-2" type="submit">Send Application</button>
    </div>
</div>



<?= $this->endSection('content') ?>