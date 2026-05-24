<?php
include 'koneksi.php';
$sql = "SELECT * FROM siswa";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
            width: 600px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .btn-tambah {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
            text-align: left;
            padding: 12px;
            border-bottom: 2px solid #ddd;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            color: #555;
        }
        .btn-action {
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
            margin-right: 5px;
        }
        .btn-edit {
            background-color: #2196F3;
        }
        .btn-hapus {
            background-color: #f44336;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Siswa</h2>
    
    <a href="tambah.php" class="btn-tambah">Tambah Data</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["kelas"]) . "</td>";
                    echo "<td>";
                    echo "<a href='edit.php?id=" . $row["id"] . "' class='btn-action btn-edit'>Edit</a>";
                    echo "<a href='hapus.php?id=" . $row["id"] . "' class='btn-action btn-hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align:center;'>Tidak ada data siswa</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
<?php
$conn->close();
?>