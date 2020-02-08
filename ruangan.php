<?php 
     $halaman = "Ruangan";
     include 'inc/header.php'; 
?>

<h1 class="title">Data Ruangan </h1>
<div class="wrap-content">
<table class="table table-striped">
    <thead>
        <tr>
            
            <th>Kode Ruang</th>
            <th>Nama Ruangan</th>
            <th>Harga</th>
            
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = mysqli_query ($koneksi, "SELECT * FROM ruangan");
            while ($value = mysqli_fetch_array($sql)) {
        
        ?>
        <tr>
            
            <td><?= $value ['kode_ruang']?></td>
            <td><?= $value ['nama_ruangan']?></td>
            <td><?= $value ['harga']?></td>
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
