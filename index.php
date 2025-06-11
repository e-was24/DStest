<?php
echo "<link rel='stylesheet' href='index_Layout/navbody/NAVIGATION-bar.css' />";
echo "<link rel='stylesheet' href='index_Layout/content/STYLE-L.css' />";
echo "<link rel='stylesheet' href='style/COMMENT.css' />";
echo "<link rel='stylesheet' href='style/tampilan.css'/>";
echo "<link rel='stylesheet' href='style/ANIMASI-STYLE.css'/>";
echo "<link rel='stylesheet' href='style/G-style.css'/>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimas Store</title>
    <link rel="stylesheet" href="INDEX.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>

<body>
    <div class="conatiner-content">
        <div class="animation">
            <p><span>We</span>lcome</p>
            <h2>Dimas<span> Store</span></h2>
            <p class="small-text">Present</p>
        </div>
        <div class="cover-main-content">
            <div class="show-bar">
                <button class="btn" onclick="openShopPage()">Shop</button>
                <button class="btn" onclick="openGrafik()">Kunjungan</button>
                <button class="btn" onclick="openComentForm()">Forum</button>
                <button class="btn" onclick="closeAll()">Close</button>
            </div>
            <div class="cover-navbar" style="z-index: 999;">
                <?php include 'index_Layout/navbody/index.html' ?>
            </div>
            <div class="content">
                <?php include 'index_Layout/content/index.html' ?>
            </div>
            <div class="grafik">
                <?php include 'UserAccount/User_Login_Account/login_grafik.php' ?>
            </div>
            <div class="Bar_coment">
                <?php include 'show_comment.php' ?>
            </div>
        </div>
    </div>
    <!-- Tambahkan area untuk chat
    <div id="chat-box"></div> -->

    <!-- Tambahkan skrip sederhana -->
    <!-- <script>
        async function sendToGPT(message) {
            const response = await fetch("https://api.openai.com/v1/chat/completions", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer YOUR_API_KEY" // Ganti dengan API key Anda
                },
                body: JSON.stringify({
                    model: "gpt-4", // atau gpt-4o
                    messages: [{ role: "user", content: message }]
                })
            });

            const data = await response.json();
            const reply = data.choices[0].message.content;
            document.getElementById("chat-box").innerHTML += "<p><b>Bot:</b> " + reply + "</p>";
        }

        // Contoh penggunaan
        sendToGPT("Apa saja produk terbaru?");
    </script> -->

    <script src="./index_script/script.js"></script>
    <script type="text/javascript" src="./index_script/inAnimation/scripts.js"></script>
</body>

</html>