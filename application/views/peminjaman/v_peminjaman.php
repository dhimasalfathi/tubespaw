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
                <?php
                foreach ($data as $row) {
                    $tgl_kembali = new DateTime($row->tgl_kembali);
                    $tgl_sekarang = new DateTime();
                    $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                ?>
                    <tr>
                        <td><?= $row->id_pm; ?></td>
                        <td><?= $row->nama_anggota; ?></td>
                        <td><?= $row->judul_buku; ?></td>
                        <td><?= $row->tgl_pinjam; ?></td>
                        <td><?= $row->tgl_kembali; ?></td>
                        <td>
                            <?php
                            if ($tgl_kembali >= $tgl_sekarang || $selisih == 0) {
                                echo "<span class = 'label label-warning'> Belum Di Kembalikan";
                            } else {
                                echo "Telat <b style = 'color:red;'>" . $selisih . "</b> Hari <br> <span class = 'label label-danger'> Denda Perhari = Rp1.000";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary btn-xs">Kembalikan</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>