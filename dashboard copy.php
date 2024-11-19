<?php
// upload.php
include 'db_valesca.php';

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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Menu </title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold text-center mb-6">Upload Menu </h2>
        <form action="upload.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                <input type="text" id="title" name="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan judul brownies">
            </div>
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 text-sm font-bold mb-2">Kategori:</label>
                <select id="kategori" name="kategori" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"> 
                    <option value="brownies">Brownies</option>
                    <option value="cake">Cake</option>
                    <option value="dessert">Dessert</option>
                    <option value="pastry">Pastry</option>
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
                <input type="file" id="link" name="link" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan link gambar brownies">
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Harga:</label>
                <input type="number" id="price" name="price" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan harga brownies">
            </div>
            <div class="flex items-center justify-between">
                <input type="submit" value="Upload" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>
        </form>
    </div>
</body>
</html>