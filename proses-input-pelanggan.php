<?php

$id_pelanggan=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$jenis_hijab=$_POST['jenis_hijab'];
$warna_hijab=$_POST['warna_hijab'];
$jumlah_hijab=$_POST['jumlah_hijab'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into idata_pelanggan(id_pelanggan,nama_pelanggan,jenis_hijab,warna_hijab,jumlah_hijab,total_harga) 
                        values ('$id_pelanggan', '$nama_pelanggan', '$jenis_hijab', '$warna_hijab', '$jumlah_hijab', '$total_harga')");

if($simpan==true){

    header("location:tampil-pelanggan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>