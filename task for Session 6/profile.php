<?php
session_start();
$data = $_SESSION['data'];
foreach ($data as $key => $value) {
    echo "<h1> $key: $value</h1>";
}
