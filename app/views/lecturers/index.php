<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecturers</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Lecturers</a>
    </div>
</nav>

<div class="container my-4">
    <h2>Data Lecturers</h2>

    <a href="index.php?action=create" class="btn btn-primary my-3">
        Add New
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>NIDN</th>
                <th>PHONE</th>
                <th>JOIN DATE</th>
                <th>ACTIONS</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($lecturers as $row): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['nidn']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['join_date']) ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?= $row['id'] ?>"
                       class="btn btn-success btn-sm">Edit</a>

                    <a href="index.php?action=delete&id=<?= $row['id'] ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin ingin menghapus data ini?')">
                       Delete
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>

            <?php if (empty($lecturers)): ?>
            <tr>
                <td colspan="6" class="text-center">Belum ada data dosen.</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
