
<?php include "theme/header.php" ?>




<div class="container">
            <h2>PHP Kullanarak Ayakkabı Renk ve Numara Seçimi</h2><br>
            <form id="shoe-form" method="POST" action="">
                <label for="color">Renk Seçin:</label>
                <select class="buttons" name="color" id="color" required>
                    <option value="siyah">Siyah</option>
                    <option value="beyaz">Beyaz</option>
                    <option value="kırmızı">Kırmızı</option>
                    <option value="mavi">Mavi</option>
                </select>

                <label for="size">Numara Seçin:</label>
                <select class="buttons" name="size" id="size" required>
                </select>
                
                <button class="buttons" type="submit" name="submit">Sepete Ekle</button>
            </form><br>
                
            <?php
            if (isset($_POST['submit'])) {
                $color = $_POST['color'];
                $size = $_POST['size'];
                echo "<p>Seçilen Renk: $color</p>";
                echo "<p>Seçilen Numara: $size</p>";
            }
            ?><br>
            <p>Not: Eğer Siyah renk ayakkabının 40 numarasını seçerseniz js alert çalışacak ve size stokta olmadığını söyleyecektir.</p>
        </div>

<?php include "theme/footer.php" ?>