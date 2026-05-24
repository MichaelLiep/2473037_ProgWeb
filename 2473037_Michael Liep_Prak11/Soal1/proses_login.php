<?php
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Login</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 30px;
        }

        h1,
        h2 {
            margin: 5px 0;
        }

        .success-title {
            color: #000;
            font-size: 32px;
        }

        .success-welcome {
            color: #000;
            font-size: 28px;
        }

        .blue-text {
            color: blue;
        }

        .error-text {
            color: red;
            font-size: 28px;
        }

        .black-bold {
            color: black;
            font-weight: bold;
        }

        .back-link {
            display: inline-block;
            margin-top: 15px;
            color: #4B0082;
            font-size: 24px;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <?php
    if ($username === "admin" && $password === "admin") {
        echo "<h1 class='success-title'>Login berhasil!</h1>";
        echo "<h2 class='success-welcome'>Selamat datang, <span class='blue-text'>admin</span>.</h2>";
    } else {
        $safe_username = htmlspecialchars($username);
        echo "<h2 class='error-text'>Username : <span class='black-bold'>{$safe_username}</span> Tidak Terdaftar!</h2>";
    }
    ?>

    <a href="login.html" class="back-link">kembali ke halaman login</a>

</body>

</html>