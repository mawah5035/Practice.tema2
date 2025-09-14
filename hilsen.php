<?php
// Slå på feilmeldinger for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Tar imot data fra skjemaet
$fornavn = $_POST["fornavn"] ?? '';
$etternavn = $_POST["etternavn"] ?? '';

// Skriver ut en hilsen
echo "<h1>God dag $fornavn $etternavn!</h1>";
?>
