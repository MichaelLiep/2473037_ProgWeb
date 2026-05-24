<?php
include 'koneksi.php';

$id = "";
$nama = "";
$kelas = "";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM siswa WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $kelas = $row['kelas'];
    } else {
        header("Location: index.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 500px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .btn {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn-update {
            background-color: #4CAF50;
            margin-bottom: 10px;
        }
        .btn-kembali {
            background-color: #2196F3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit Data Siswa</h2>
    
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
        </div>
        
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" value="<?php echo htmlspecialchars($kelas); ?>" required>
        </div>
        
        <button type="submit" class="btn btn-update">Update</button>
        <br>
        <a href="index.php" class="btn btn-kembali">Kembali</a>
    </form>
</div>

</body>
</html>
<?php
$conn->close();
?>