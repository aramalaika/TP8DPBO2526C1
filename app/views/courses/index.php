<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Courses</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Lecturers & Courses</a>
    </div>
</nav>

<div class="container my-4">
    <h2>Data Mata Kuliah</h2>

    <a href="index.php" class="btn btn-secondary my-3">
        Data Lecturers
    </a>

    <a href="index.php?action=course_create" class="btn btn-primary my-3">
        Add New Course
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>COURSE NAME</th>
                <th>LECTURER</th>
                <th>SEMESTER</th>
                <th>CREDITS (SKS)</th>
                <th>ACTIONS</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($courses as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['course_name']) ?></td>
                <td><?= htmlspecialchars($row['lecturer_name']) ?></td>
                <td><?= htmlspecialchars($row['semester']) ?></td>
                <td><?= htmlspecialchars($row['credits']) ?></td>
                <td>
                    <a href="index.php?action=course_edit&id=<?= $row['id'] ?>"
                       class="btn btn-success btn-sm">Edit</a>

                    <a href="index.php?action=course_delete&id=<?= $row['id'] ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus mata kuliah ini?')">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>

            <?php if (empty($courses)): ?>
            <tr>
                <td colspan="6" class="text-center">
                    Belum ada data mata kuliah.
                </td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
