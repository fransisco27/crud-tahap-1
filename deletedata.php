<?php
include('koneksi.php');

$kode_produk = $_GET['kode_produk'];

$hasil = $cont ->query("DELETE FROM `tb_menu` WHERE `kode_produk`=$kode_produk");
if($hasil==TRUE ) {
    //"echo data sukses dihapus";
    header("location:master.php?info=delete");
}else{
    echo "Gagal Bosq";
}
?>