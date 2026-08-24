<?php

session_start();
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);

    validateEmail($email, 'email');
    vaildatePass($password, 'password');
    vaildateEmployee($name, $email, $password, $phone);
}

function validateRequired($value, $fieldName)
{
    global $errors;
    if (empty($value)) {
        $errors[$fieldName] = "This $fieldName is required.";
    } else {
        return null;
    }
}
function validateEmail($email, $fieldName)
{
    global $errors;
    if (!filter_var($email,  FILTER_VALIDATE_EMAIL)) {
        $errors[$fieldName] = "This $fieldName is required.";
    }
}
function vaildatePass($value, $fieldName)
{
    global $errors;
    if (strlen($value) < 8) {
        $errors[$fieldName] = "Password must be at least 8 characters.";
    } else {
        return null;
    }
}
function vaildateEmployee($name, $email, $password, $phone)
{
    $fileds = [
        'name' => $name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'phone' => $phone,
    ];
    foreach ($fileds as $fieldName => $value) {
        validateRequired($value, $fieldName);
    }
}
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index.php");
    exit();
} else {
    $_SESSION['data'] = $_POST;
    header("Location: profile.php");
    exit();
}
