<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $komentar = strip_tags($_POST['komentar']);

    // Ambil username aktif dari session
    $username = $_SESSION['username'] ?? null;
    $nama = 'users'; // Default Anonim

    // Cek apakah username tersedia
    if ($username) {
        $loginsFile = __DIR__ . '../../Data/logins.json';

        if (file_exists($loginsFile)) {
            $logins = json_decode(file_get_contents($loginsFile), true);

            // Cari entri user terbaru dengan username cocok
            foreach (array_reverse($logins) as $entry) {
                if (isset($entry['username']) && $entry['username'] === $username) {
                    // Cek apakah ada field 'nama' atau gunakan username
                    $nama = $entry['nama'] ?? $username;
                    break;
                }
            }
        }
    }

    // Lokasi file komentar
    $file = __DIR__ . '/data/komentar.json';
    $komentarData = [];

    // Baca file komentar jika ada
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $decoded = json_decode($content, true);
        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
            $komentarData = $decoded;
        }
    }

    // Tambahkan komentar baru di atas
    array_unshift($komentarData, [
        'nama' => $nama,
        'komentar' => $komentar
    ]);

    // Simpan ulang ke file komentar
    file_put_contents($file, json_encode($komentarData, JSON_PRETTY_PRINT));

    // Redirect
    header("Location: ../index.php");
    exit;
}
?>

