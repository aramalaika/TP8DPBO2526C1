<?php

require_once __DIR__ . '/../models/Course.php';
require_once __DIR__ . '/../models/Lecturer.php';

class CourseController {

    private $course;
    private $lecturer;

    public function __construct() {
        $this->course = new Course();
        $this->lecturer = new Lecturer();
    }

    // Menampilkan semua mata kuliah
    public function index() {
        $courses = $this->course->getAll();
        require_once __DIR__ . '/../views/courses/index.php';
    }

    // Menampilkan form tambah mata kuliah
    public function create() {
        $lecturers = $this->lecturer->getAll();
        require_once __DIR__ . '/../views/courses/create.php';
    }

    // Menyimpan mata kuliah baru
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $lecturer_id = (int) $_POST['lecturer_id'];
            $course_name = $_POST['course_name'];
            $semester = (int) $_POST['semester'];
            $credits = (int) $_POST['credits'];

            $this->course->create(
                $lecturer_id,
                $course_name,
                $semester,
                $credits
            );
        }

        header('Location: index.php?action=courses');
        exit;
    }

    // Menampilkan form edit mata kuliah
    public function edit() {
        $id = (int) $_GET['id'];

        $course = $this->course->getById($id);
        $lecturers = $this->lecturer->getAll();

        if (!$course) {
            header('Location: index.php?action=courses');
            exit;
        }

        require_once __DIR__ . '/../views/courses/edit.php';
    }

    // Memperbarui mata kuliah
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = (int) $_POST['id'];
            $lecturer_id = (int) $_POST['lecturer_id'];
            $course_name = $_POST['course_name'];
            $semester = (int) $_POST['semester'];
            $credits = (int) $_POST['credits'];

            $this->course->update(
                $id,
                $lecturer_id,
                $course_name,
                $semester,
                $credits
            );
        }

        header('Location: index.php?action=courses');
        exit;
    }

    // Menghapus mata kuliah
    public function delete() {
        $id = (int) $_GET['id'];

        $this->course->delete($id);

        header('Location: index.php?action=courses');
        exit;
    }
}

?>
