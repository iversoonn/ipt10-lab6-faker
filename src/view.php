<?php
// view.php

require_once 'FileUtility.php';

// Read the file
$filename = 'persons.csv';
$data = FileUtility::readFromFile($filename);

// Convert CSV to array
$lines = explode("\n", $data);
$headers = str_getcsv(array_shift($lines));
$rows = array_map('str_getcsv', $lines);

// Display in an HTML table
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title>Persons Data</title>';
echo '<style>table { width: 100%; border-collapse: collapse; } th, td { border: 1px solid black; padding: 8px; text-align: left; }</style>';
echo '</head>';
echo '<body>';
echo '<h1>Persons Data</h1>';
echo '<table>';
echo '<thead><tr>';

foreach ($headers as $header) {
    echo '<th>' . htmlspecialchars($header) . '</th>';
}

echo '</tr></thead>';
echo '<tbody>';

foreach ($rows as $row) {
    echo '<tr>';
    foreach ($row as $cell) {
        echo '<td>' . htmlspecialchars($cell) . '</td>';
    }
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '</body>';
echo '</html>';
?>