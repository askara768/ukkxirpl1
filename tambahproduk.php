<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produk_id = $_POST['produk_id'];
    $nama_produk = trim($_POST['nama_produk']);
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if ($nama_produk !== '') {
        if ($produk_id !== '') {
            $query = "INSERT INTO produk (produk_id, nama_produk, harga, stok) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, 'isii', $produk_id, $nama_produk, $harga, $stok);
        } else {
            $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($koneksi, $query);
            mysqli_stmt_bind_param($stmt, 'sii', $nama_produk, $harga, $stok);
        }

        mysqli_stmt_execute($stmt);
        header('Location: produk.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
    <style>
        body {
            background: linear-gradient(#642929, #c9c9c9);
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 150px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
        }

        .link {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Produk</h2>
        <form method="POST" action="tambahproduk.php">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk">

            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga">

            <label for="stok">Stok</label>
            <input type="number" id="stok" name="stok">

            <button type="submit">Tambah Produk</button>
        </form>

        <a class="link" href="produk.php">Kembali ke daftar produk</a>
    </div>
</body>

</html>