<?php
    $halaman = "paramedis";
    include 'inc/header.php'

?>

<h1 class="title">Data Para Medis </h1>
<div class="wrap-content">
    
<table class="table table-striped">
    <thead>
        <tr>
            
            <th>No</th>
            <th>Nama </th>
            <th>Jenis kelamin</th>
            
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = mysqli_query ($koneksi, "SELECT * FROM paramedis");
            while ($value = mysqli_fetch_array($sql)) {
        
        ?>
        <tr>
            
            <td><?= $value ['no_pm']?></td>
            <td><?= $value ['nama']?></td>
            <td><?= $value ['jenis_kelamin']?></td>
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