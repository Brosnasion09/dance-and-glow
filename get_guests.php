<?php
header('Content-Type: application/json'); // Respuesta en formato JSON

// Archivo donde se guardan los nombres
$file = 'guests.txt';

// Leer los nombres del archivo
$guests = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];

echo json_encode($guests);
?>