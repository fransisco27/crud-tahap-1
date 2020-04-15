<?php
include('koneksi.php');
//PRINT
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url_gambar = $_POST['url_gambar'];
$stok_awal = $_POST['stok_awal'];

$result = $cont->exec("INSERT INTO `tb_menu` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok_awal`) VALUES (NULL, '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$url_gambar', '$stok_awal')");

echo $result;

    if ($result==TRUE) {
        echo "Data Sukses Disimpan";
        include "master.php";
    }else {
        echo "Data Gagal Disimpan";
    }

?>


<!-- include('koneksi.php');
//PRINT
$nama_produk = $_POST['nama_produk'];
$harga_produk = $_POST['harga_produk'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url_gambar = $_POST['url_gambar'];
$stok_awal = $_POST['stok_awal'];

$result = $cont->exec("INSERT INTO `tb_menu` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok_awal`) VALUES (NULL, '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$url_gambar', '$stok_awal')");

echo $result;

    if ($result==TRUE) {
        echo "Data Sukses Disimpan";
        include "master.php";
    }else {
        echo "Data Gagal Disimpan";
    } -->