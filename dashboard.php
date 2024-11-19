<?php
// dashboard.php
session_start();
include 'db_valesca.php';

// Cek apakah user sudah login, jika tidak redirect ke login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil data dari tabel yang dipilih
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : 'brownies';
$query = "SELECT * FROM $kategori";
$result = $conn->query($query);

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: home.php");
    exit();
}

//UPLOAD
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $kategori = $_POST['kategori'];
    $link = $_POST['link'];
    $price = $_POST['price'];

    // Daftar tabel yang valid sesuai kategori
    $valid_tables = [
        'brownies' => 'brownies',
        'cake' => 'cake',
        'dessert' => 'dessert',
        'pastry' => 'pastry',
        'pizza' => 'pizza',
        'roti manis' => 'roti_manis',
        'roti manis box' => 'roti_manis_box',
        'snack' => 'snack',
        'tart' => 'tart',
        'tawar' => 'tawar',
    ];

    // Validasi kategori untuk memastikan tabel tujuan valid
    if (!array_key_exists($kategori, $valid_tables)) {
        echo "<div class='bg-red-500 text-white p-4 mb-4'>Kategori tidak valid!</div>";
        exit();
    }

    // Pilih tabel berdasarkan kategori
    $table_name = $valid_tables[$kategori];

    // Menyimpan data ke tabel yang sesuai
    $sql = "INSERT INTO $table_name (title, kategori, link, price) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $kategori, $link, $price);

    if ($stmt->execute()) {
        echo "<div class='bg-green-500 text-white p-4 mb-4'>Menu berhasil di-upload ke tabel $table_name!</div>";
    } else {
        echo "<div class='bg-red-500 text-white p-4 mb-4'>Error: " . $stmt->error . "</div>";
    }
    $stmt->close();  
}

//DELETE
$kategori = $_GET['kategori'] ?? 'brownies'; // Default kategori
$valid_categories = ['brownies', 'cake', 'dessert', 'pastry', 'pizza', 'roti', 'roti manis', 'roti manis box', 'snack', 'tart', 'tawar'];

if (!in_array($kategori, $valid_categories)) {
    echo "<div class='bg-red-500 text-white p-4 mb-4'>Kategori tidak valid!</div>";
    exit();
}

// Fungsi delete
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM $kategori WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $message = "Data berhasil dihapus!";
    } else {
        $message = "Error: " . $stmt->error;
    }

    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <div class="container mx-auto py-6">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-10">Dashboard Admin</h1>
        
        <!-- Menu Kategori -->
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <a href="?kategori=brownies" class="btn-category">Brownies</a>
            <a href="?kategori=cake" class="btn-category">Cake</a>
            <a href="?kategori=dessert" class="btn-category">Dessert</a>
            <a href="?kategori=pastry" class="btn-category">Pastry</a>
            <a href="?kategori=pizza" class="btn-category">Pizza</a>
            <a href="?kategori=roti manis" class="btn-category">Roti Manis</a>
            <a href="?kategori=roti manis box" class="btn-category">Roti Manis Box</a>
            <a href="?kategori=snack" class="btn-category">Snack</a>
            <a href="?kategori=tart" class="btn-category">Tart</a>
            <a href="?kategori=tawar" class="btn-category">Tawar</a>
        </div>

        <!-- Form Upload -->
        <div class="bg-white shadow-md rounded-lg px-10 py-8 mb-10">
            <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Upload Menu</h2>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-semibold mb-2">Judul:</label>
                    <input type="text" id="title" name="title" required class="form-input" placeholder="Masukkan judul brownies">
                </div>
                <div class="mb-6">
                    <label for="kategori" class="block text-gray-700 font-semibold mb-2">Kategori:</label>
                    <select id="kategori" name="kategori" required class="form-input">
                        <option value="brownies">Brownies</option>
                        <option value="cake">Cake</option>
                        <option value="dessert">Dessert</option>
                        <option value="pastry">Pastry</option>
                        <option value="pizza">Pizza</option>
                        <option value="roti manis">Roti Manis</option>
                        <option value="roti manis box">Roti Manis Box</option>
                        <option value="snack">Snack</option>
                        <option value="tart">Tart</option>
                        <option value="tawar">Tawar</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="link" class="block text-gray-700 font-semibold mb-2">Upload Gambar:</label>
                    <input type="file" id="link" name="link" required class="form-input">
                </div>
                <div class="mb-6">
                    <label for="price" class="block text-gray-700 font-semibold mb-2">Harga:</label>
                    <input type="number" id="price" name="price" required class="form-input" placeholder="Masukkan harga brownies">
                </div>
                <div class="flex justify-end">
                    <input type="submit" value="Upload" class="btn-blue">
                </div>
            </form>
        </div>

        <!-- Notifikasi -->
        <?php if (isset($message)): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?= $message ?>
            </div>
        <?php endif; ?>

        <!-- Tabel Data -->
        <div class="bg-white shadow-md rounded-lg px-10 py-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-700">Data <?= ucfirst($kategori) ?></h2>
            <table class="table-auto w-full text-left">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Judul</th>
                        <th class="px-4 py-2">Gambar</th>
                        <th class="px-4 py-2">Harga</th>
                        <th class="px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                    <tr class="border-t text-gray-600">
                        <td class="border px-4 py-2"><?= $row['id'] ?></td>
                        <td class="border px-4 py-2"><?= $row['title'] ?></td>
                        <td class="border px-4 py-2">
                            <img src="<?= $row['link'] ?>" alt="<?= $row['title'] ?>" class="h-12 w-auto">
                        </td>
                        <td class="border px-4 py-2">Rp <?= number_format($row['price'], 0, ',', '.') ?></td>
                        <td class="border px-4 py-2">
                            <a href="update.php?id=<?= $row['id'] ?>&kategori=<?= $kategori ?>" class="btn-yellow">Update</a>
                            <a href="?kategori=<?= $kategori ?>&delete_id=<?= $row['id'] ?>" class="btn-red" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

        <!-- Tombol Logout -->
        <div class="flex justify-center mt-10">
            <a href="?logout=true" class="btn-red">Logout</a>
        </div>
    </div>

    <style>
        .btn-blue {
            background-color: #4299e1;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-blue:hover {
            background-color: #2b6cb0;
        }
        .btn-yellow {
            background-color: #ecc94b;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-yellow:hover {
            background-color: #d69e2e;
        }
        .btn-red {
            background-color: #f56565;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-red:hover {
            background-color: #c53030;
        }
        .btn-category {
            background-color: #edf2f7;
            color: #4a5568;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-category:hover {
            background-color: #cbd5e0;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cbd5e0;
            border-radius: 6px;
            transition: border-color 0.3s;
        }
        .form-input:focus {
            border-color: #4299e1;
            outline: none;
        }
    </style>
</body>
</html>
