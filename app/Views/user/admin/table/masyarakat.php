<?php $this->extend('user/layout/index'); ?>


<?php $this->section('content'); ?>
<div class="card shadow m-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mayarakat</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>
                        <a href="#" class="button btn-danger btn-circle btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                        <a href="#" class="button btn-info btn-circle  btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    </td>
                </tr>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>