<div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Update Data Kamar </a>
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
                        <?=form_open_multipart('administrator/daftar_kamar/update_kamar/'.$kamar['id'])?>
                            <?=$this->session->flashdata('pesan')?>
                            <input type="hidden" name="idkamar" value="<?php $kamar['id']?>">
                            <div class="form-group">
                                <label>Nama Lantai</label>
                                <input type="text" name="lantai" placeholder="Masukkan Nama Lantai" class="form-control" value="<?=$kamar['lantai']?>">
                            </div>
                            <div class="form-group">
                                <label>No. Kamar</label>
                                <input type="text" name="no_kamar" placeholder="Masukkan Nomor Kamar" class="form-control" value="<?=$kamar['no_kamar']?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Penghuni</label>
                                <input type="text" name="nama_penghuni" placeholder="Masukkan Nama Penghuni" class="form-control" value="<?=$kamar['nama_penghuni']?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Kost</label>
                                <select name="id_nm_kost" class="form-control form-control">
                                    <?php $no=1;
                                    foreach($data_kost as $dt):
                                        if($dt["nmkost"]==$kamar["nmkost"]){
                                    ?>
                                        <option value=<?=$dt["id"]?> selected><?=$dt["nmkost"]?></option>
                                    <?php } else {?>
                                        <option value=<?=$dt["id"]?> selected><?=$dt["nmkost"]?></option>
                                    <?php } endforeach;?>
                                </select>
                            </div> 
                          
                            <div class="form-group">
                                <label>Biaya Kamar</label>
                                <input type="text" name="biayaKamar" placeholder="Masukkan Biaya Kost" class="form-control" value="<?=$kamar['biayaKamar']?>">
                                
                            </div>
                            <div class="form-group">
                                <label>Jenis Pembayaran</label>
                                <select name="pembayaranKamar" class="form-control form-control">
                                    <?php if($kamar["pembayaran"]=="Bulanan"){?>
                                        <option value="Bulanan" selected>Bulanan</option>
                                        <option value="Setengah Tahun">Setengah Tahun</option>
                                        <option value="Tahunan">Tahunan</option>
                                    <?php }else if($kamar["pembayaranKamar"]=="Setengah Tahun"){?>
                                        <option value="Bulanan">Bulanan</option>
                                        <option value="Setengah Tahun" selected>Setengah Tahun</option>
                                        <option value="Tahunan">Tahunan</option>
                                    <?php } else{?>
                                        <option value="Bulanan">Bulanan</option>
                                        <option value="Setengah Tahun">Setengah Tahun</option>
                                        <option value="Tahunan" selected>Tahunan</option>
                                    <?php }?>
                                </select>
                            </div>   
                            <div class="form-group">
                                <label>Status Kamar</label>
                                <input type="text" name="statusKamar" placeholder="Masukkan Status Kamar" class="form-control" value="<?=$kamar['statusKamar']?>">
                                
                            </div>
                            <input type="hidden" name="nm_foto" value="<?=$kamar['fotokamar']?>">
                            <input type="file" name="fotokamar">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        <?=form_close()?>

                </div>
            </div>
            