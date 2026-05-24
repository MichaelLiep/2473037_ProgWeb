<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
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
        .btn-simpan {
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
    <h2>Tambah Data Siswa</h2>
    
    <form action="proses_tambah.php" method="POST">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>
        </div>
        
        <button type="submit" class="btn btn-simpan">Simpan</button>
        <br>
        <a href="index.php" class="btn btn-kembali">Kembali</a>
    </form>
</div>

</body>
</html>