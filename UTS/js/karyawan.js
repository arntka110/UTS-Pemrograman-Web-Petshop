var nama = [
    "Ariantika Putri Maharani",
    "Andi Nabila Fadiya",
    "Nabila Aulia Azzahra",
    "Ardita Dyah Paramita",
    "Riska Dwi Anggraini",
    "Nashafa Azka"
];

var jabatan = [
    "Manager",
    "Staff",
    "Staff",
    "Admin",
    "Admin",
    "Staff"
]

function tampil() {
    var tabel = document.getElementById("tabel");
    tabel.innerHTML = "<tr><th>No</th><th>Nama Karyawan</th><th>Jabatan</th><th>Aksi</th></tr>";
    for (let i = 0; i < nama.length; i++) {
        var btnEdit = "<button class='btn-edit' href='#' onclick='edit(" + i + ")'>Edit</button>";
        var btnHapus = "<button class='btn-hapus' href='#' onclick='hapus(" + i + ")'>Hapus</button>";
        no = i + 1;
        tabel.innerHTML += "<tr><td>" + no +  "</td><td>" + nama[i] + "</td><td>" + jabatan[i] + "</td><td>" + btnEdit + btnHapus + "</tr>";
    }
}

function tambah() {
    var input = document.querySelector("input[name=karyawan]");
    var input2 = document.querySelector("input[name=jabatan]");
    nama.push(input.value);
    jabatan.push(input2.value);
    
    tampil();
    input.value = "";
    alert("Data berhasil ditambahkan!");
}

function edit(id) {
    var baru = prompt("Nama Karyawan", nama[id]);
    var baru2 = prompt("Jabatan Karyawan", jabatan[id]);
    nama[id] = baru;
    jabatan[id] = baru2;
    alert("Data berhasil diubah!");
    tampil();
}

function hapus(id) {
    nama.pop(id);
    jabatan.pop(id);
    alert("Data berhasil dihapus!");
    tampil();
}

tampil();