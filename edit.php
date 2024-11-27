<?php
session_start();
include 'db_valesca.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_GET['edit_id'], $_GET['kategori'])) {
    die("Parameter tidak lengkap!");
}

$edit_id = $_GET['edit_id'];
$kategori = $_GET['kategori'];

// Validasi kategori
$valid_categories = [
    'brownies' => 'brownies',
    'cake' => 'cake',
    'dessert' => 'dessert',
    'pastry' => 'pastry',
    'pizza' => 'pizza',
    'rotimanis' => 'rotimanis',
    'rotimanisbox' => 'rotimanisbox',
    'snack' => 'snack',
    'tart' => 'tart',
    'tawar' => 'tawar',
];

if (!array_key_exists($kategori, $valid_categories)) {
    die("Kategori tidak valid!");
}

$table_name = $valid_categories[$kategori];

// Ambil data berdasarkan ID
$query = "SELECT * FROM $table_name WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $edit_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Data tidak ditemukan!");
}

// Proses update data
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['link'], $_POST['price'])) {
    $title = $_POST['title'];
    $link = $_POST['link'];
    $price = $_POST['price'];

    $update_query = "UPDATE $table_name SET title = ?, link = ?, price = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_query);
    $update_stmt->bind_param("ssii", $title, $link, $price, $edit_id);

    if ($update_stmt->execute()) {
        header("Location: dashboard.php?kategori=$kategori");
        exit();
    } else {
        $error_message = "Gagal memperbarui data: " . $update_stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="container mx-auto py-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">
            <span class="bg-gradient-to-r from-blue-500 to-blue-700 text-transparent bg-clip-text">Edit Data</span>
        </h1>

        <?php if (isset($error_message)): ?>
            <div class="bg-red-500 text-white p-4 mb-4"><?= $error_message ?></div>
        <?php endif; ?>

        <form action="edit.php?edit_id=<?= $edit_id ?>&kategori=<?= $kategori ?>" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk:</label>
                <input type="text" id="title" name="title" value="<?= $row['title'] ?>" required 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link Gambar:</label>
                <input type="file" id="link" name="link" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Gambar Produk">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                <input type="number" id="price" name="price" value="<?= $row['price'] ?>" required 
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <input type="submit" value="Simpan" 
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                <a href="dashboard.php?kategori=<?= $kategori ?>" 
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Batal
                </a>
            </div>
        </form>
    </div>
</body>
</html>
