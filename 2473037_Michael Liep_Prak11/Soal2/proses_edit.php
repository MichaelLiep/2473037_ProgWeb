<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    $nama = $conn->real_escape_string($nama);
    $kelas = $conn->real_escape_string($kelas);

    $sql = "UPDATE siswa SET nama = '$nama', kelas = '$kelas' WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    }
}

$conn->close();
?>