<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from idata_pelanggan where id_pelanggan='$id'");

if($hapus==true){

    header("location:tampil-pelanggan.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>