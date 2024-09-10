<?php
// generate.php

require_once 'FileUtility.php';
require_once 'Random.php';

$random = new Random();
$filename = 'persons.csv';

// Generate the header
$headers = [
    'UUID', 'Title', 'First Name', 'Last Name', 'Street Address', 'Barangay',
    'Municipality', 'Province', 'Country', 'Phone Number', 'Mobile Number',
    'Company Name', 'Company Website', 'Job Title', 'Favorite Color', 'Birthdate',
    'Email Address', 'Password'
];
$csv = implode(',', $headers) . "\n";

// Generate 300 records
for ($i = 0; $i < 300; $i++) {
    $person = $random->generatePerson();
    $csv .= implode(',', array_map(function($item) {
        return '"' . str_replace('"', '""', $item) . '"';
    }, $person)) . "\n";
}

// Save to file
FileUtility::writeToFile($filename, $csv);

echo "Data generated and saved to $filename.";
?>

