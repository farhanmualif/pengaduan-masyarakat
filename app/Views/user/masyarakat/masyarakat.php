<?= $this->extend('user/layout/index') ?>

<?= $this->section('content') ?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Saya</h1>
    </div>

    <!-- Content Row -->


    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No Laporan</th>
                <th>Tanggal Laporan</th>
                <th style="width: 50%;">Isi Laporan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>12/432/qwq/2121</td>
                <td>02-01-2003</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, dolorem itaque animi reprehenderit rem nulla expedita unde perferendis saepe quasi cum qui suscipit, voluptas cupiditate maiores distinctio debitis recusandae doloremque?</td>
                <td>
                    <img src="<?= base_url() ?>/img/default.svg" alt="gambar-laporan" srcset="">
                </td>
                <td>
                    <a href="#" class="btn btn-danger btn-circle" style="height: 40px;">
                        <i class=" fas fa-trash"></i>
                    </a>
                    <a href="" class="btn btn-info btn-circle">
                        <img src="<?= base_url() ?>img/edit.svg" style="height: 20px;">
                    </a>
                </td>
            </tr>
        </tbody>
    </table>




</div>

<?= $this->endSection() ?>