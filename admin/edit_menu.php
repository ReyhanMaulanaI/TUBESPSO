<?php
require_once '../config/auth.php';
requireAdmin();
require_once '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM menu WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
$menu = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE menu SET name = :name, price = :price, description = :description WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'price' => $price, 'description' => $description, 'id' => $id]);

    header('Location: dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Menu</title>
</head>

<body>
    <h1>Edit Menu</h1>
    <form method="POST">
        <input type="text" name="name" value="<?= $menu['name'] ?>" required>
        <input type="number" name="price" value="<?= $menu['price'] ?>" required>
        <textarea name="description"><?= $menu['description'] ?></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>