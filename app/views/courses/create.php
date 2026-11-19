<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Course</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Lecturers & Courses</a>
    </div>
</nav>

<div class="container col-lg-6 my-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="text-center">Create Course</h3>
        </div>

        <div class="card-body">
            <form method="POST" action="index.php?action=course_store">

                <label>COURSE NAME:</label>
                <input type="text" name="course_name"
                       class="form-control mb-3" required>

                <label>LECTURER:</label>
                <select name="lecturer_id" class="form-control mb-3" required>
                    <option value="">-- Select Lecturer --</option>

                    <?php foreach ($lecturers as $lecturer): ?>
                        <option value="<?= $lecturer['id'] ?>">
                            <?= htmlspecialchars($lecturer['name']) ?>
                        </option>
                    <?php endforeach; ?>

                </select>

                <label>SEMESTER:</label>
                <input type="number" name="semester"
                       min="1" max="14"
                       class="form-control mb-3" required>

                <label>CREDITS (SKS):</label>
                <input type="number" name="credits"
                       min="1" max="6"
                       class="form-control mb-3" required>

                <button type="submit" class="btn btn-success">Submit</button>
                <a href="index.php?action=courses" class="btn btn-info">Cancel</a>

            </form>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
