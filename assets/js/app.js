document.getElementById("shoe-form").addEventListener("submit", function(event) {
    const selectedColor = document.getElementById("color").value;
    const selectedSize = document.getElementById("size").value;
    if (selectedColor === "siyah" && selectedSize === "40") {
        alert("Üzgünüz, siyah renk ayakkabının 40 numarası stokta yok.");
        event.preventDefault();
    }
});



// Ayakkabı numaralarını dinamik olarak doldurmak için
const sizeSelect = document.getElementById("size");
for (let num = 36; num <= 45; num++) {
    const option = document.createElement("option");
    option.value = num;
    option.textContent = num;
    sizeSelect.appendChild(option);
}

// Sepete ekleme işlemi
function addToCart() {
    const selectedColor = document.getElementById("color").value;
    const selectedSize = document.getElementById("size").value;

    // Siyah renk ve 40 numara stokta yoksa uyarı göster
    if (selectedColor === "siyah" && selectedSize === "40") {
        alert("Üzgünüz, siyah renk ayakkabının 40 numarası stokta yok.");
        return;
    }

    // Seçilen renk ve numarayı göster
    const output = document.getElementById("output");
    output.textContent = `Seçilen Renk: ${selectedColor}, Seçilen Numara: ${selectedSize}`;
}
