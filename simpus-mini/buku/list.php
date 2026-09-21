<?php
$page_title = "Daftar Buku";
require_once __DIR__ . '/../includes/koneksi.php';
include __DIR__ . '/../includes/header.php';

$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$keyword = trim($_GET['q'] ?? '');

try {
    if ($keyword !== '') {
        $stmt = $pdo->prepare("SELECT * FROM buku WHERE judul ILIKE :keyword ORDER BY id DESC");
        $stmt->execute([':keyword' => "%{$keyword}%"]);
    } else {
        $stmt = $pdo->query("SELECT * FROM buku ORDER BY id DESC");
    }
    $daftarBuku = $stmt->fetchAll();
} catch (PDOException $e) {
    $daftarBuku = [];
    $errorDb = "Gagal mengambil data: " . $e->getMessage();
}
?>

<section>
    <h2>Daftar Buku</h2>
    <?php if ($flash): ?>
        <p class="flash flash-<?= htmlspecialchars($flash['type']); ?>"><?= htmlspecialchars($flash['pesan']); ?></p>
    <?php endif; ?>
    <?php if (isset($errorDb)): ?>
        <p class="flash flash-error"><?= htmlspecialchars($errorDb); ?></p>
    <?php endif; ?>

    <form action="list.php" method="GET" class="search-box">
        <label for="search-input">Cari Judul Buku</label>
        <input type="text" id="search-input" name="q" value="<?= htmlspecialchars($keyword) ?>" placeholder="Ketik judul buku...">
        <button type="submit">Cari</button>
    </form>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($daftarBuku)): ?>
                    <tr>
                        <td colspan="5">Belum ada data buku. Silakan tambah lewat menu "Tambah Buku".</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($daftarBuku as $buku): ?>
                        <tr>
                            <td><?= htmlspecialchars($buku['judul']); ?></td>
                            <td><?= htmlspecialchars($buku['pengarang']); ?></td>
                            <td><?= htmlspecialchars($buku['tahun']); ?></td>
                            <td><?= htmlspecialchars($buku['stok']); ?></td>
                            <td>
                                <a href="edit.php?id=<?= $buku['id']; ?>" class="btn-edit">Edit</a>
                                <a href="detail.php?id=<?= $buku['id']; ?>" class="btn-detail">Detail</a>
                                <a href="proses_hapus.php?id=<?= $buku['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus buku ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>