
<?php

require_once __DIR__ . '/../../config/database.php';

class Lecturer {
    private $conn;
    private $table = "lecturers";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Menampilkan semua data dosen
    public function getAll() {
        $sql = "SELECT * FROM " . $this->table . " ORDER BY id ASC";
        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Mengambil data dosen berdasarkan ID
    public function getById($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // Menambahkan data dosen
    public function create($name, $nidn, $phone, $join_date) {
        $sql = "INSERT INTO " . $this->table .
               " (name, nidn, phone, join_date) VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $nidn, $phone, $join_date);

        return $stmt->execute();
    }

    // Mengubah data dosen
    public function update($id, $name, $nidn, $phone, $join_date) {
        $sql = "UPDATE " . $this->table .
               " SET name = ?, nidn = ?, phone = ?, join_date = ? WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssi", $name, $nidn, $phone, $join_date, $id);

        return $stmt->execute();
    }

    // Menghapus data dosen
    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>
