<?php
session_start();

$data = $_SESSION['data'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Profile Card</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h3 class="mb-0">Employee Profile</h3>
                    </div>

                    <div class="card-body">

                        <div class="mb-3">
                            <h6 class="text-muted">Name</h6>
                            <p class="fs-5 mb-0">
                                <?= $data['name'] ?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-muted">Email</h6>
                            <p class="fs-5 mb-0">
                                <?= $data['email'] ?>
                            </p>
                        </div>

                        <div class="mb-3">
                            <h6 class="text-muted">Phone</h6>
                            <p class="fs-5 mb-0">
                                <?= $data['phone'] ?>
                            </p>
                        </div>
                        <div class="mb-3">
                            <a href="logout.php">
                                <button type="button" class="btn btn-danger">Log Out</button>
                            </a>
                        </div>

                    </div>

                    <div class="card-footer text-center text-muted">
                        Employee Information
                    </div>

                </div>
            </div>
        </div>
    </div>





    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>