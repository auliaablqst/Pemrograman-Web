function muatDaftarBuku() {
    return muatDataTabel("../data/buku.json", ["judul", "pengarang", "tahun", "stok", "kategori"]);
}

document.addEventListener("DOMContentLoaded", function () {
    muatDaftarBuku();
    const reloadBtn = document.getElementById("reload-btn");
    if (reloadBtn) {
        reloadBtn.addEventListener("click", muatDaftarBuku);
    }
});