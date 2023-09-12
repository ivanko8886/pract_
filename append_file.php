<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = __DIR__ . '/data.txt';
    move_uploaded_file($_FILES['file']['tmp_name'], $file);
}
?>