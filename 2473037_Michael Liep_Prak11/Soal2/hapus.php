<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM siswa WHERE id = $id";
    $conn->query($sql);
}

$conn->close();
header("Location: index.php");
exit();
?>