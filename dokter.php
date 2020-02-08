<?php 
     $halaman = "Dokter";
     include 'inc/header.php'; 
?>

<h1 class="title">Data Dokter</h1>
<div class="wrap-content">
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Jasa</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = mysqli_query ($koneksi, "SELECT * FROM dokter");
            while ($value = mysqli_fetch_array($sql)) {
        
        ?>
        <tr>
            <td>1</td>
            <td><?= $value ['nama']?></td>
            <td><?= $value ['jenis_kelamin'] == 'L' ? 'laki-laki': 'Perempuan'?></td>
            <td><?= $value ['telepon']?></td>
            <td><?= $value ['alamat']?></td>
            <td><?= $value ['jasa']?></td>
            <td>
                <a  class= 'btn btn-info' href=""><i class="icon ion-md-create"></i></a>
                <a  class= 'btn btn-danger' href=""><i class="icon ion-md-trash"></i></a>
                
            </td>
        </tr>
       
        <?php } ?>
    </tbody>
    <tfoot>

    </tfoot>





</table>
</div>
<?php include 'inc/footer.php'; ?>