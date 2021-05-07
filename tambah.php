<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");

if( isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $NIM = $_POST["NIM"];

    $query = "INSERT INTO users
            VALUES
            ('','$name','$email','$NIM','','')";
    mysqli_query($conn, $query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="name">nama : </label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="NIM">NIM : </label>
                <input type="text" name="NIM" id="NIM">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Daftar Mahasiswa</a>
</body>
</html>