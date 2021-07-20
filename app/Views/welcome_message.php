<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Antrian Jihan</title>
    <link rel="stylesheet"
          id="theme_link"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css"/>
    <link rel="stylesheet" href="navbar-fixed-right.min.css">
    <link rel="stylesheet" href="navbar-fixed-left.min.css">
    <link rel="stylesheet" href="docs.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
    <a class="navbar-brand" href>Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="<?php echo base_url('pelayanan'); ?>" class="nav-link">Service</a>
            </li>
            <!-- <li class="nav-item">
                <a href="<?php echo base_url('pelayanan'); ?>" class="nav-link">Loket</a>
            </li> -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Antrian</a>
                <div class="dropdown-menu">
                    <a href="<?php echo base_url('antrian'); ?>" class="dropdown-item">Ambil Antrian</a>
                    <a href="<?php echo base_url('antrianno'); ?>" class="dropdown-item">No Antrian</a>
                    <a href="<?php echo base_url('loketpanggil'); ?>" class="dropdown-item">Loket Antrian</a>
                </div>
            </li>
        </ul>
        
    </div>
</nav>

<div class="container">
    <div class="jumbotron">
        <h1 class="display-4"><font face="Sans Serif">SISTEM APLIKASI ANTRIAN PASIEN</font>
            
            <br>
        </h1>
        <p>
            <strong><font face="Comics" size="5">
                Nama     : Jihan Habibah<br>
                Kelas    : TI 19 B2<br>
                NIM      : 311910094<br>
                Semester : 4<br>
                Universitas Pelita Bangsa<br>
                'Project Ujian Akhir Semester Pemrogramman Web (Sistem Aplikasi Antrian Pasien)'
</font></strong>
        </p>
        
    </div>

    

</div>

</body>
</html>
