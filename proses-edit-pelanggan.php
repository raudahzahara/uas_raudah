<?php

include "koneksi.php";

$id=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$jenis_hijab=$_POST['jenis_hijab'];
$warna_hijab=$_POST['warna_hijab'];
$jumlah_hijab=$_POST['jumlah_hijab'];
$total_harga=$_POST['total_harga'];

$ubah=$koneksi->query("update idata_pelanggan set id_pelanggan='$id', nama_pelanggan='$nama_pelanggan', jenis_hijab='$jenis_hijab', warna_hijab='$warna_hijab', jumlah_hijab='$jumlah_hijab', total_harga='$total_harga' where id_pelanggan='$id'");

if($ubah==true){

    header("location:tampil-pelanggan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>