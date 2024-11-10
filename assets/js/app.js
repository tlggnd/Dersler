document.getElementById("shoe-form").addEventListener("submit", function(event) {
    const selectedColor = document.getElementById("color").value;
    const selectedSize = document.getElementById("size").value;
    if (selectedColor === "siyah" && selectedSize === "40") {
        alert("Üzgünüz, siyah renk ayakkabının 40 numarası stokta yok.");
        event.preventDefault();
    }
});