<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Jika ingin mengizinkan akses dari domain lain

// Mengambil data dari file JSON
$jsonData = file_get_contents('coffee_data.json');
echo $jsonData;
?>
