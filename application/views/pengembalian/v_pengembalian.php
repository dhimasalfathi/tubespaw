<div class="box">
    <div class="box-header">
        <h3 class="box-title">Isi Daftar Buku</h3>
    </div>
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Tanggal Dikembalikan</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($data as $row){?>
                <tr>
                    <td><?= $row->$no++;?></td>
                    <td><?= $row->$nama_anggota;?></td>
                    <td><?= $row->$judul;?></td>
                    <td><?= $row->tgl_pinjam;?></td>
                    <td><?= $row->tgl_kembali;?></td>
                </tr>
                <?php}

                ?>
               
            </tbody>
        </table>
    </div>
</div>