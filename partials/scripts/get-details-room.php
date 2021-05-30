<?php
/**
 * GET DATA FROM ROOMS ARCHIVE
 */

require_once __DIR__ . '/database.php';

// Get id room 
$id = empty($_GET['id']) ? false : $_GET['id'];

// Query
if ($id) {
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        echo "query error";
    };
}

// Close DB connection
$conn->close();

