function muatDaftarAnggota() {
    return muatDataTabel("../data/anggota.json", ["no_anggota", "nama", "alamat", "no_hp"]);
}

document.addEventListener("DOMContentLoaded", muatDaftarAnggota);