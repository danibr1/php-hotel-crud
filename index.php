<? require_once __DIR__ . '/partials/scripts/get-rooms.php'?>

<!DOCTYPE html>
<html lang="en">

<!-- HEAD HTML -->
<?php require_once __DIR__ . '/partials/templates/head.php'?>

<body>
    <main class="container">
        <h1 class="my-4">ROOMS LIST</h1>

        <table class="table">
            <!-- Table Head   -->
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ROOM NUMBER</th>
                    <th>Details</th>
                </tr>
            </thead>
            
            <!-- Content -->
            <tbody>
                <?php //Loop DB records 
                if(!empty($rooms)){
                    foreach($rooms as $room) { ?>
                         <tr>
                            <td><?php echo $room['id'] ?></td>
                            <td><?php echo $room['room_number'] ?></td>
                            <td>
                                <a class="text-success" 
                                    href="./details.php?id=<?php echo $room['id']; ?>">
                                    View Room Details
                                </a>
                            </td>
                         </tr>
                    <?php } 
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>