<?php

require_once __DIR__ . '/app/controllers/LecturerController.php';
require_once __DIR__ . '/app/controllers/CourseController.php';

$controller = new LecturerController();
$courseController = new CourseController();

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {

    // CRUD Lecturer
    case 'index':
        $controller->index();
        break;

    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store();
        break;

    case 'edit':
        $controller->edit();
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete();
        break;

    // CRUD Course
    case 'courses':
        $courseController->index();
        break;

    case 'course_create':
        $courseController->create();
        break;

    case 'course_store':
        $courseController->store();
        break;

    case 'course_edit':
        $courseController->edit();
        break;

    case 'course_update':
        $courseController->update();
        break;

    case 'course_delete':
        $courseController->delete();
        break;

    default:
        $controller->index();
        break;
}

?>
