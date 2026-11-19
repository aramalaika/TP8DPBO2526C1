
<?php

require_once __DIR__ . '/../models/Lecturer.php';

class LecturerController {

    private $lecturer;

    public function __construct() {
        $this->lecturer = new Lecturer();
    }

    // Menampilkan semua data dosen
    public function index() {
        $lecturers = $this->lecturer->getAll();

        require_once __DIR__ . '/../views/lecturers/index.php';
    }

    // Menampilkan form tambah dosen
    public function create() {
        require_once __DIR__ . '/../views/lecturers/create.php';
    }

    // Menyimpan data dosen baru
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $nidn = $_POST['nidn'];
            $phone = $_POST['phone'];
            $join_date = $_POST['join_date'];

            $this->lecturer->create(
                $name,
                $nidn,
                $phone,
                $join_date
            );
        }

        header('Location: index.php');
        exit;
    }

    // Menampilkan form edit dosen
    public function edit() {
        $id = (int) $_GET['id'];
        $lecturer = $this->lecturer->getById($id);

        if (!$lecturer) {
            header('Location: index.php');
            exit;
        }

        require_once __DIR__ . '/../views/lecturers/edit.php';
    }

    // Memperbarui data dosen
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = (int) $_POST['id'];
            $name = $_POST['name'];
            $nidn = $_POST['nidn'];
            $phone = $_POST['phone'];
            $join_date = $_POST['join_date'];

            $this->lecturer->update(
                $id,
                $name,
                $nidn,
                $phone,
                $join_date
            );
        }

        header('Location: index.php');
        exit;
    }

    // Menghapus data dosen
    public function delete() {
        $id = (int) $_GET['id'];

        $this->lecturer->delete($id);

        header('Location: index.php');
        exit;
    }
}

?>
