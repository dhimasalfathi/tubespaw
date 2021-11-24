<?php if ($this->session->flashdata('info')) { ?>
    <div class="alert alert-success"> <?= $this->session->flashdata('info') ?> </div>
<?php } ?>

<div class=row>
    <div class="col-md-12">
        <a href="<?= base_url() ?>penerbit/tambah_penerbit" class="btn btn-success"> <i class="fa fa-plus"></i> Tambah Penerbit</a>

    </div>
</div>
<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Isi Daftar Penerbit</h3>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id Penerbit</th>
                    <th>Nama Penerbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($data as $row) { ?>
                    <tr>
                        <td><?= $row->id_penerbit; ?></td>
                        <td><?= $row->nama_penerbit; ?></td>
                        <td>
                            <a href="<?= base_url() ?>penerbit/edit/<?= $row->id_penerbit; ?>" class="btn btn-success btn-xs"> Edit</a>
                            <a href="<?= base_url() ?>penerbit/hapus/<?= $row->id_penerbit; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah ingin menghapus data ini?')" ;> Hapus</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>