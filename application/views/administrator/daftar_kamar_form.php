<div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Input Data Kamar </a>
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
                        <?=form_open_multipart("")?>
                            <?=$this->session->flashdata('pesan')?>
                            <div class="form-group">
                                <label>Lantai</label>
                                <input type="text" name="lantai" placeholder="Masukkan Nama Lantai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>No.Kamar</label>
                                <input type="text" name="no_kamar" placeholder="Masukkan Nomor Kamar" class="form-control">
                            </div>  
                            <div class="form-group">
                                <label>Nama Penghuni</label>
                                <input type="text" name="nama_penghuni" placeholder="Masukkan Nama Penghuni" class="form-control">
                            </div>  
                            <div class="form-group">
                                <label>Nama Kost</label>
                                <select name="id_nm_kost" class="form-control form-control">
                                    <?php $no=2;
                                    foreach($data_kost as $dt):
                                    ?>
                                    <option value=<?=$dt["id"]?> ><?=$dt["nmkost"]?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select name="pembayaranKamar" class="form-control form-control">
                                    <option value="Bulanan">Bulanan</option>
                                    <option value="Setengah Tahun">Setengah Tahun</option>
                                    <option value="Tahunan">Tahunan</option>
                                </select>
                            </div>   
                            <div class="form-group">
                                <label>Biaya</label>
                                <input type="text" name="biayaKamar" placeholder="Masukkan Biaya Kamar" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                <label>Status Kamar</label>
                                <select name="statusKamar" class="form-control form-control">
                                    <option value="Belum Berpenghuni">Belum Berpenghuni</option>
                                    <option value="Sudah Berpenghuni">Sudah Berpenghuni</option>
                                </select>
                            </div>   
                            <input type="file" name="fotokamar">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <?=form_close()?>

                </div>
            </div>