<?php
/**
 * GET DATA FROM ROOMS ARCHIVE
 */

require_once __DIR__ . '/database.php';

// Get room list
$sql = "SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze`";
$result = $conn->query($sql);

// Check
if ($result && $result->num_rows > 0) {
    $rooms = [];

    while ($row = $result->fetch_assoc()) {
        // Popolare array rooms
        $rooms[] = $row;
    }
    //var_dump($rooms);
} else {
    echo 'query error';
}

// Close DB connection
$conn->close();

