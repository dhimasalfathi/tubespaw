<?php if ($this->session->flashdata('info')) { ?>
    <div class="alert alert-success"> <?= $this->session->flashdata('info') ?> </div>
<?php } ?>

<div class=row>
    <div class="col-md-12">
        <a href="<?= base_url() ?>peminjaman/tambah_peminjaman" class="btn btn-success"> <i class="fa fa-plus"></i> Tambah Peminjaman</a>

    </div>
</div>
<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Isi Daftar Buku</h3>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Peminjaman</th>
                    <th>Peminjam</th>
                    <th>Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    </div>
</div>