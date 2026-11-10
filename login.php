<?php
include 'koneksi.php';
if (isset($_GET['username']) && isset($_GET['password'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {

        echo "Login successful!";

    } else {

        echo "Invalid username, password, or email.";
    }
}

?>

<!DOCTYPE html>
<html>


<head>
    <h1>Login</h1>
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
    input[type="password"] {
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
        <form action="produk.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
            <p>Tidak Punya Akun? <a href="register.php">Register here</a></p>
        </form>
    </div>
</body>