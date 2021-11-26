<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
                .tgl_ahir{
                    margin-left : -20px;
                }
                .btn-filter{
                    margin-left : -40px;
                }
                .btn-refresh{
                    margin-left : -60px;
                }
                .btn-PDF{
                    margin-left : -80px
                }
        </style>
</head>
    <body>
    <div class="box">
    <div class="box-header">
        <form>
            <div class="row">
                <div class="col-md-3">
                    <h4 class="text-primary"><b>Filter Laporan Peminjaman</b></h4>
                </div>
                
                <div class="col-md-2">
                    <input type="text" name="tgl_awal" class="form-control" placeholder="Tanggal Awal" onfocus="(this.type='date')">
                </div>

                <div class="col-md-2">
                    <input type="text" name="tgl_ahir" class="form-control tgl_ahir" placeholder="Tanggal Ahir" onfocus="(this.type='date')">
                </div>

                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary btn-block btn-filter"><i class="fa fa-filter"></i> Filter</button>
                </div>

                <div class="col-md-2">
                    <a href="" class="btn btn-warning btn-block btn-refresh"><i class="fa fa-refresh"></i> Refresh</a>
                </div>

                <div class="col-md-2">
                    <a href="" class="btn btn-danger btn-block btn-PDF"><i class="fa fa-file-pdf-o"></i> View PDF</a>
                </div>


            </div>
            



        </form>
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
    </body>
</html>


