<?php

session_start();
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Session 6</title>
</head>

<body>
    <form action="handle.php" method="POST" novalidate>
        <div class="container mt-4">
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName1" aria-describedby="emailHelp">
            </div>
            <?php
            if (isset($errors['name'])) {
                echo "<p class='text-danger'>{$errors['name']}</p>";
            }
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <?php
            if (isset($errors['email'])) {
                echo "<p class='text-danger'>{$errors['email']}</p>";
            }
            ?>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <?php
            if (isset($errors['password'])) {
                echo "<p class='text-danger'>{$errors['password']}</p>";
            }
            ?>
            <div class="mb-3">
                <label for="exampleInputPhone1" class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" id="exampleInputPhone1" aria-describedby="emailHelp">
            </div>
            <?php
            if (isset($errors['phone'])) {
                echo "<p class='text-danger'>{$errors['phone']}</p>";
            }
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>