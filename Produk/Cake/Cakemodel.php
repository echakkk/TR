<?php
// BrowniesModel.php
include 'db_valesca.php';

class CakeModel {
    private $conn;

    public function __construct($connection) {
        $this->conn = $connection;
    }

    public function getBrownies() {
        $sql = "SELECT id, title, link, price FROM brownies WHERE kategori = 'cake'"; // Mengambil field yang sesuai
        $result = $this->conn->query($sql);
        $brownies = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $brownies[] = $row;
            }
        }
        return $brownies;
    }
}

// Menggunakan model
$model = new CakeModel($conn);
$brownies = $model->getBrownies();
