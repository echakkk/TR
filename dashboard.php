<?php
session_start();
include 'db_valesca.php';

// Daftar tabel yang valid sesuai kategori
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

// Fungsi untuk menampilkan pesan
function showMessage($message, $type = 'success') {
    echo "<div class='bg-".($type === 'success' ? "green" : "red")."-500 text-white p-4 mb-4'>{$message}</div>";
}

// Cek apakah user sudah login, jika tidak redirect ke login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: home.php");
    exit();
}

// Untuk menambahkan data baru, id akan di-generate secara otomatis.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['kategori'], $_POST['link'], $_POST['price'])) {
    $title = $_POST['title'];
    $kategori = $_POST['kategori'];
    $link = $_POST['link'];
    $price = $_POST['price'];

    if (!array_key_exists($kategori, $valid_categories)) {
        showMessage("Kategori tidak valid!", 'error');
        exit();
    }

    $table_name = $valid_categories[$kategori];
    $sql = "INSERT INTO $table_name (title, kategori, link, price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $kategori, $link, $price);

    if ($stmt->execute()) {
        showMessage("Menu berhasil di-upload ke tabel {$table_name}!");
    } else {
        showMessage("Error: " . $stmt->error, 'error');
    }
    $stmt->close();
}

// Untuk delete, ID akan tetap sesuai dengan yang terhapus
if (isset($_GET['delete_id'], $_GET['kategori'])) {
    $id = $_GET['delete_id'];
    $kategori = $_GET['kategori'];

    if (!array_key_exists($kategori, $valid_categories)) {
        showMessage("Kategori tidak valid!", 'error');
        exit();
    }

    $table_name = $valid_categories[$kategori];
    $sql = "DELETE FROM $table_name WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        showMessage("Data berhasil dihapus!");
    } else {
        showMessage("Error: " . $stmt->error, 'error');
    }
    $stmt->close();
}

// Ambil data kategori yang dipilih
$kategori = $_GET['kategori'] ?? 'brownies';
if (!array_key_exists($kategori, $valid_categories)) {
    $kategori = 'brownies';
}
$query = "SELECT * FROM {$valid_categories[$kategori]}";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<header class="bg-blue-600 py-4 shadow-lg">
    <div class="container mx-auto flex justify-between items-center px-6">
        <h1 class="text-3xl font-bold text-white">Dashboard</h1>
        <a href="?logout=true" 
           class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded transition duration-300">
            Logout
        </a>
    </div>
    </header>
<body class="bg-gray-50">
    
        <!-- Menu Kategori -->
        <div class="container mx-auto py-6">
    <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">
        <span class="bg-gradient-to-r from-blue-500 to-blue-700 text-transparent bg-clip-text">Admin</span>
    </h1>

    <!-- Menu Kategori -->
    <div class="flex flex-wrap justify-center gap-4 mb-10">
        <?php foreach ($valid_categories as $key => $table): ?>
            <a href="?kategori=<?= $key ?>" 
               class="bg-gradient-to-r from-green-400 to-blue-500 text-white text-lg font-semibold py-3 px-6 rounded-full shadow-lg hover:shadow-xl transition duration-300 hover:scale-105">
                <?= ucfirst($key) ?>
            </a>
        <?php endforeach; ?>
    </div>



        <!-- Form Upload -->
        <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Upload Menu </h2>
        <form action="dashboard.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Nama Produk:</label>
                <input type="text" id="title" name="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Nama Produk">
            </div>
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                <select id="kategori" name="kategori" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                    <option value="brownies">Brownies</option>
                    <option value="cake">Cake</option>
                    <option value="dessert">Dessert</option>
                    <option value="pastry">Pastry</option>
                    <option value="pizza">Pizza</option>
                    <option value="roti">Roti</option>
                    <option value="roti manis">Roti Manis</option>
                    <option value="roti manis box">Roti Manis Box</option>
                    <option value="snack">Snack</option>
                    <option value="tart">Tart</option>
                    <option value="tawar">Tawar</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="link" class="block text-gray-700 text-sm font-bold mb-2">Link Gambar:</label>
                <input type="file" id="link" name="link" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Gambar Produk">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                <input type="number" id="price" name="price" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan Harga Produk">
            </div>
            <div class="flex items-center justify-between">
                <input type="submit" value="Upload" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>
    </div>

        <!-- Tabel Data -->
        <div class="bg-white shadow-lg rounded-lg px-10 py-8">
    <h2 class="text-3xl font-bold mb-6 text-gray-800 border-b pb-4"><?= ucfirst($kategori) ?> Data</h2>
    <table class="w-full border-collapse bg-gray-50 overflow-hidden rounded-lg shadow-sm">
        <thead class="bg-gradient-to-r from-blue-500 to-blue-700 text-white">
            <tr>
                <th class="px-4 py-3 text-left font-semibold">NO</th>
                <th class="px-4 py-3 text-left font-semibold">Nama Produk</th>
                <th class="px-4 py-3 text-left font-semibold">Gambar</th>
                <th class="px-4 py-3 text-left font-semibold">Harga</th>
                <th class="px-4 py-3 text-center font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1; // Inisialisasi nomor urut
            while ($row = $result->fetch_assoc()): 
            ?>
            <tr class="border-t hover:bg-gray-100 transition duration-200">
                <td class="border px-4 py-3 text-gray-700"><?= $no++ ?></td> <!-- Ubah ke nomor urut -->
                <td class="border px-4 py-3 text-gray-700"><?= $row['title'] ?></td>
                <td class="border px-4 py-3">
                    <img src="http://localhost/TR/Produk/<?= isset($_GET['kategori']) ? ucfirst($_GET['kategori']) : 'Brownies' ?>/<?= $row['link'] ?>" 
                        alt="<?= $row['title'] ?>" 
                        class="h-16 w-16 object-cover rounded-md shadow-sm">
                </td>
                <td class="border px-4 py-3 text-gray-700">Rp <?= number_format($row['price'], 0, ',', '.') ?></td>
                <td class="border px-4 py-3 text-center flex justify-center gap-2">
                <a href="?kategori=<?= $kategori ?>&delete_id=<?= $row['id'] ?>" 
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-sm transition duration-300"
                onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                <a href="edit.php?kategori=<?= $kategori ?>&edit_id=<?= $row['id'] ?>" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-sm transition duration-300">
                Edit
                </a>
            </td>

            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

    <style>
        .btn-blue, .btn-red, .btn-category {}
        .form-input {}
    </style>
</body>
</html>
