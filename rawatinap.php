<?php
    $halaman = "rawatinap";
    include 'inc/header.php'

?>

<h1 class="title">Rawat Inap</h1>
<div class="buttons">
    <button type="button" class="btn btn-light"><i class="icon ion-md-print"></i></button>
    <button type="button" class="btn btn-light"><i class="icon ion-md-document"></i></button>
    <button type="button" class="btn btn-light"><i class="icon ion-md-download"></i></button>
</div>

<div class="formulir">
    <!-- <form action="rawatinap" method="post"> -->
        <!-- Tanggal : <input type="text" name="" id=""><br> -->
        <!-- Nama:     <input type="text" name="nama lengkap" id=""><br> -->
        <!-- No.Regristrasi: <input type="number" name="" id=""><br> -->
        <!-- <input type="submit"   value="kirim"> -->
    <!-- </form> -->

    <form action="rawatinap">
        <label for="name">nama lengkap</label> <input type="text" id="nama" name="nama" value="nama lengkap">
        <label for="name">No.Registrasi</label> <input type="text" id="nama" name="nama" value="No.Reg">

    </form>
</div>