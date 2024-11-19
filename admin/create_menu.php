<?php
require_once '../config/auth.php';
requireAdmin();
require_once '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO menu (name, price, description) VALUES (:name, :price, :description)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'price' => $price, 'description' => $description]);

    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Menu</title>
</head>

<body>
    <h1>Tambah Menu</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Nama Menu" required>
        <input type="number" name="price" placeholder="Harga" required>
        <textarea name="description" placeholder="Deskripsi"></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>