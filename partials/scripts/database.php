<?php
/**
 * DATABASE CONNECTION
 */

// Connection information
$host = 'localhost';
$username = 'root';
$password = 'root';
$dn_name = 'hotel';

// Open connection
$conn = new mysqli($host, $username, $password, $dn_name);

// Check connection
if ($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}
?> 