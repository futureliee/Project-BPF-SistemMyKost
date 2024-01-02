<div class="main-panel">
    <link rel="stylesheet" href=<?= base_url() . 'assets/css/admin-detailkost.css' ?>>
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> Detail Kamar </a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href=<?= base_url() . 'login_controller/logout' ?>>
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
            <h3 class="mb-3">
                <?= $kamar["lantai"] ?>
            </h3>
            <div class="row">
                <img <?php if ($kamar["fotokamar"] == null) { ?> src="<?= base_url() . 'assets/img/Home.png' ?>" <?php } else { ?>
                        src="<?= base_url() . 'assets/img/gambar_kamar/' . $kamar['fotokamar'] ?>" <?php } ?> width="300"
                    class="ml-3 mb-3 mr-5" alt="">
                <table border="0" style="width: 60%">
                    <tr>
                        <th>No. Kamar </th>
                        <td> :
                            <?= $kamar["no_kamar"] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Penghuni </th>
                        <td> :
                            <?= $kamar["nama_penghuni"] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Pembayaran </th>
                        <td> :
                            <?= $kamar["pembayaranKamar"] ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Harga </th>
                        <td> : Rp
                            <?= number_format($kamar["biayaKamar"], 0, ',', '.') ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Status Kamar </th>
                        <td> :
                            <?= $kamar["statusKamar"] ?>
                        </td>
                    </tr>
                  
                    
                </table>
            </div>
            <div class="fullScreen hide">
                <i class="fa fa-close mr-2" id="closeMap"></i>
                <div id="map" class="mx-auto"></div>
            </div>
        </div>
    </div>