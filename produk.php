<!DOCTYPE html>
<html>

<head>
    <h1>Produk</h1>
</head>
<style>
    body {
        background: linear-gradient(#642929, #c9c9c9);
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        max-width: 400px;
        margin: 50px auto;
        padding: 250px;
    }
</style>

</html>

<body>
    <a href="tambahproduk.php">Tambah Produk</a>
    <table border="1">
        <tr>
            <th>ProdukID</th>
            <th>nama_produk</th>
            <th>harga</th>
            <th>stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM produk");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_produk']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['stok']; ?></td>
                <td>
                    <a href="edit.php?produk_id=<?php echo $d['produk_id']; ?>" >Edit</a>
                    <a href="hapus.php?produk_id=<?php echo $d['produk_id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>