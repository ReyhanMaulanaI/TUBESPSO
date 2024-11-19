<?php
session_start();
// Pastikan hanya admin yang bisa mengakses
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Koneksi ke database
require_once 'config/db.php';

// Ambil data dari database
$menus = $pdo->query("SELECT * FROM menu")->fetchAll();
$contacts = $pdo->query("SELECT * FROM contact")->fetchAll();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-logo">MyWebsite</div>
        <ul class="navbar-nav">
            <li><a href="admin.php">Dashboard</a></li>
            <li><a href="add_menu.php">Tambah Menu</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <h1>Dashboard Admin</h1>

    <section>
        <h2>Manajemen Menu</h2>
        <a href="add_menu.php" class="btn">Tambah Menu</a>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($menus as $menu): ?>
                <tr>
                    <td><?= $menu['id'] ?></td>
                    <td><?= $menu['name'] ?></td>
                    <td>IDR <?= number_format($menu['price'], 0, ',', '.') ?></td>
                    <td><?= $menu['description'] ?></td>
                    <td>
                        <a href="edit_menu.php?id=<?= $menu['id'] ?>">Edit</a>
                        <a href="delete_menu.php?id=<?= $menu['id'] ?>"
                            onclick="return confirm('Hapus menu ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <section>
        <h2>Pesan Kontak</h2>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Pesan</th>
                <th>Tanggal</th>
            </tr>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?= $contact['id'] ?></td>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['email'] ?></td>
                    <td><?= $contact['phone'] ?></td>
                    <td><?= $contact['message'] ?></td>
                    <td><?= $contact['created_at'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>

</html>