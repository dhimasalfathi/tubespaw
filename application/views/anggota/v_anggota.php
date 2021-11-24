<?php if ($this->session->flashdata('info')) { ?>
        <div class="alert alert-success"> <?= $this->session->flashdata('info') ?> </div>
    <?php } ?>

<div class = row>
    <div class="col-md-12">
        <a href="<?= base_url()?>anggota/tambah_anggota" class="btn btn-success"> <i class ="fa fa-plus"></i> Tambah Anggota</a>

    </div>
</div>
<br>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Anggota</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Nomor Hp/Telepon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                
            <tbody>
              <?php
              foreach ($data as $row){
                echo "
                <tr>
                  <td>$row->id_anggota</td>
                  <td>$row->nama_anggota</td>
                  <td>$row->jenis_kelamin</td>
                  <td>$row->alamat</td>
                  <td>$row->no_hp</td>
                  <td>
                  <a href='http://localhost/tubespaw/anggota/edit/$row->id_anggota' class= 'btn btn-success btn-xs'>Edit</a>
                  <a href='http://localhost/tubespaw/anggota/hapus/$row->id_anggota' class= 'btn btn-danger btn-xs'>Hapus</a>
                  </td>
                  
                </tr>";
              }?>
            </tbody>

               
        </table>
</div>