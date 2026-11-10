<?php
include 'koneksi.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $role = 'admin,petugas';

    $query = "INSERT INTO 'login' (username, password, email, role) VALUES ('$username', '$password', '$email', '$role')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Registrasi Berhasil!";
    } else {
        echo "Registrasi Gagal!.";
    }
}
?>

<!DOCTYPE html>
<html>


<head>
    <h1>Register</h1>
</head>
<style>
    body {
        background: linear-gradient(#642929, #c9c9c9);
        background-repeat: no-repeat;
        font-family: Arial, sans-serif;
        max-width: 400px;
        margin: 50px auto;
        padding: 150px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"],
    input[type="email"],
    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #000000a6;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="role">Role:</label>
            <input type="text" id="role" name="role" value=""><br><br>

            <input type="submit" value="Register">
        </form>
    </div>
</body>