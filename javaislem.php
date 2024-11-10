<?php include "theme/header.php" ?>



<div class="container">
    <h2>Java Script ile Ayakkabı Renk ve Numara Seçimi</h2><br>
    <form id="shoe-form">
        <label for="color">Renk Seçin:</label>
        <select name="color" id="color" required>
            <option value="siyah">Siyah</option>
            <option value="beyaz">Beyaz</option>
            <option value="kırmızı">Kırmızı</option>
            <option value="mavi">Mavi</option>
        </select>
        
        <label for="size">Numara Seçin:</label>
        <select name="size" id="size" required>
        </select>

        <button type="button" onclick="addToCart()">Sepete Ekle</button>
    </form>

    <div class="output" id="output"></div><br>
    <p>Not: Eğer Siyah renk ayakkabının 40 numarasını seçerseniz js alert çalışacak ve size stokta olmadığını söyleyecektir.</p>

</div>





<?php include "theme/footer.php" ?>