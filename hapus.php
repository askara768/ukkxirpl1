<?php
include 'koneksi.php';

if (isset($_GET['produk_id'])) {
    $produk_id = $_GET['produk_id'];

    $query = "DELETE FROM produk WHERE produk_id = '$produk_id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: produk.php");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID produk tidak ditemukan.";
}
