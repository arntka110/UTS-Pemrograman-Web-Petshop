// menu kalkulasi
function hitung() {
    // Mengambil input
    let produk1 = parseFloat(document.getElementById("jmlproduk1").value);
    let produk2 = parseFloat(document.getElementById("jmlproduk2").value);
    let operator = document.getElementById("operator").value;

    // Melakukan operasi aritmatika sesuai operator yang dipilih
    let hasil;
    if (operator == "+") {
        hasil = produk1 + produk2;
    } else if (operator == "-") {
        hasil = produk1 - produk2;
    } else if (operator == "*") {
        hasil = produk1 * produk2;
    } else if (operator == "/") {
        hasil = produk1 / produk2;
    }
    
    // Menampilkan hasil operasi aritmatika
    document.getElementById("hasil").value = hasil;
}

hitung();