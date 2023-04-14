// menu admin
var data = [
    "Pedigree for Dog Adult 2.6kg",
    "Royal Canin Golden Retriever for Dog Adult 1.5kg",
    "Royal Canin Medium for Dog Adult 1.5kg",
    "Snack Pet 35gr",
    "Whiskas for Cat Adult 1+ 1.2kg",
    "Whiskas Tuna for Cat Adult 80gr"
];

var jmldata = [
    "30",
    "50",
    "50",
    "80",
    "25",
    "10"
]

function tampil() {
    var tabel = document.getElementById("tabel");
    tabel.innerHTML = "<tr><th>No</th><th>Nama Produk</th><th>Jumlah Produk</th><th>Aksi</th></tr>";
    for (let i = 0; i < data.length; i++) {
        var btnEdit = "<button class='btn-edit' href='#' onclick='edit(" + i + ")'>Edit</button>";
        var btnHapus = "<button class='btn-hapus' href='#' onclick='hapus(" + i + ")'>Hapus</button>";
        no = i + 1;
        tabel.innerHTML += "<tr><td>" + no +  "</td><td>" + data[i] + "</td><td>" + jmldata[i] + "</td><td>" + btnEdit + btnHapus + "</tr>";
    }
}

function tambah() {
    var input = document.querySelector("input[name=nmproduk]");
    var input2 = document.querySelector("input[name=jumlahproduk]");
    data.push(input.value);
    jmldata.push(input2.value);
    
    tampil();
    input.value = "";
    alert("Data berhasil ditambahkan!");
}

function edit(id) {
    var baru = prompt("Nama Produk", data[id]);
    var baru2 = prompt("Jumlah Produk", data[id]);
    data[id] = baru;
    jmldata[id] = baru2;
    alert("Data berhasil ditambahkan!");
    tampil();
}

function hapus(id) {
    data.pop(id);
    jmldata.pop(id);
    alert("Data berhasil dihapus!");
    tampil();
}

tampil();