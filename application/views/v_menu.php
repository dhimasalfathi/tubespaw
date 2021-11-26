<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url() ?>assets/dist/img/user-666.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Sitompel Sitompul</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active ">
                <a href="<?= base_url()?>Dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li><a href="<?= base_url() ?>anggota"><i class="fa fa-user"></i> Data Anggota</a></li>

            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-desktop"></i>
                    <span>Master buku</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>pengarang"><i class="fa fa-circle-o"></i> Pengarang</a></li>
                    <li><a href="<?= base_url() ?>penerbit"><i class="fa fa-circle-o"></i> Penerbit</a></li>
                    <li><a href="<?= base_url() ?>buku"><i class="fa fa-circle-o"></i> Buku</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>peminjaman"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
                    <li><a href="<?= base_url() ?>pengembalian"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url() ?>laporan/peminjaman"><i class="fa fa-circle-o"></i> Laporan Peminjaman</a></li>
                </ul>
            </li>

            <hr>
            <li><a href="<?= base_url() ?>login/logout"><i class="fa fa-sign-out"></i> logout</a></li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>