<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Lecturer</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Lecturers</a>
    </div>
</nav>

<div class="container col-lg-6 my-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="text-center">Create Lecturer</h3>
        </div>

        <div class="card-body">
            <form method="POST" action="index.php?action=store">

                <label>NAME:</label>
                <input type="text" name="name" class="form-control mb-3" required>

                <label>NIDN:</label>
                <input type="text" name="nidn" class="form-control mb-3" required>

                <label>PHONE:</label>
                <input type="text" name="phone" class="form-control mb-3" required>

                <label>JOIN DATE:</label>
                <input type="date" name="join_date" class="form-control mb-3" required>

                <button type="submit" class="btn btn-success">Submit</button>
                <a href="index.php" class="btn btn-info">Cancel</a>

            </form>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
