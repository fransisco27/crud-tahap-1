<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Master</title>
</head>
<style>
    .table{
        border: 2px solid black;
        border-collapse: collapse;
        width: 100%;

    }
    .headerr{
        border: 2px solid black;
        background-color: blue;
        border-collapse: collapse;
    }
    .bck{
        background-color: red;
    }



</style>
<h1 align="center">Tugas CRUD Tahap 1</h1>
<br>
<hr>
<hr>
<br>

<body>
    <div class="container">
    <h2 align="center">Data Barang</h2><br>
        <table class="table" id="#" align="center">
            <thead class="headerr">
                <tr>
                    <th>No</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Satuan</th>
                    <th>Katagori Produk</th>
                    <th>Gambar Produk</th>
                    <th>Stock Produk</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include('koneksi.php');
                $hasil = $cont->query("SELECT * FROM `tb_menu` ");

                if (isset($_GET['info'])) {
                    $info = $_GET['info'];
                    if ($info == 'Delete') {
                        echo "Data Sukses Terhapus";
                    }
                }

                $n = 1;
                foreach($hasil as $d):
                    $img = $d['url_gambar'];
                    echo "<tr>";

                    echo "<td>".$n."</td>";
                    echo "<td align=center>"."MD-0".$d['kode_produk']."</td>";
                    echo "<td align=center>".$d['nama_produk']."</td>";
                    echo "<td align=center>".$d['harga_produk']."</td>";
                    echo "<td align=center>".$d['satuan']."</td>";
                    echo "<td align=center>".$d['kategori']."</td>";
                    echo "<td>"."<img src = '$img' width = '135' height = '130'>"."</td>";

                    if ($d['stok_awal']<5) {
                        echo "<td align=center class='bck'>".$d['stok_awal']."</td>";
                    }else {
                        echo "<td align=center>".$d['stok_awal']."</td>";
                    }

                    echo "<td align=center>";
                    echo "<a href = 'deletedata.php? kode_produk=".$d['kode_produk']."'>Delete</a>";
                    echo "</td>";
                    
                    echo "</tr>";
                    $n++;
                endforeach;
                ?>
            </tbody>
        </table>
                <br>
                <br>
            <center>
                <button type="submit" class="btn btn-primary" value="Back" onclick="window.location.href = 'inputan.php';">Kembali</button>
            </center>
            <br>
    </div>
</body>
</html>