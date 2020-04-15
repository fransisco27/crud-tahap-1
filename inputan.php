<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tugas CRUD Tahap 1</title>
</head>

<style type="text/css">
    .container {
        border: 2px solid black;
    }
    .header {
        background-color: blue;
    }
    .label {
        color: white;
    }
    .namapr {
        width: 250px;
        height: 30px;
    }
    .hargapr{
        width: 200px;
        height: 30px;
    }
    .choose2 {
        width: 250px;
        height: 30px;
    }
    .choose3 {
        width: 250px;
        height: 30px;
    }
    /* .get {
        width: 250px;
        height: 30px;
    }
    .get2 {
        width: 250px;
        height: 30px;
    } */
    .click {
        width: 80px;
        height: 30px;
        text-align: center;
    }
    .scr {
        color: red;
        text-align: right;
    }
</style>

<br>
<center class="judul"><h2>Tugas PWPB CRUD Tahap 1</h2></center>
<br>

<body>
    <div class="container">
        <hr>
            <form action="prosesip.php" method="POST" name="form_inputan">
            <div class="header">
            <hr>
            <h2 align = "center" class="label">FORM INPUT MASTER dan STOCK DATA BARANG</h2>
            <hr>
    </div>
    <table class="table" id="form">
        <tr>
            <td>
                <h4 align="center" name="kode_barang">Kode Barang</h4>
            </td>
            <td>:</td>
            <td>MD-0</td>
        </tr>
        <tr>
            <td>
                <h4 align="center">Nama Produk</h4>
            </td>
            <td>:</td>
            <td>
                <input type="text" placeholder="Masukkan Nama Produk" name="nama_produk" id="#" class="namapr">
            </td>
        </tr>
        <tr>
            <td>
                <h4 align="center">Harga Produk</h4>
            </td>
            <td>:</td>
            <td>
                <input type="number" placeholder="Masukkan Harga Produk" name="harga_produk" id="#" class="hargapr">
            </td>
        </tr>
        <tr>
            <td>
                <h4 align="center">Satuan</h4>
            </td>
            <td>:</td>
            <td>
                <select name="satuan" id="#" class="choose2">
                    <option value="#">Choosee/Makanan</option>
                    <option value="Porsi">Porsi</option>
                    <option value="Lusin">Lusin</option>
                    <option value="#">Choosee/Minuman</option>
                    <option value="Buah">Buah</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Gelas">Mangkok</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <h4 align="center">Katagori</h4>
            </td>
            <td>:</td>
            <td>
                <select name="kategori" id="#" class="choose3">
                    <option value="#">Choosee</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <h4 align="center">Url Gambar</h4>
            </td>
            <td>:</td>
            <td>
                <input type="url" placeholder="Masukkan URL Gambar" name="url_gambar" id="#" class="urlgr">
            </td>
        </tr>
        <tr>
            <td>
                <h4 align="center">Stock</h4>
            </td>
            <td>:</td>
            <td>
                <input type="number" placeholder="Stock Awal" name="stok_awal" id="#" class="stockpr">
            </td>
        </tr>
    </table>
    <center>
        <button type="submit" value="prosess" class="btn btn-primary">Simpan</button>
    </center>
    </form>
    <h6 class="scr">Created By: Fransisco Allagan</h6>
    </div>
</body>
</html>