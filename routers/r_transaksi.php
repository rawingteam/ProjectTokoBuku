
<?php
include_once "../controllers/c_transaksi.php";
$transaksi = new c_transaksi();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga_barang = $_POST["harga_barang"];
    $total_pembelian = $_POST["total_pembelian"];

    $transaksi->insert($id, $nama_barang, $jumlah_barang, $harga_barang, $total_pembelian);

    if ($transaksi) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/transaksi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $nama_barang = $_POST["nama_barang"];
    $jumlah_barang = $_POST["jumlah_barang"];
    $harga_barang = $_POST["harga_barang"];
    $total_pembelian = $_POST["total_pembelian"];
   
    $transaksi->update($id, $nama_barang, $jumlah_barang, $harga_barang, $total_pembelian);

    if ($transaksi) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/transaksi.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $transaksi->delete($id);
}
