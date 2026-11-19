<?php

require_once __DIR__ . '/../../config/database.php';

class Course {
    private $conn;
    private $table = "courses";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    // Menampilkan semua mata kuliah beserta nama dosen
    public function getAll() {
        $sql = "SELECT courses.*, lecturers.name AS lecturer_name
                FROM " . $this->table . "
                JOIN lecturers ON courses.lecturer_id = lecturers.id
                ORDER BY courses.id ASC";

        $result = $this->conn->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Mengambil mata kuliah berdasarkan ID
    public function getById($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result()->fetch_assoc();
    }

    // Menambahkan mata kuliah
    public function create($lecturer_id, $course_name, $semester, $credits) {
        $sql = "INSERT INTO " . $this->table . "
                (lecturer_id, course_name, semester, credits)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "isii",
            $lecturer_id,
            $course_name,
            $semester,
            $credits
        );

        return $stmt->execute();
    }

    // Mengubah mata kuliah
    public function update($id, $lecturer_id, $course_name, $semester, $credits) {
        $sql = "UPDATE " . $this->table . "
                SET lecturer_id = ?, course_name = ?, semester = ?, credits = ?
                WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "isiii",
            $lecturer_id,
            $course_name,
            $semester,
            $credits,
            $id
        );

        return $stmt->execute();
    }

    // Menghapus mata kuliah
    public function delete($id) {
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);

        return $stmt->execute();
    }
}

?>
