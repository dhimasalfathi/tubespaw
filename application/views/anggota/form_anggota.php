<div class="col-md-12">
    <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $judul;?> </h3>
            </div>
           
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_anggota" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_anggota"class="form-control" placeholder="Nama Anggota">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                    <select name="jenis_kelamin" class="form-control">
                        <option value=""> - Pilih jenis kelamin - </option>
                        <option value="Laki-Laki"> Laki-Laki </option>
                        <option value="Perempuan"> Perempuan </option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class = "form-control" cols="30" rows="5"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nomor Hp/Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" name="no_hp"class="form-control" placeholder="Nomor Hp/Telepon">
                  </div>
                </div>

                <div class="box-footer">
                    <a href="<?= base_url()?>anggota" class="btn btn-warning">Cancel</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>