<?= $this->extend('user/layout/index') ?>

<?= $this->section('content') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Laporan Saya</h1>
    </div>

    <!-- Content Row -->
    <div class="container" style="width: 150%;">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No Laporan</th>
                    <th>Tanggal Laporan</th>
                    <th>Isi Laporan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>12/432/qwq/2121</td>
                    <td>02-01-2003</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, dolorem itaque animi reprehenderit rem nulla expedita unde perferendis saepe quasi cum qui suscipit, voluptas cupiditate maiores distinctio debitis recusandae doloremque?</td>
                    <td>
                        <a href="#" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>


</div>

<?= $this->endSection() ?>