<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    $sql = "INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES ('$nama', '$nim', '$jurusan', '$email')";

    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>
        <br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>
