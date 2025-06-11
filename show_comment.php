<link rel="stylesheet" href="style/show_komen.css">
<br>
<h3 class="title">Daftar Komentar</h3>

<div id="komentarContainer"></div>
<button id="showMoreBtn">Lihat Selengkapnya</button>

<?php
$file = 'Komentar/data/komentar.json';
$komentarData = [];

if (file_exists($file)) {
    $komentarData = json_decode(file_get_contents($file), true);
    if (!is_array($komentarData)) {
        $komentarData = []; // fallback kalau JSON rusak
    }
}
?>

<script type="text/javaScript">
// Ambil data komentar dari PHP (array)
const komentarData = <?php echo json_encode($komentarData); ?>;

// Elemen DOM
const container = document.getElementById("komentarContainer");
const showMoreBtn = document.getElementById("showMoreBtn");

// Konfigurasi tampilan batch
let currentIndex = 0;
const batchSize = 10;

// Fungsi render komentar
function renderKomentar() {
    const end = currentIndex + batchSize;
    const batch = komentarData.slice(currentIndex, end);

    batch.forEach(komentar => {
        const div = document.createElement("div");
        div.className = "Container";
        div.innerHTML = `
            <div class="commentContainer">
                <div class="coverComment">
                    <strong>${escapeHTML(komentar.nama)}</strong><br>
                    <p class="Komen">${escapeHTML(komentar.komentar).replace(/\n/g, "<br>")}</p>
                </div>
            </div>
        `;
        container.appendChild(div);
    });

    currentIndex += batch.length;

    // Sembunyikan tombol jika semua komentar sudah ditampilkan
    if (currentIndex >= komentarData.length) {
        showMoreBtn.style.display = "none";
    }
}

// Escape karakter HTML untuk mencegah XSS
function escapeHTML(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
}

// Event: Saat tombol diklik
showMoreBtn.addEventListener("click", renderKomentar);

// Tampilkan 10 komentar pertama saat halaman dimuat
renderKomentar();
</script>