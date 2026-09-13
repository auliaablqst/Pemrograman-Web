// ===== Hamburger menu (JS-driven, menggantikan checkbox hack) =====
function initNavToggle() {
    const toggleBtn = document.getElementById("nav-toggle-btn");
    const nav = document.querySelector("header nav");
    if (!toggleBtn || !nav) return;

    toggleBtn.addEventListener("click", function () {
        nav.classList.toggle("nav-open");
    });
}

// ===== Counter jumlah baris tabel =====
function updateCounter(table) {
    const counterEl = document.getElementById("counter-info");
    if (!counterEl || !table) return;

    const rows = table.querySelectorAll("tbody tr");
    const total = rows.length;
    let tampil = 0;
    rows.forEach(function (row) {
        if (row.style.display !== "none") tampil++;
    });

    counterEl.textContent = "Menampilkan " + tampil + " dari " + total + " buku";
}

// ===== Konfirmasi hapus (front-end only, belum ke server) =====
// Memakai event delegation di document karena baris tabel sekarang
// dirender dinamis via fetch (lihat buku.js/anggota.js) sehingga
// tombol .btn-hapus belum tentu ada saat DOMContentLoaded.
function initHapusConfirm() {
    document.addEventListener("click", function (e) {
        const btn = e.target.closest(".btn-hapus");
        if (!btn) return;

        const row = btn.closest("tr");
        const table = btn.closest("table");
        const nama = row ? row.querySelector("td")?.textContent : "data ini";
        const yakin = confirm("Yakin ingin menghapus \"" + nama + "\"?");
        if (yakin && row) {
            row.remove();
            if (table) updateCounter(table);
        }
    });
}

// ===== Filter/pencarian tabel real-time (hanya kolom Judul) =====
function initTableFilter() {
    const input = document.getElementById("search-input");
    const table = document.querySelector(".table-responsive table");
    if (!input || !table) return;

    updateCounter(table);

    input.addEventListener("keyup", function () {
        const keyword = input.value.toLowerCase();
        const rows = table.querySelectorAll("tbody tr");
        rows.forEach(function (row) {
            const kolomJudul = row.querySelector("td");
            const teks = kolomJudul ? kolomJudul.textContent.toLowerCase() : "";
            row.style.display = teks.includes(keyword) ? "" : "none";
        });
        updateCounter(table);
    });
}

// ===== Validasi form (client-side, pakai array aturan + forEach) =====
function tampilkanError(input, pesan) {
    hapusError(input);
    const span = document.createElement("span");
    span.className = "error";
    span.textContent = pesan;
    input.insertAdjacentElement("afterend", span);
}

function hapusError(input) {
    const next = input.nextElementSibling;
    if (next && next.classList.contains("error")) {
        next.remove();
    }
}

function initValidasiForm() {
    const form = document.getElementById("form-tambah");
    if (!form) return;

    const aturanValidasi = [
        {
            selector: "[name='judul'], [name='nama']",
            cek: function (input) {
                return input.value.trim() !== "";
            },
            pesan: "Field ini wajib diisi."
        },
        {
            selector: "[name='pengarang']",
            cek: function (input) {
                return input.value.trim() !== "";
            },
            pesan: "Pengarang wajib diisi."
        },
        {
            selector: "[name='tahun']",
            cek: function (input) {
                const nilai = parseInt(input.value, 10);
                return !isNaN(nilai) && nilai >= 1900 && nilai <= 2026;
            },
            pesan: "Tahun harus di antara 1900-2026."
        },
        {
            selector: "[name='stok']",
            cek: function (input) {
                const nilai = parseInt(input.value, 10);
                return !isNaN(nilai) && nilai >= 0;
            },
            pesan: "Stok tidak boleh negatif."
        },
        {
            selector: "[name='isbn']",
            cek: function (input) {
                if (input.value.trim() === "") return true; // ISBN opsional
                return /^[0-9-]+$/.test(input.value.trim());
            },
            pesan: "ISBN hanya boleh berisi angka dan tanda hubung."
        }
    ];

    form.addEventListener("submit", function (e) {
        let valid = true;

        aturanValidasi.forEach(function (aturan) {
            const input = form.querySelector(aturan.selector);
            if (!input) return;

            if (aturan.cek(input)) {
                hapusError(input);
            } else {
                tampilkanError(input, aturan.pesan);
                valid = false;
            }
        });

        if (!valid) {
            e.preventDefault();
        }
    });
}

document.addEventListener("DOMContentLoaded", function () {
    initNavToggle();
    initHapusConfirm();
    initTableFilter();
    initValidasiForm();
});