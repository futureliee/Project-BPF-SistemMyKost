<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Daftar Kamar </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href=<?=base_url().'login_controller/logout'?>>
                                <i class="fa fa-sign-out mr-2"></i> Sign out
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <?php echo anchor('administrator/daftar_kamar/input_kamar', '<button class="btn btn-md btn-primary mb-3"><i class="fa fa-plus mr-2"></i>Tambah Kamar</button>') ?>
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>No</th>
                    <th>Lantai</th>
                    <th>No.Kamar</th>
                    <th>Nama Penghuni</th>
                    <th>Jenis Pembayaran</th>
                    <th>Biaya</th>
                    <th>Status Kamar</th>
                    <th colspan="3"><center>Aksi</center></th>
                </tr>
                <?php
                $no = 1;
                foreach ($kamar as $dt) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $dt['lantai'] ?></td>
                        <td><?php echo $dt['no_kamar'] ?></td>
                        <td><?php echo $dt['nama_penghuni'] ?></td>
                        <td><?php echo $dt['pembayaranKamar'] ?></td>
                        <td><?php echo $dt['biayaKamar'] ?></td>
                        <td><?php echo $dt['statusKamar'] ?></td>
                        <td width="20px">
                            <a class="nav-link" href=<?=base_url().'administrator/daftar_kamar/detail/'.$dt["id"]?>>
                                <div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div></a>
                        </td>
                        <td width="20px">
                            <a class="nav-link" href=<?=base_url().'administrator/daftar_kamar/update_kamar/'.$dt["id"]?>>
                                <div class="btn btn-sm btn-info"><i class="fa fa-edit"></i></div></a>
                        </td>
                        <td width="20px">
                            <a class="nav-link" href=<?=base_url().'administrator/daftar_kamar/hapus_kamar/'.$dt["id"]?>>
                                <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div></a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>


        </div>
    </div>
    </div>
