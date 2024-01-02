<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/designwalpaper.jpg" data-color="blue">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <h3 style="font-family: 'Calibri', sans-serif;">
                    <i class="fa-solid fa-house-user fa-bounce ml-3 mr-3" style="color: #dde3ee;"></i><b>MyKost</b>
                    </h3>
                </div>
            
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('administrator/dashboard') ?>">
                            <i class="fa fa-th-large mr-2"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/daftar_kost') ?>">
                            <i class="fa fa-list mr-2"></i>
                            <p>Daftar Kost</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/daftar_kamar') ?>">
                            <i class="fa-solid fa-file mr-2"></i>
                            <p>Daftar Kamar</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/daftar_user') ?>">
                            <i class="fa fa-users mr-2"></i>
                            <p>Daftar Pengguna</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo base_url('administrator/profil') ?>">
                            <i class="fa fa-user mr-2"></i>
                            <p>Profil</p>
                        </a>
                    </li>
                </ul>
        </div>
    </div>
</body>
