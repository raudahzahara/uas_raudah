<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Queen Hijab</h1>
        <?php 

if(@$_GET['pesan']=="inputBerhasil"){

?>
        <div class="alert alert-success">
        Penyimpanan Berhasil!
        </div>
<?php

}

?>


<?php 

if(@$_GET['pesan']=="hapusBerhasil"){

?>
        <div class="alert alert-success">
        Data Berhasil Dihapus!
        </div>
<?php

}

?>

<?php 

if(@$_GET['pesan']=="editBerhasil"){

?>
        <div class="alert alert-success">
        Perubahan Berhasil!
        </div>
        <?php

}

?>
    

        <table id="dataTables" class="table table-bordered">
        <thead>
            <tr>
                <th>id_pelanggan</th><th>nama_pelanggan</th><th>jenis_hijab</th><th>warna_hijab</th><th>jumlah_hijab</th><th>total_harga</th>
                <th>
                <a href="input-pelanggan.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "koneksi.php";
        $sql=$koneksi->query("select * from idata_pelanggan order by id_pelanggan ASC");

        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['id_pelanggan']?></td>
                <td><?php echo $row['nama_pelanggan']?></td>
                <td><?php echo $row['jenis_hijab']?></td>
                <td><?php echo $row['warna_hijab']?></td>
                <td><?php echo $row['jumlah_hijab']?></td>
                <td><?php echo $row['total_harga']?></td>
                <td>
                <a href="edit-pelanggan.php?id=<?php echo $row['id_pelanggan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-pelanggan.php?id=<?php echo $row['id_pelanggan']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>
            

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
