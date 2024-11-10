<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tolga Gündoğdu Fullstack Ödev</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body> 
    <main>

        <header>
            <div id="header-logo">
                <img src="assets/img/logo.png" alt="Logo" width="100" height="100">
            </div>

            <div class="header-menu">
                <button id="menu-toggle">&#9776;</button>
                <ul>
                    <li><a href="#">Ana Sayfa</a></li>
                    <li><a href="#">Ürünler</a></li>
                    <li><a href="#">Hakkımızda</a></li>
                    <li><a href="#">İletişim</a></li>
                </ul>
           </div>
        </header>

        <div class="container">

            <h2>Ayakkabı Renk ve Numara Seçimi</h2>
            <form id="shoe-form" method="POST" action="">
                <label for="color">Renk Seçin:</label>
                <select name="color" id="color" required>
                    <option value="siyah">Siyah</option>
                    <option value="beyaz">Beyaz</option>
                    <option value="kırmızı">Kırmızı</option>
                    <option value="mavi">Mavi</option>
                </select>

                <label for="size">Numara Seçin:</label>
                <select name="size" id="size" required>
                    <?php
                    for ($num = 36; $num <= 45; $num++) {
                        echo "<option value='$num'>$num</option>";
                    }
                    ?>
                </select>
                
                <button type="submit" name="submit">Sepete Ekle</button>
            </form>
                
            <?php
            if (isset($_POST['submit'])) {
                $color = $_POST['color'];
                $size = $_POST['size'];
                echo "<p>Seçilen Renk: $color</p>";
                echo "<p>Seçilen Numara: $size</p>";
            }
            ?>
            <p>Eğer Siyah renk ayakkabının 40 numarasını seçerseniz js alert çalışacak ve size stokta olmadığını söyleyecektir.</p>
        </div>
    </main>
</body>
<script src="assets/js/app.js"></script>
</html>