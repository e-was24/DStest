<!-- komentar/index.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Komentar</title>

    <?php
    echo " <link rel='stylesheet' type='text/css' href='penampung_komen.css'>";
    ?>
</head>

<body>
    <div class="cov_comentHolder">
        <h2 class="title">Tinggalkan Komentar</h2>
        <form method="POST" action="proses.php">
            Nama: <input type="text" name="nama" required><br><br>
            Komentar:<br>
            <textarea name="komentar" rows="4" cols="40" required></textarea><br><br>
            <input type="submit" value="Kirim">
        </form>
    </div>

</body>

</html>