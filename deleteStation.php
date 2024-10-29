<?php
require('reusables/connect.php');

if (isset($_GET['id'])) {
    $station_id = intval($_GET['id']); 

    
    $query = 'DELETE FROM fire_station_locations WHERE id = ?'; 

   
    if ($stmt = mysqli_prepare($connect, $query)) {
        mysqli_stmt_bind_param($stmt, "i", $station_id);
        if (mysqli_stmt_execute($stmt)) {
            
            header("Location: stations.php?message=deleted"); 
            exit; 
        } else {
            echo "Error deleting station: " . mysqli_error($connect);
        }
        mysqli_stmt_close($stmt);
    }
} else {
    echo "No station ID provided.";
}


mysqli_close($connect);
?>

