<?php
$page_title = "Tambah Anggota";
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);
?>

<section>
    <h2>Tambah Anggota Baru</h2>

    <?php if ($flash): ?>
        <p class="flash flash-<?php echo $flash['type']; ?>"><?php echo $flash['pesan']; ?></p>
    <?php endif; ?>

    <form id="form-tambah-anggota" method="post" action="proses_tambah.php">
        <div class="form-group">
            <label for="no_anggota">Nomor Anggota *</label>
            <input type="text" id="no_anggota" name="no_anggota" placeholder="Contoh: A001" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama Lengkap *</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="no_hp">Nomor HP</label>
            <input type="text" id="no_hp" name="no_hp">
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Simpan Anggota</button>
            <a href="list.php" class="btn-secondary">Batal</a>
        </div>
    </form>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>