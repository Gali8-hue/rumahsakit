<?php include'inc/koneksi.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas+Neue|Rubik:400,500,700&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    

    <title><?= isset($halaman) ? $halaman : 'Administrator' ?> | App Rumah Sakit</title>
</head>

<body>
    <section class="wrap">
        <div class="wrap-left">
            <div class="menu-top">
                <img src="img/user_admin.png" alt="User image">
                <h4>Full Name</h4>
                <p>email@me.com</p>
            </div>
            <div class="menu-bottom">
                <a href="."> <i class="icon ion-ios-home"></i> Dashboard</a>

                <div class="divider"></div>

                <a <?= (isset($halaman) && $halaman == 'Pasien') ? 'class="active"' : '' ?> href="pasien.php"> <i class="icon ion-md-people"></i> Pasien</a>
                <a <?= (isset($halaman) && $halaman == 'Dokter') ? 'class="active"' : '' ?> href="dokter.php"> <i class="icon ion-md-people"></i> Dokter</a>
                <a <?= (isset($halaman) && $halaman == 'Ruangan') ? 'class="active"' : '' ?> href="ruangan.php"> <i class="icon ion-ios-bed"></i> Ruangan</a>
                <a <?= (isset($halaman) && $halaman == 'paramedis') ? 'class="active"' : ''?> href="paramedis.php"> <i class="icon ion-md-people"></i> Paramedis</a>
                <div class="divider"></div>

                <a  <?=(isset ($halaman) && $halaman == 'rawatinap') ? 'clas="active"' : '' ?> href="rawatinap.php"> <i class="icon ion-md-medkit"></i> Rawat inap</a>
                <div class="divider"></div>

                <a href="pengguna.php"> <i class="icon ion-md-person"></i> Pengguna</a>

                

                <a href="logout.php"> <i class="icon ion-md-log-out"></i> keluar</a>
            </div>
        </div>

        <div class="wrap-right">
            <nav>
                <form action="#" method="get">
                    <i class="icon ion-ios-search"></i>
                    <input type="text" placeholder="Search Anything...">
                </form>

                <ul>
                    <a href="#"> <li> <i class="icon ion-md-mail"></i> </li> </a>
                    <a href="#"> <li> <i class="icon ion-ios-notifications"></i> </li> </a>
                    <a href="#"> <li> <i class="icon ion-md-cog"></i> </li> </a>
                </ul>
            </nav>