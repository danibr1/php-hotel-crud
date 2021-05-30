<? require_once __DIR__ . '/partials/scripts/get-details-room.php'?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD HTML -->
<?php require_once __DIR__ . '/partials/templates/head.php'?>

<body>
    <main class="container">
        <h1 class="my-4">ROOMS DETAILS - Rooom n.<?php echo $room['room_number']?></h1>

        <table class="table">
            <!-- Table Head   -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ROOM NUMBER</th>
                    <th>FLOOR</th>
                    <th>BEDS</th>
                </tr>
            </thead>
            
            <!-- Content -->
            <tbody>  
                <tr>
                    <td><?php echo $room['id'] ?></td>
                    <td><?php echo $room['room_number'] ?></td>
                    <td><?php echo $room['floor'] ?></td>
                    <td><?php echo $room['beds'] ?></td>
                </tr> 
            </tbody>
        </table>
        <a href="./index.php">Return to Home</a>
    </main>
</body>
</html>