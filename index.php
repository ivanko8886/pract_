<?php
$filename = "data.txt";

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON as a string
    $json_str = file_get_contents('php://input');

    // Get as an object or array
    $data = json_decode($json_str);

    // Save array on each line
    $file = fopen($filename, 'w');
    foreach ($data as $row) {
        fwrite($file, $row . PHP_EOL);
    }
    fclose($file);

    return;
}

$rows = file($filename, FILE_IGNORE_NEW_LINES);
$data = [];

foreach ($rows as $row) {
    // Remove leading/trailing white space
    $trimmedRow = trim($row);

    // If the row is not empty, continue processing
    if (!empty($trimmedRow)) {
        $items = explode(" ", $trimmedRow);
        array_push($data, $items);
    }
}

echo json_encode($data);
?>